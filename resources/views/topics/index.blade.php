@extends('layouts.app')
@section('content')
<div class="indexsubjects container">
    <h6 class="text-muted">{{Auth::user()->name}} <small>{{Auth::user()->school['name']}} (Log Out)</small></h6>
    <div class="col-12 mt-3 px-0 d-flex">
        <div class="col-8 pl-0">
            <h1 class="display-4">All Topics</h1>
        </div>
        <div class="col-2 offset-2 pr-0">
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
    <th>Links</th>
    {{-- <th class="actions"></th> --}}
</thead>
<tbody>
    @foreach ($topics as $topic)
    <tr @if (count($topic->clink) + count($topic->clinked) >= 1) class="bg-gold" @endif>
        <td class="pl-0"><a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-outline text-dark"><i class="fas fa-fw fa-angle-double-right"></i>&nbsp;&nbsp;{{$topic->name}}</a></td>
        <td class="pl-0"><a href="{{action('SubjectsController@show', $topic->subject_id)}}" class="btn btn-outline text-dark"><i class="fas fa-fw fa-angle-double-right"></i>&nbsp;&nbsp;{{$topic->subject['name']}}</a></td>
        <td>{{$topic->year['name']}} </td>
        <td>{{$topic->term['termname']}} </td>
        <td>
            {{count($topic->clink) + count($topic->clinked)}}
        </td>
        {{-- <td class="text-right"><a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-outline text-info"><i class="fas fa-search"></i>  View Topics</a></td> --}}
    </tr>
    @endforeach
</tbody>
</table>
    </div>


</div>
@endsection
