<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Issue;
use App\Solutions;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Requester;
use App\philanthropist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function viewRegister()          /*Show register page*/
    {
        return view('projectViews.register');
    }

    public function viewRequesterReg()      /*Show register page for requesters*/
    {
        return view('projectViews.Register_req');
    }

    public function viewPhilanthropistReg()     /*Show register page for Philanthropists*/
    {
        return view('projectViews.register_ph');
    }

    public function viewAdminReg()              /*Show register page for System Admins*/
    {
        return view('projectViews.register_admin');
    }


    /**
     * Creates a user.
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [   /*validating the given input*/
            'fname' => 'required',
            'lname' => 'required',
            'nic' => 'required|unique:user,NID',
            'address' => 'required',
            'terms-check' => 'required|accepted',
            'username' => 'required|unique:user,username',
            'password' => 'required|confirmed'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $user = new User();
        $user->NID = $request->nic;
        $user->Username = $request->username;
        $user->Password = bcrypt($request->password);
        $user->save();

        return redirect()->to('login')->with('success', 'User registered successfully. Please login');
    }

    /**
     *
     * Create a Requester
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function createRequester(Request $request)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [         /*validating the given input*/
            'fname' => 'required|string',
            'lname' => 'required|string',
            'nic' => 'required|unique:user,NID|max:10',
            'contact' => 'required',
            'address' => 'required',
            'terms-check' => 'required|accepted',
            'username' => 'required|unique:user,username',
            'password' => 'required|confirmed'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->NID = $request->nic;
        $user->Role = "Requester";
        $user->Username = $request->username;
        $user->Password = bcrypt($request->password);
        $user->save();

        $user_id = $user->ID;

        $requester = new Requester();
        $requester->User_ID = $user_id;
        $requester->FirstName = $request->fname;
        $requester->LastName = $request->lname;
        $requester->NID = $request->nic;
        $requester->ContactNo = $request->contact;
        $requester->Address = $request->address;
        $requester->Username = $request->username;
        $requester->save();

        return redirect()->to('login')->with('success', 'User registered successfully. Please login');
    }

    /**
     * Create a Philanthropist
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function createPhilanthropist(Request $request)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [             /*validating the given input*/
            'fname' => 'required',
            'lname' => 'required',
            'nic' => 'required|unique:user,NID',
            'contact' => 'required',
            'occupation' => 'required',
            'workplace' => 'required',
            'city' => 'required',
            'terms-check' => 'required|accepted',
            'username' => 'required|unique:user,username',
            'password' => 'required|confirmed'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->NID = $request->nic;
        $user->Role = "Philanthropist";
        $user->Username = $request->username;
        $user->Password = bcrypt($request->password);
        $user->save();

        $user_id = $user->ID;

        $philanthropist = new philanthropist();
        $philanthropist->User_ID = $user_id;
        $philanthropist->FirstName = $request->fname;
        $philanthropist->LastName = $request->lname;
        $philanthropist->NID = $request->nic;
        $philanthropist->ContactNo = $request->contact;
        $philanthropist->Occupation = $request->occupation;
        $philanthropist->Place_of_Work = $request->workplace;
        $philanthropist->City = $request->city;
        $philanthropist->Username = $request->username;
        $philanthropist->save();

        return redirect()->to('login')->with('success', 'User registered successfully. Please login');
    }

    /**
     * Create a system admin
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function createAdmin(Request $request)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [         /*validating the given input*/
            'name' => 'required',
            'nic' => 'required|unique:user,NID',
            'terms-check' => 'required|accepted',
            'username' => 'required|unique:user,username',
            'password' => 'required|confirmed'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->NID = $request->nic;
        $user->Role = "Admin";
        $user->Username = $request->username;
        $user->Password = bcrypt($request->password);
        $user->save();

        $user_id = $user->ID;

        $admin = new Admin();
        $admin->User_ID = $user_id;
        $admin->Name = $request->name;
        $admin->NID = $request->nic;
        $admin->Username = $request->username;
        $admin->save();

        return redirect()->to('login')->with('success', 'User registered successfully. Please login');
    }

    /**
     * Show the home view for different typs of users
     *
     * @return $this
     */
    public function home(){

            $user = Auth::user();
            if($user->Role=='Requester') {
                $addedIssues=Issue::all()->where('Submitter',$user->NID);
                $issue = new Issue();
                $votes = $user->votes();
                return view('UserViews.reqIndex')
                    ->with('addedIssues', $addedIssues)
                    ->with('votes', $votes)
                    ->with('user', Auth::user());
            }elseif($user->Role=='Philanthropist') {
                $addedSolutions=Solutions::all()->where('Submitter',$user->NID);
                return view('UserViews.phIndex')
                    ->with('addedSolutions', $addedSolutions)
                    ->with('user', Auth::user());
            }elseif($user->Role=='Admin') {
                return view('UserViews.adminHome')->with('user', Auth::user());
            }
            return "";
    }

    /**
     * Show leaderboard
     *
     * @return $this
     */
    public function leaderboard(){
        $philanthropists = philanthropist::orderBy('Points','desc')->get();
        return view('UserViews.leaderboard')
            ->with('philanthropists',$philanthropists);
    }

    /**
     * Show the list of all users
     *
     * @return $this
     */
    public function allUsers(){
        $users = User::all();
        return view('UserViews.users')
            ->with('users',$users);
    }

}
