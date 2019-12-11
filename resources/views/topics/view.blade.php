@extends('layouts.app')
@section('content')
{{--
<pre>
    @php
        print_r($topic);
    @endphp
</pre> --}}

<div class="indextopics container">
    <h6 class="text-muted"><a href="{{action('SubjectsController@show', $topic->subject['id'])}}">{{$topic->subject['name']}}</a></h6>
    <h1 class="display-4">{{$topic->name}}</h1>
    <hr>
    <div class="row d-flex bg-linen">
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
            <a href="{{action('TopicsController@create')}}" class="btn btn-green mb-3 float-right"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Link</a>
        </div>
    </div>
        <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Topic</th>
                <th>Subject</th>
                <th>Week</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($topic->clink as $clink)
                <tr>
                    <td>{{$clink->name}} </td>
                    <td>{{$clink->subject['name']}} <small class="text-muted">{{$clink->subject['year']['name']}}</small></td>
                    <td>{{$clink->week}} </td>
                    <td class="text-right">
                        <a href="{{action('TopicsController@show', $clink->id)}}" class="btn btn-green"><i class="fas fa-link"></i>  Details</a>
                    </td>
                </tr>
                @endforeach
                @foreach ($topic->clinked as $clink)
                <tr>
                    <td>{{$clink->name}} </td>
                    <td>{{$clink->subject['name']}} <small class="text-muted">{{$clink->subject['year']['name']}}</small></td>
                    <td>{{$clink->week}} </td>
                    <td class="text-right">
                        <a href="{{action('TopicsController@show', $clink->id)}}" class="btn btn-green"><i class="fas fa-link"></i>  Details</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
    {{-- <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Week</th>
                <th>Topic</th>
                <th>Description</th>
                <th>Links</th>
                <th class="text-right"></th>
            </thead>
            <tbody>
                @foreach ($topic->topic as $topic)
                <tr>
                    <td>{{$topic->week}} </td>
                    <td>{{$topic->name}} </td>
                    <td>{{$topic->description}} </td>
                    <td>any links?</td>
                    <td class="text-right">
                        <a href="#" class="btn btn-red"><i class="far fa-edit"></i>  Edit</a>
                        <a href="#" class="btn btn-green"><i class="fas fa-link"></i>  Link</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
</div>
@endsection