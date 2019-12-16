@extends('layouts.app')
@section('content')
<div class="indexsubjects container">
    <h6 class="text-muted">{{Auth::user()->name}} <small>{{Auth::user()->school['name']}} (Log Out)</small></h6>
    <div class="col-12 mt-3 px-0 d-flex">
        <div class="col-8 pl-0">
            <h1 class="display-4"><i class="fas fa-fw fa-chalkboard-teacher"></i>&nbsp;&nbsp;All Subjects</h1>
        </div>
        <div class="col-2 offset-2 pr-0">
            <a href="{{action('SubjectsController@create')}}" class="btn btn-lg btn-outline text-green mb-0 get-down-right"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Subject</a>
        </div>
    </div>
    <div class="table-responsive">

    <table class="table table-hover">
    <thead class="bg-primary text-white">
        <th><i class="fa-fw fas fa-blank"></i>&nbsp;&nbsp;Name</th>
        <th></th>
    </thead>
    <tbody>
    @foreach ($subjects as $subject)
    <tr>
        <td class="pl-0"><a href="{{action('SubjectsController@show', $subject->id)}}" class="btn btn-outline text-dark"><i class="fas fa-fw fa-angle-double-right"></i>&nbsp;&nbsp;{{$subject->name}}</a></td>
        <td class="text-right"><a href="{{action('SubjectsController@show', $subject->id)}}" class="btn btn-outline text-info">{{count($subject->topic)}} Topics&nbsp;&nbsp;<i class="fas fa-fw fa-angle-double-right"></i></a></td>
    </tr>
    @endforeach
</tbody>
</table>
    </div>


</div>
@endsection
