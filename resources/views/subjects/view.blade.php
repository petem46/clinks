@extends('layouts.app')
@section('content')
<div class="indexsubjects container">
    <h6 class="text-muted">{{$subject->keystage['name']}} {{$subject->school['name']}} </h6>
    <h1 class="display-4">{{$subject->name}} <small class="text-muted">{{$subject->year['name']}} </small></h1>
    <hr>
    <div class="row d-flex bg-linen">
    <div class="col-12 mt-3">
        <div class="pl-0">
            <h1 class="">Statement of Intent</h1>
        </div>
        <div class="pl-0 text-justify">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio optio quos nam id tempora cumque consectetur odit inventore nobis sapiente. Ullam consequatur sed reiciendis assumenda eum sapiente labore quaerat corporis dolorum expedita nemo similique, illo, quae qui in quasi! Sint, quaerat sunt provident officiis aut reiciendis quibusdam aliquid ea voluptatum quidem facilis repudiandae laborum sed magni placeat enim blanditiis porro cupiditate id atque in sequi! Ratione quasi quo tenetur explicabo. Voluptatibus sit iure aliquam dicta delectus incidunt doloribus voluptates praesentium odio quasi natus, in saepe a eius facere dignissimos aperiam labore quod, vero reprehenderit ratione fugiat deleniti? Nostrum delectus molestias earum iste necessitatibus voluptatibus vero! Est, alias quos. Asperiores, suscipit, vel modi dolor odio sequi beatae ad dolorem deserunt aspernatur magni facere enim repudiandae quasi itaque nesciunt iusto. Eos unde quaerat nobis id fugit possimus optio voluptas, consequatur soluta omnis voluptatum quibusdam eum maxime dolorum explicabo dolores voluptatem fuga sed ab doloremque! Ipsa, laboriosam quas dolor maxime numquam consequuntur natus quaerat officia nam molestias et nobis, molestiae obcaecati? Cumque, aspernatur obcaecati. Reprehenderit omnis repellendus, iusto numquam aliquam, fugiat aliquid corrupti cumque magnam, incidunt repellat nesciunt. Temporibus incidunt accusantium, facere ab natus minus quae nostrum sint eveniet voluptates ipsa harum maiores.</p>
        </div>
    </div>
    </div>
    <hr>
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
                            <a href="{{action('TopicsController@show', $clink->id)}}">{{$clink->name}}</a> <a href="{{action('SubjectsController@show', $clink->subject['id'])}}"><small class="text-muted">{{$clink->subject['name']}} {{$clink->subject['year']['name']}}</small></a>
                            <a href="{{action('TopicsController@declink', ['id'=>$topic->id,'clinkid'=>$clink->id])}}" class="text-red">X</a>
                            <br>
                        @endforeach
                        @endif
                        @if (!$topic->clinked->isEmpty())
                        @foreach ($topic->clinked as $clink)
                            <a href="{{action('TopicsController@show', $clink->id)}}">{{$clink->name}}</a> <a href="{{action('SubjectsController@show', $clink->subject['id'])}}"><small class="text-muted">{{$clink->subject['name']}} {{$clink->subject['year']['name']}}</small></a>
                            <a href="{{action('TopicsController@declinked', ['id'=>$topic->id,'clinkid'=>$clink->id])}}" class="text-red">dX</a>
                        @endforeach
                        @endif
                    </td>
                    <td class="text-right">
                        <a href="{{action('TopicsController@link', $topic->id)}}" class="btn btn-green"><i class="fas fa-link"></i>  Clink</a>
                        <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-info"><i class="fas fa-edit"></i>  Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
