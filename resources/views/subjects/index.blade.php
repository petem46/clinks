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
</thead>
<tbody>
    @foreach ($subjects as $subject)
    <tr>
        <td>{{$subject->name}}</td>
        <td>{{$subject->school['name']}}</td>
        <td>{{$subject->keystage['name']}}</td>
        <td>{{$subject->year['name']}}</td>
    </tr>
    @endforeach
</tbody>
</table>

<div class="col-12 mt-3 px-0">
    <a href="{{action('SubjectsController@create')}}" class="btn btn-red btn-block mb-3 mb-md-0"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New</a>
</div>

</div>
@endsection
