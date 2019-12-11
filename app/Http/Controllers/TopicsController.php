<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'subjectid' => session('subject_id'),
            'subjectname' => session('subject_name'),
        ];
        // dd($data);
        return view('topics.new', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->flash();

        //validation
        $request->validate([
            //
        ],
        [
            //
        ]);

        $topic = Topic::create([
            'name' => $request->name,
            'subject_id' => $request->subject_id,
            'week' => $request->week,
            'description' => $request->description,
        ]);

        return redirect('/subjects/'.$request->subject_id)->with('success','Topic Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'topic' => Topic::with('subject')->with('clink')->with('clinked')->find($id),
        ];
        // dd($data);
        return view('topics.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function edit(Topics $topics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topics $topics)
    {
        $topic->topic()->attach($linktopicid);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topics $topics)
    {
        //
    }
}
