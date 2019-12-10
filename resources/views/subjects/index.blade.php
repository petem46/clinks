@extends('layouts.app')
@section('content')
<div class="indexsubjects container">
<h1>Subjects</h1>
<table class="table">
<thead>
    <th>Name</th>
    <th>School</th>
    <th>Key Stage</th>
    <th>Year</th>
    <th class="actions"></th>
</thead>
<tbody>
    @foreach ($subjects as $subject)
    <tr>
        <td>{{$subject->name}}</td>
        <td>{{$subject->school['name']}}</td>
        <td>{{$subject->keystage['name']}}</td>
        <td>{{$subject->year['name']}}</td>
        <td><a href="{{action('SubjectsController@show', $subject->id)}}" class="btn btn-block btn-blue">Details</a></td>
    </tr>
    @endforeach
</tbody>
</table>

<div class="col-12 mt-3 px-0">
    <a href="{{action('SubjectsController@create')}}" class="btn btn-green btn-block mb-3 mb-md-0"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New</a>
</div>

</div>
@endsection
