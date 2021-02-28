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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poll = Poll::with('user')->orderBy('created_at', 'DESC')->get();
        return view('home.index', compact('poll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();

        $user = Auth::user();
        //Jika user tidak admin
        if(!$user->isAdmin()){
          echo "Maaf hanya admin yang dapat menambahkan polling";
            return back();
        } else {
            return view('home.tambah', compact('data'));
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request;
        // die;

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required|date',
            'created_by' => 'required'
        ]);

        $poll = new Poll;
        $poll->title = $request->title;
        $poll->description = $request->description;
        $poll->deadline = $request->deadline;
        $poll->created_by = $request->created_by;
        $poll->save();

        return redirect('/home');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function show(Poll $poll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function edit(Poll $poll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poll $poll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poll $poll)
    {
        //
    }
}
