@extends('layouts.app')
@section('content')
<div class="indexsubjects container">
    <h6 class="text-muted">{{Auth::user()->name}} <small>{{Auth::user()->school['name']}} (Log Out)</small></h6>
    <div class="col-12 mt-3 px-0 d-flex">
        <div class="col-8 pl-0">
            <h1 class="display-4">Linked Topics</h1>
        </div>
        <div class="col-2 offset-2 pr-0 d-none">
            <a href="{{action('TopicsController@create')}}" class="btn btn-lg btn-outline text-green mb-0 get-down-right"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Topic</a>
        </div>
    </div>
    <div class="table-responsive">

    <table class="table table-hover">
        <thead class="bg-primary text-white">
            <th><i class="fa-fw fas fa-blank"></i>&nbsp;&nbsp;Name</th>
            <th><i class="fa-fw fas fa-blank"></i>&nbsp;&nbsp;Subject</th>
            <th>Year</th>
            <th>Term</th>
            <th class="bg-green"><i class="fa-fw fas fa-blank"></i>&nbsp;&nbsp;Name</th>
            <th class="bg-green"><i class="fa-fw fas fa-blank"></i>&nbsp;&nbsp;Subject</th>
            <th class="bg-green">Year</th>
            <th class="bg-green">Term</th>
        </thead>
        <tbody>
            @foreach ($topics as $topic)
            @if (count($topic->clink) == 0)
            @else
            <tr>
                <td class="pl-0"><a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-outline text-dark"><i class="fas fa-fw fa-angle-double-right"></i>&nbsp;&nbsp;{{$topic->name}}</a></td>
                <td class="pl-0"><a href="{{action('SubjectsController@show', $topic->subject_id)}}" class="btn btn-outline text-dark"><i class="fas fa-fw fa-angle-double-right"></i>&nbsp;&nbsp;{{$topic->subject['name']}}</a></td>
                <td>{{$topic->year['name']}} </td>
                <td>{{$topic->term['termname']}} </td>
                @foreach ($topic->clink as $clink)

                <td class="pl-0"><a href="{{action('TopicsController@show', $clink->id)}}" class="btn btn-outline text-dark"><i class="fas fa-fw fa-angle-double-right"></i>&nbsp;&nbsp;{{$clink->name}}</a></td>
                <td class="pl-0"><a href="{{action('SubjectsController@show', $clink->subject_id)}}" class="btn btn-outline text-dark"><i class="fas fa-fw fa-angle-double-right"></i>&nbsp;&nbsp;{{$clink->subject['name']}}</a></td>
                <td>{{$clink->year['name']}} </td>
                <td>{{$clink->term['termname']}} </td>

                @endforeach
            </tr>
            @endif
            @endforeach
        </tbody>
        </table>
    </div>


</div>
@endsection
