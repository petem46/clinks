@extends('layouts.app')
@section('content')
<div class="indexsubjects container">
    <h5 class="text-muted">{{$subject->school['name']}} {{$subject->keystage['name']}} </h5>
    <h1 class="display-4">{{$subject->name}} <small class="text-muted">{{$subject->year['name']}} </small></h1>
    <div class="col-12 mt-3 px-0 d-flex">
        <h1 class="text-blue col-8 ">Topics</h1>
        <a href="{{action('TopicsController@create')}}" class="offset-2 col-2 btn btn-green mb-3 float-right"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Topic</a>
    </div>
    <table class="table">
        <thead>
            <th>Week</th>
            <th>Topic</th>
            <th>Description</th>
            <th>Links</th>
        </thead>
        <tbody>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tbody>
    </table>
</div>
@endsection
