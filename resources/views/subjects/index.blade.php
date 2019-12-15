@extends('layouts.app')
@section('content')
<div class="indexsubjects container">
    <h6 class="text-muted">{{Auth::user()->name}} <small>{{Auth::user()->school['name']}} </small></h6>
    <h1 class="display-4">Subject List</h1>
    <hr>
    <div class="col-12 mt-3 px-0 d-flex">
        <div class="col-8 pl-0">
            <h1 class="text-muted">&nbsp;</h1>
        </div>
      <div class="col-2 offset-2 pr-0">
        <a href="{{action('SubjectsController@create')}}" class="btn btn-outline text-green mb-3 float-right"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Subject</a>
      </div>
    </div>
    <div class="table-responsive">

    <table class="table">
<thead class="thead-dark">
    <th>Name</th>
    <th>School</th>
    <th>Key Stage</th>
    <th>Year</th>
    <th class="actions"></th>
</thead>
<tbody>
    @foreach ($subjects as $subject)
    <tr>
        <td class="pl-0"><a href="{{action('SubjectsController@show', $subject->id)}}" class="btn btn-outline text-dark">{{$subject->name}}</a></td>
        <td>{{$subject->school['name']}}</td>
        <td>{{$subject->keystage['name']}}</td>
        <td>{{$subject->year['name']}}</td>
        <td class="text-right"><a href="{{action('SubjectsController@show', $subject->id)}}" class="btn btn-outline text-info"><i class="fas fa-search"></i>  View Topics</a></td>
    </tr>
    @endforeach
</tbody>
</table>
    </div>


</div>
@endsection
