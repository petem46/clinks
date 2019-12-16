<?php

namespace App\Http\Controllers;

use App\Keystage;
use App\School;
use App\Subject;
use App\Topic;
use App\Year;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;


class SubjectsController extends Controller
{
    public function index()
    {
        $data = [
            'subjects' => Subject::orderBy('name')->get(),
        ];
        // dd($data);
        return view('subjects.index', $data);
    }

    public function create()
    {
        $data = [
            'schools' => School::get(),
            'years' => Year::get(),
            'keystages' => Keystage::get(),
        ];
        return view('subjects.new', $data);
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

        $subject = Subject::create([
            'name' => $request->name,
            // 'school_id' => $request->school_id,
            'school_id' => Auth::user()->school_id,
            'year_id' => $request->year_id,
            'keystage_id' => $request->keystage_id,
        ]);

        return redirect('/subjects/'.$subject->id)->with('success','Subject Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'subject' => Subject::with('topic')
                        ->find($id),
            'topics' => Topic::with('clink')
                        ->with('school')
                        ->where('subject_id', $id)
                        ->orderBy('year_id', 'asc')
                        ->orderBy('term_id', 'asc')
                        ->get(),
        ];
        // dd($data);
        session(['subject_id' => $id]);
        session(['subject_name' => Subject::select('name')->find($id)->name]);

        return view('subjects.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
