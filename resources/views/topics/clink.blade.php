@extends('layouts.app')
@section('content')
<div class="topics container">
        <h6 class="text-muted">{{$topic->subject['name']}}: {{$topic->name}} </h6>
    <h1 class="display-4">Create a Link</h1>
    <div class="table-responsive">
    <table class="table">
        <thead class="thead-dark">
            <th>Subject</th>
            <th>Year</th>
            <th>Topic</th>
            {{-- <th>Week</th> --}}
            <th></th>
        </thead>
        <tbody>
        @foreach ($clinks as $clink)
            <tr>
                <td>{{$clink->subject['name']}} </td>
                <td>{{$clink->subject['year']['name']}} </td>
                <td>{{$clink->name}} </td>
                {{-- <td>{{$clink->week}} </td> --}}
                <td>
                <a href="{{action('TopicsController@clink', ['id'=>$topic->id,'clinkid'=>$clink->id])}}" class="btn btn-outline text-green float-right">
                    <i class="fas fa-plus"></i>&nbsp;&nbsp;Add Link
                </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
