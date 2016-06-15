<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Auth;

class Issue extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'issues';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public $timestamps = false;
    protected $primaryKey = "Issue_No";

    public function User()
    {
        return $this->hasOne('App\Requester');
    }

    public function Solution()
    {
        return $this->hasMany('App\Solutions','Issue_No','Issue_No');
    }

    public function issueVotes()
    {
        return $this->hasMany('App\IssueVotes');
    }

    public function votes()
    {
        return $this->hasMany('App\IssueVotes', 'Issue_No', 'Issue_No');
    }


    /**
     * Determine if the current user has voted for this issue
     * @return bool
     */
    public function hasVote()
    {
        $user = Auth::user();
        return $this->votes()->where('VoterID', $user->NID)->count() > 0;
    }
}
