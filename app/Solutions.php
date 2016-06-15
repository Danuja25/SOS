<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Auth;

class Solutions extends Model implements AuthenticatableContract, CanResetPasswordContract

{
    use Authenticatable, CanResetPassword;

    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    protected $table = "solutions";

    public $timestamps = false;
    protected $primaryKey = "Solution_No";

    public function Issue(){
        return $this->belongsTo('App\Issue');
    }

    public function votes()
    {
        return $this->hasMany('App\SolutionVotes', 'SolutionID', 'Solution_No');
    }

    public function hasVote()
    {
        $user = Auth::user();
        return $this->votes()->where('VoterID', $user->NID)->count() > 0;
    }

}
