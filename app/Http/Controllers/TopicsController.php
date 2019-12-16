<?php

namespace App\Http\Controllers;

use App\Clink;
use App\School;
use App\Term;
use App\Topic;
use App\Year;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TopicsController extends Controller
{

    public function index()
    {
        $data = [
            'topics' => Topic::with('term')
            ->with('school')
            ->with('subject')
            ->with('clink')
            ->with('clinked')
            ->orderBy('name')
            ->get(),
        ];
        // dd($data);
        return view('topics.index', $data);

    }

    public function create()
    {
        $data = [
            'subjectid' => session('subject_id'),
            'subjectname' => session('subject_name'),
            'terms' => Term::get(),
            'years' => Year::get(),
            'schools' => School::orderby('name')->get(),
            'checkedschools' => School::where('id', Auth::user()->school_id)->get()
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
            'year_id' => $request->year_id,
            'term_id' => $request->term_id,
            'week' => $request->week,
            'description' => $request->description,
        ]);

        $topic->school()->detach();
        if (!empty($request->get('checkedschooldata'))) {
            foreach($request->get('checkedschooldata') as $school) {
                $topic->school()->attach($school);
            }
        }

        return redirect('/subjects/'.$request->subject_id)->with('success','Topic Added Successfully');

    }

    public function show($id)
    {
        $data = [
            'topic' => Topic::with('term')
                    ->with('school')
                    ->with('subject')
                    ->with('clink')
                    ->with('clinked')
                    ->find($id),
        ];
        // dd($data);
        return view('topics.view', $data);
    }

    public function link($id)
    {
        $topic = Topic::with('subject')->find($id);
        $school_id = Auth::user()->school_id;
        $subjectid = $topic->subject_id;
        $data = [
            'topic' => Topic::with('subject')->find($id),
            'clinks' => Topic::with('subject')->where('subject_id', "!=", $subjectid)->orderBy('subject_id')->get(),
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

    public function declink($id, $clinkid)
    {
        $topic = Topic::find($id);
        $topic->clink()->detach($clinkid);
        return redirect('/subjects/'. $topic->subject_id);

    }

    public function declinked($clinkid, $id)
    {
        $topic = Topic::find($clinkid);
        $topic->clink()->detach($id);
        $subject = Topic::select('subject_id')->find($id);
        return redirect('/subjects/'. $subject->subject_id);

    }

    public function edit($id)
    {
        $data = [
            'topic' => Topic::with('term')
                    ->with('school')
                    ->with('subject')
                    ->with('clink')
                    ->with('clinked')
                    ->find($id),
            'terms' => Term::get(),
            'years' => Year::get(),
            'schools' => School::orderby('name')->get(),
            'checkedschools' => School::select('id', 'name')->whereHas('topic', function($q) use ($id) { $q->where('topic_id', $id); })->get(),
        ];
        return view('topics.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $topic = Topic::find($id);
        $topic->name = $request->get('name');
        $topic->subject_id = $request->get('subject_id');
        $topic->year_id = $request->get('year_id');
        $topic->term_id = $request->get('term_id');
        $topic->week = $request->get('week');
        $topic->description = $request->get('description');
        $topic->save();

        $topic->school()->detach();
        if (!empty($request->get('checkedschooldata'))) {
            foreach($request->get('checkedschooldata') as $school) {
                $topic->school()->attach($school);
            }
        }

        return redirect('/topics/'. $id);
    }

    public function destroy(Topics $topics)
    {
        //
    }
}
