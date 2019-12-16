@extends('layouts.app')
@section('content')
{{--
<pre>
    @php
        print_r($topic);
    @endphp
</pre> --}}

<div class="indextopics container">
    <h6 class="text-muted"><a href="{{action('SubjectsController@show', $topic->subject['id'])}}">{{$topic->subject['name']}}</a><small> {{$topic->year['name']}} {{$topic->term['termname']}} </small></h6>
    <div class="col-12 mt-3 px-0 d-flex">
        <div class="col-8 pl-0">
            <h1 class="display-4">{{$topic->name}}</h1>
            <div class="pl-0">
                @foreach ($topic->school as $school)
                <span class="text-muted">{{$school->name ?? ''}} </span> &nbsp;&nbsp;
                @endforeach
            </div>
        </div>
        <div class="col-2 offset-2 pr-0">
            <a href="{{action('TopicsController@edit', $topic->id)}}" class="btn btn-outline text-blue mb-0 get-down-right"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit Topic</a>
        </div>
    </div>
    <hr>
    <div class="row d-flex">
    <div class="col-12 mt-3">
        <div class="pl-0">
            <h1 class="">Details</h1>
        </div>
        <div class="pl-0 text-justify">
            <p>{{$topic->description}} </p>
        </div>
    </div>
    </div>
    <hr>
    <div class="col-12 mt-3 px-0 d-flex">
        <div class="col-8 pl-0">
            <h1 class="text-muted">Links</h1>
        </div>
        <div class="col-2 offset-2 pr-0">
            <a href="{{action('TopicsController@link', $topic->id)}}" class="btn btn-outline text-green mb-3 float-right"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Link</a>
        </div>
    </div>
    @if (count($topic->clink) < 1)
    <div class="col-12 mt-3 px-0 d-flex">
        <div class="col-12 pl-0">
            <p class="text-red">No Links</p>
        </div>
    </div>
    @elseif (count($topic->clinked) > 1)
    <div class="col-12 mt-3 px-0 d-flex">
        <div class="col-12 pl-0">
            <p class="text-red">No Links</p>
        </div>
    </div>
    @else
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <th class="pl-3">Subject</th>
                <th class="pl-3">Topic</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($topic->clink as $clink)
                <tr>
                    <td class="pl-0"><a href="{{action('SubjectsController@show', $clink->subject_id)}}" class="btn btn-outline text-dark">{{$clink->subject['name']}}</a></td>
                    <td class="pl-0"><a href="{{action('TopicsController@show', $clink->id)}}" class="btn btn-outline text-dark">{{$clink->name}}</a>   <small class="text-muted"> {{$clink->year['name']}} {{$clink->term['termname']}} </small></td>
                    <td class="text-right pr-0">
                        <a href="{{action('TopicsController@declinked', ['id'=>$topic->id,'clinkid'=>$clink->id])}}" class="btn btn-outline text-red"><i class="fas fa-trash"></i>  Delete Link</a>
                    </td>
                </tr>
                @endforeach
                @foreach ($topic->clinked as $clink)
                <tr>
                    <td class="pl-0"><a href="{{action('SubjectsController@show', $clink->subject_id)}}" class="btn btn-outline text-dark">{{$clink->subject['name']}}</a></td>
                    <td class="pl-0"><a href="{{action('TopicsController@show', $clink->id)}}" class="btn btn-outline text-dark">{{$clink->name}}</a>   <small class="text-muted"> {{$clink->year['name']}} {{$clink->term['termname']}} </small></td>
                    <td class="text-right pr-0">
                        <a href="{{action('TopicsController@declinked', ['id'=>$topic->id,'clinkid'=>$clink->id])}}" class="btn btn-outline text-red"><i class="fas fa-trash"></i>  Delete Link</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
    @endif
</div>

@endsection
