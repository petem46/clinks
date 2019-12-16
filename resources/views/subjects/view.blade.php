@extends('layouts.app')
@section('content')
<div class="indexsubjects container">
    <h6 class="text-muted">&nbsp;&nbsp; </h6>
    <h1 class="display-4"><i class="fas fa-fw fa-chalkboard-teacher"></i>&nbsp;&nbsp;{{$subject->name}} <small class="text-muted"> &nbsp;&nbsp;</small></h1>
    <hr>
    <div class="row d-flex">
    <div class="col-12 mt-3">
        <div class="pl-0">
            <h1 class=""><i class="far fa-fw fa-file-alt"></i>&nbsp;&nbsp;Statement of Intent</h1>
        </div>
        <div class="pl-0 text-justify">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio optio quos nam id tempora cumque consectetur odit inventore nobis sapiente. Ullam consequatur sed reiciendis assumenda eum sapiente labore quaerat corporis dolorum expedita nemo similique, illo, quae qui in quasi! Sint, quaerat sunt provident officiis aut reiciendis quibusdam aliquid ea voluptatum quidem facilis repudiandae laborum sed magni placeat enim blanditiis porro cupiditate id atque in sequi! Ratione quasi quo tenetur explicabo. Voluptatibus sit iure aliquam dicta delectus incidunt doloribus voluptates praesentium odio quasi natus, in saepe a eius facere dignissimos aperiam labore quod, vero reprehenderit ratione fugiat deleniti? Nostrum delectus molestias earum iste necessitatibus voluptatibus vero! Est, alias quos. Asperiores, suscipit, vel modi dolor odio sequi beatae ad dolorem deserunt aspernatur magni facere enim repudiandae quasi itaque nesciunt iusto. Eos unde quaerat nobis id fugit possimus optio voluptas, consequatur soluta omnis voluptatum quibusdam eum maxime dolorum explicabo dolores voluptatem fuga sed ab doloremque! Ipsa, laboriosam quas dolor maxime numquam consequuntur natus quaerat officia nam molestias et nobis, molestiae obcaecati? Cumque, aspernatur obcaecati. Reprehenderit omnis repellendus, iusto numquam aliquam, fugiat aliquid corrupti cumque magnam, incidunt repellat nesciunt. Temporibus incidunt accusantium, facere ab natus minus quae nostrum sint eveniet voluptates ipsa harum maiores.</p>
        </div>
    </div>
    </div>
    <hr>
    <div class="col-12 my-3 px-0 d-flex">
        <div class="col-8 pl-0">
            <h1 class=""><i class="fas fa-fw fa-list"></i>&nbsp;&nbsp;Topics</h1>
        </div>
        <div class="col-2 offset-2 pr-0">
            <a href="{{action('TopicsController@create')}}" class="btn btn-lg btn-outline text-green mb-3 float-right"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Topic</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="bg-primary text-white">
                <th><i class="fa-fw fas fa-blank"></i>&nbsp;&nbsp;Topic</th>
                <th>Year</th>
                <th>Term</th>
                <th>Schools</th>
                <th>Links</th>
                <th class="text-right"></th>
            </thead>
            <tbody>
                @foreach ($topics as $topic)
                <tr>
                    <td class="pl-0"><a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-outline text-dark"><i class="fas fa-fw fa-angle-double-right"></i>&nbsp;&nbsp;{{$topic->name}} </a></td>
                    <td>{{$topic->year['name']}} </td>
                    <td>{{$topic->term['termname']}} </td>
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
                            <a href="{{action('TopicsController@show', $clink->id)}}" class="btn btn-outline text-dark">{{$clink->name}}</a> <a href="{{action('SubjectsController@show', $clink->subject['id'])}}"><small class="text-muted">{{$clink->subject['name']}}</small></a>
                            <a href="{{action('TopicsController@declink', ['id'=>$topic->id,'clinkid'=>$clink->id])}}" class="btn btn-outline text-red">  <i class="fas fa-trash"></i></a>
                            @if ($x > 1) <br> @endif
                        @endforeach
                        @endif
                        @if (!$topic->clinked->isEmpty())
                        @php $x=1; @endphp
                        @foreach ($topic->clinked as $clink)
                            @php $x++ @endphp
                            <a href="{{action('TopicsController@show', $clink->id)}}" class="btn btn-outline text-dark">{{$clink->name}}</a> <a href="{{action('SubjectsController@show', $clink->subject['id'])}}"><small class="text-muted">{{$clink->subject['name']}}</small></a>
                            <a href="{{action('TopicsController@declinked', ['id'=>$topic->id,'clinkid'=>$clink->id])}}" class="btn btn-outline text-red">  <i class="fas fa-trash"></i></a>
                            @if ($x > 1) <br> @endif
                        @endforeach
                        @endif
                    </td>
                    <td class="text-right">
                        <a href="{{action('TopicsController@link', $topic->id)}}" class="btn btn-outline text-green"><i class="fas fa-link"></i>  Create a link</a>
                        {{-- <a href="{{action('TopicsController@show', $topic->id)}}" class="btn btn-outline text-dark"><i class="fas fa-edit"></i>  Details</a> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
