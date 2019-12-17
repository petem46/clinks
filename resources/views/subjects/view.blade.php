@extends('layouts.app')
@section('content')
@php $lorem = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio optio quos nam id tempora cumque consectetur odit inventore nobis sapiente. Ullam consequatur sed reiciendis assumenda eum sapiente labore quaerat corporis dolorum expedita nemo similique, illo, quae qui in quasi! Sint, quaerat sunt provident officiis aut reiciendis quibusdam aliquid ea voluptatum quidem facilis repudiandae laborum sed magni placeat enim blanditiis porro cupiditate id atque in sequi! Ratione quasi quo tenetur explicabo. Voluptatibus sit iure aliquam dicta delectus incidunt doloribus voluptates praesentium odio quasi natus, in saepe a eius facere dignissimos aperiam labore quod, vero reprehenderit ratione fugiat deleniti?'; @endphp
<div class="indexsubjects container">
    <h6 class="text-muted">foo </small></h6>
    <div class="col-12 mt-3 px-0 d-flex">
        <div class="col-8 pl-0">
            <h1 class="display-4"><i class="fas fa-fw fa-chalkboard-teacher"></i>&nbsp;&nbsp;{{$subject->name}}</h1>
            <div class="pl-0">
                @if(count($subject->school) < 1) <span class="text-muted">bar</span>@endif
                @foreach ($subject->school as $school)
                <span class="text-muted">{{$school->name ?? ''}} </span> &nbsp;&nbsp;
                @endforeach
            </div>
        </div>
        <div class="col-2 offset-2 pr-0">
            <a href="{{action('SubjectsController@edit', $subject->id)}}" class="btn btn-lg btn-outline text-blue mb-0 get-down-right"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit Subject</a>
        </div>
    </div>
    <hr>
    <div class="row d-flex">
    <div class="col-12 mt-3">
        <div class="pl-0">
            <h1 class=""><i class="far fa-fw fa-file-alt"></i>&nbsp;&nbsp;Statement of Intent</h1>
        </div>
        <div class="pl-0 text-justify">
            <p class="text-justify">{{$subject->intent ?? $lorem}} </p>
        </div>
    </div>
    </div>
    <hr>
