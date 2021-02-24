<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $table = 'polls';
    protected $fillable = ['id', 'title', 'description', 'deadline', 'created_by'];

    public function getCreator()
    {
        return User::find($this->created_by)->username;
    }

    public function isAdmin()
    {
        return Auth()->user()->username('admin');
    }

    public function isVoted()
    {
        //get user id
        $user_id = Auth()->user()->id;

        //Count voted
        $count = Votes::where('user_id', $user_id)->where('pool_id', $this->id)->count();
        return $count > 0;
    }

    public function isDeadline()
    {
        return $this->deadline < Carbon::now();
    }

    public function viewResult()
    {
        return $this->isVoted() || $this->isDeadline() || auth()->user()->id;
    }

    public function getResult()
    {
        if(!$this->viewResult()){
            return null;
        }

        return $this->pollResult();
    }

}