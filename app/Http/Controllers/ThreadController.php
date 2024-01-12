<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Thread;
use Auth;

class ThreadController extends Controller
{
    public function index()
    {
        $threads = Thread::all();
        return view('forum.index', ['threads' => $threads]);
    }
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'text' => 'required|string'
        ]);


        $thread = new Thread();
        $thread->title = $request->title;
        $thread->text = $request->text;
        $thread->user_id = Auth::id();

        $thread->save();


        return redirect()->route('threads.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