<section id="schema">
    <div class="col-12 my-3 px-0 d-flex">
        <div class="col-8 pl-0">
            <h1><i class="fas fa-fw fa-list"></i>&nbsp;&nbsp;Scheme of Work</h1>
        </div>
        <div class="col-2 offset-2 pr-0">
            {{-- <a href="{{action('TopicsController@create')}}" class="btn btn-lg btn-outline text-green mb-3 float-right"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Topic</a> --}}
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-schema">
            <thead class="bg-primary text-white">
                <th style="min-width: 100px;">Year</th>
                <th>Autumn 1</th>
                <th>Autumn 2</th>
                <th>Spring 1</th>
                <th>Spring 2</th>
                <th>Summer 1</th>
                <th>Summer 2</th>
            </thead>
            <tbody>
                <tr>
                    <td class="pr-3"><button class="btn btn-sm btn-outline text-dark text-left">Year 7</button></td>
                    <td class="term">
                    @foreach ($topicsy7 as $topic)
                        @if ($topic->term['termname'] == 'Autumn Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Autumn Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy7 as $topic)
                        @if ($topic->term['termname'] == 'Autumn Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Autumn Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy7 as $topic)
                        @if ($topic->term['termname'] == 'Spring Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Spring Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy7 as $topic)
                        @if ($topic->term['termname'] == 'Spring Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Spring Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy7 as $topic)
                        @if ($topic->term['termname'] == 'Summer Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Summer Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy7 as $topic)
                        @if ($topic->term['termname'] == 'Summer Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Summer Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                </tr>
                <tr>
                    <td class="pr-3"><button class="btn btn-sm btn-outline text-dark text-left">Year 8</button></td>
                    <td class="term">
                    @foreach ($topicsy8 as $topic)
                        @if ($topic->term['termname'] == 'Autumn Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Autumn Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy8 as $topic)
                        @if ($topic->term['termname'] == 'Autumn Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Autumn Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy8 as $topic)
                        @if ($topic->term['termname'] == 'Spring Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Spring Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy8 as $topic)
                        @if ($topic->term['termname'] == 'Spring Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Spring Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy8 as $topic)
                        @if ($topic->term['termname'] == 'Summer Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Summer Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy8 as $topic)
                        @if ($topic->term['termname'] == 'Summer Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Summer Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                </tr>
                <tr>
                    <td class="pr-3"><button class="btn btn-sm btn-outline text-dark text-left">Year 9</button></td>
                    <td class="term">
                    @foreach ($topicsy9 as $topic)
                        @if ($topic->term['termname'] == 'Autumn Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Autumn Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy9 as $topic)
                        @if ($topic->term['termname'] == 'Autumn Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Autumn Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy9 as $topic)
                        @if ($topic->term['termname'] == 'Spring Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Spring Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy9 as $topic)
                        @if ($topic->term['termname'] == 'Spring Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Spring Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy9 as $topic)
                        @if ($topic->term['termname'] == 'Summer Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Summer Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy9 as $topic)
                        @if ($topic->term['termname'] == 'Summer Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Summer Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                </tr>
                <tr>
                    <td class="pr-3"><button class="btn btn-sm btn-outline text-dark text-left">Year 10</button></td>
                    <td class="term">
                    @foreach ($topicsy10 as $topic)
                        @if ($topic->term['termname'] == 'Autumn Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Autumn Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy10 as $topic)
                        @if ($topic->term['termname'] == 'Autumn Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Autumn Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy10 as $topic)
                        @if ($topic->term['termname'] == 'Spring Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Spring Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy10 as $topic)
                        @if ($topic->term['termname'] == 'Spring Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Spring Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy10 as $topic)
                        @if ($topic->term['termname'] == 'Summer Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Summer Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy10 as $topic)
                        @if ($topic->term['termname'] == 'Summer Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Summer Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                </tr>
                <tr>
                    <td class="pr-3"><button class="btn btn-sm btn-outline text-dark text-left">Year 11</button></td>
                    <td class="term">
                    @foreach ($topicsy11 as $topic)
                        @if ($topic->term['termname'] == 'Autumn Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Autumn Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy11 as $topic)
                        @if ($topic->term['termname'] == 'Autumn Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Autumn Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy11 as $topic)
                        @if ($topic->term['termname'] == 'Spring Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Spring Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy11 as $topic)
                        @if ($topic->term['termname'] == 'Spring Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Spring Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy11 as $topic)
                        @if ($topic->term['termname'] == 'Summer Term 1') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Summer Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> @endif
                    @endforeach
                    </td>
                    <td class="term">
                    @foreach ($topicsy11 as $topic)
                        @if ($topic->term['termname'] == 'Summer Term 2') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                        @if ($topic->term['termname'] == 'Summer Term') <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-sm btn-block btn-outline text-dark text-left">{{$topic->name}} </a> <br> <small>{{$topic->school['name'] ?? ''}} </small> @endif
                    @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<section id="TopicList">
    <div class="col-12 my-3 px-0 d-flex">
        <div class="col-8 pl-0">
            <h1><i class="fas fa-fw fa-list"></i>&nbsp;&nbsp;Topics</h1>
        </div>
        <div class="col-2 offset-2 pr-0">
            <a href="{{action('TopicsController@create')}}" class="btn btn-lg btn-outline text-green mb-3 float-right"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Topic</a>
        </div>
    </div>
    <hr class="mb-3">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="bg-primary text-white">
                <th><i class="fa-fw fas fa-blank"></i>&nbsp;&nbsp;Topic</th>
                <th>Year</th>
                <th>Schools</th>
                <th>Links</th>
                {{-- <th class="text-right"></th> --}}
            </thead>
            <tbody>
                @foreach ($topics as $topic)
                <tr>
                    <td class="pl-0"><a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-outline text-dark"><i class="fas fa-fw fa-angle-double-right"></i>&nbsp;&nbsp;{{$topic->name}} </a></td>
                    <td class="small">{{$topic->year['name']}} {{$topic->term['termname']}} </td>
                    <td>
                        @foreach ($topic->school as $school)
                            <small>{{$school['name']}}</small>
                        @endforeach
                    </td>
                    <td class="pl-0">
                        @if (!$topic->clink->isEmpty())
                        @php $x=1; @endphp
                        @foreach ($topic->clink as $clink)
                        @php $x++ @endphp
                            <a href="{{action('TopicsController@show', $clink->id)}}" class="btn btn-sm btn-outline text-dark">{{$clink->name}}</a> <a href="{{action('SubjectsController@show', $clink->subject['id'])}}"><small class="text-muted">{{$clink->subject['name']}}</small></a>
                            <a href="{{action('TopicsController@declink', ['id'=>$topic->id,'clinkid'=>$clink->id])}}" class="btn btn-outline text-red">  <i class="fas fa-trash"></i></a>
                            @if ($x > 1) <br> @endif
                        @endforeach
                        @endif
                        @if (!$topic->clinked->isEmpty())
                        @php $x=1; @endphp
                        @foreach ($topic->clinked as $clink)
                            @php $x++ @endphp
                            <a href="{{action('TopicsController@show', $clink->id)}}" class="btn btn-sm btn-outline text-dark">{{$clink->name}}</a> <a href="{{action('SubjectsController@show', $clink->subject['id'])}}"><small class="text-muted">{{$clink->subject['name']}}</small></a>
                            <a href="{{action('TopicsController@declinked', ['id'=>$topic->id,'clinkid'=>$clink->id])}}" class="btn btn-outline text-red">  <i class="fas fa-trash"></i></a>
                            @if ($x > 1) <br> @endif
                        @endforeach
                        @endif
                    </td>
                    <td class="text-right d-none">
                        {{-- <a href="{{action('TopicsController@link', $topic->id)}}" class="btn btn-outline text-green"><i class="fas fa-link"></i>  Create a link</a> --}}
                        <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-outline text-blue">Details&nbsp;&nbsp;<i class="fas fa-fw fa-angle-double-right"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
</div>
@endsection
