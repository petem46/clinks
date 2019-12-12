<?php

namespace App\Http\Controllers;

use App\Topic;
use App\Clink;
use Illuminate\Http\Request;

class TopicsController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $data = [
            'subjectid' => session('subject_id'),
            'subjectname' => session('subject_name'),
        ];
        // dd($data);
        return view('topics.new', $data);

    }

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

    public function show($id)
    {
        $data = [
            'topic' => Topic::with('subject')->with('clink')->with('clinked')->find($id),
        ];
        // dd($data);
        return view('topics.view', $data);
    }

    public function link($id)
    {
        $topic = Topic::with('subject')->find($id);
        $ksid = $topic->subject['keystage_id'];
        $subjectid = $topic->subject_id;
        $data = [
            'topic' => Topic::with('subject')->find($id),
            'clinks' => Topic::with('subject')->whereHas('Subject', function($q) use($ksid){
                $q->where('keystage_id',"=",$ksid);
            })->where('subject_id', "!=", $subjectid)->orderBy('subject_id')->get(),
        ];
        // dd($data);
        return view('topics.clink', $data);
    }

    public function clink($id, $clinkid)
    {
        $topic = Topic::find($id);
        $topic->clink()->attach($clinkid);

        return redirect('/subjects/'. $topic->subject_id);

    }

    public function edit(Topics $topics)
    {
        //
    }

    public function update(Request $request, Topics $topics)
    {
        $topic->topic()->attach($linktopicid);
    }

    public function destroy(Topics $topics)
    {
        //
    }
}
