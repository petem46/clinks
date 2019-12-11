@extends('layouts.app')
@section('content')
<div class="indexsubjects container">
    <h6 class="text-muted">{{$subject->keystage['name']}} {{$subject->school['name']}} </h6>
    <h1 class="display-4">{{$subject->name}} <small class="text-muted">{{$subject->year['name']}} </small></h1>
    <div class="col-12 mt-3 px-0 d-flex">
        <div class="col-8 pl-0">
            <h1 class="text-muted">Topics</h1>
        </div>
      <div class="col-2 offset-2 pr-0">
        <a href="{{action('TopicsController@create')}}" class="btn btn-green mb-3 float-right"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Topic</a>
    </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Week</th>
                <th>Topic</th>
                <th>Links</th>
                <th class="text-right"></th>
            </thead>
            <tbody>
                @foreach ($topics as $topic)
                <tr>
                    <td>{{$topic->week}} </td>
                    <td>{{$topic->name}} </td>
                    <td>
                        @if (!$topic->clink->isEmpty())
                        @foreach ($topic->clink as $clink)
                            <a href="{{action('TopicsController@show', $clink->id)}}">{{$clink->name}} <small class="text-muted">{{$clink->subject['name']}} {{$clink->subject['year']['name']}}</small></a>
                        @endforeach
                        @endif
                        @if (!$topic->clinked->isEmpty())
                        @foreach ($topic->clinked as $clink)
                            <a href="{{action('TopicsController@show', $clink->id)}}">{{$clink->name}} <small class="text-muted">{{$clink->subject['name']}} {{$clink->subject['year']['name']}}</small></a>
                        @endforeach
                        @endif
                    </td>
                    <td class="text-right">
                        <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-red"><i class="far fa-edit"></i>  Edit</a>
                        <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-green"><i class="fas fa-link"></i>  Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
