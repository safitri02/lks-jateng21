<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Poll;
use App\Models\Choice;
use App\Models\User;
use Auth;
use App\Models\Votes;
use Illuminate\Http\Request;

class PollController extends Controller
{

    public function index()
    {
        $poll = Poll::with('user')->orderBy('created_at', 'DESC')->get();
        return view('home.index', compact('poll'));
    }
 
    public function store(Request $request)
    {
        $user = User::all();
        if(!$user->isAdmin()){
            echo "Hanya admin yang boleh menambah";
        } else{

            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'deadline' => 'required|date',
                'created_by' => 'required'
            ]);
    
            $created_by = Auth::user()->id;
    
            $poll = new Poll;
            $poll->title = $request->title;
            $poll->description = $request->description;
            $poll->deadline = $request->deadline;
            $poll->created_by = $created_by;
            $poll->save();
    
            foreach($request->choice as $choice){
                Choice::create([
                    'choice' => $choice,
                    'pool_id' => $poll->id
                ]);
            }
    
            return back();
        }

      
    }

    public function destroy(Poll $poll, $id)
    {
        $poll = Poll::find($id);
        $user = User::all();

        if($user->isAdmin()){
            echo "Hanya admin yg boleh menghapus";
        } else{
            $poll->delete();
            return back();
        }
        
    }

    public function vote(Poll $poll, Choice $choice)
    {
        $user = User::all();
        if($user->isAdmin()){
            echo "Admin tidak boleh vote";
        };

        if(Carbon::parse($poll->deadline)->isAfter(now())){
            echo "Voting sudah deadline";
        }

        Votes::create([
            'choice_id' => $choice->id,
            'user_id' => Auth::user()->id,
            'pool_id' => $poll->id,
            'division_id' => Auth::user()->devision_id
        ]);

        echo "Voting bErhasil";
        return back();

    }

}
