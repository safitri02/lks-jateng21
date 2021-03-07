<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Pool;
use App\Models\Choice;
use App\Models\User;
use Auth;
use App\Models\Votes;
use Illuminate\Http\Request;

class PoolController extends Controller
{

    public function index()
    {
        $pool = Pool::with('user','choices','votes')->orderBy('created_at', 'DESC')->get();
        // $choice = Choice::with('pool')->where('pool_id', 'id')->get();
        return view('home.index', compact('pool'));
    }
 
    public function store(Request $request)
    {   
        // return $request;
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'deadline' => 'required|date',
                'choice' => 'array|min:2',
                'choice.*' => 'string|distinct'
            ]);

            $pool = new Pool;
            $pool->title = $request->title;
            $pool->description = $request->description;
            $pool->deadline = $request->deadline;
            $pool->created_by = auth()->user()->id;
            $pool->save();

            foreach($request->choice as $choices){
                $choice = Choice::create([
                    'choice' => $choices,
                    'pool_id' => $pool->id
                ]);
            }

            // echo "Berhasil";
            return redirect('/home');
      
    }

    public function vote(Request $request, $pool_id, $choice_id)
    {
        $user = User::all();
        $poll = Pool::find($pool_id);
        $choice = Choice::find($choice_id);

        if($user->isAdmin()){
            echo "Admin tidak boleh vote";
        };

        if(!$poll || !$choice){
            echo "Invalid Choice";
        }

        if(Carbon::parse($poll->deadline)->isAfter(now())){
            echo "Voting sudah deadline";
        }

        if(Votes::where('user_id', auth()->user()->id)->where('pool_id', $poll_id)->first()){
            echo "Already Vote!";
        }

        Votes::create([
            'choice_id' => $choice_id,
            'user_id' => Auth::user()->id,
            'pool_id' => $poll_id,
            'division_id' => Auth::user()->devision_id
        ]);

        echo "Voting berhasil";
        return back();

    }

    public function destroy(Pool $pool, $id)
    {
        $pool = Pool::find($id);
        $user = User::all();

        if(!$user->isAdmin()){
            echo "Hanya admin yg boleh menghapus";
        } else{
            $pool->delete();
            return back();
        }
        
    }

}
