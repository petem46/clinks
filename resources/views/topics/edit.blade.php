@extends('layouts.app')
@section('content')
<div class="topics container">
        <h6 class="text-muted">{{$topic->subject['name']}} </small></h6>
        <h1 class="display-4">Add Topic</h1>
    <hr>
    <div class="row">
    <div class="col-md-12 mb-3">
      <form action="{{action('TopicsController@update', $topic->id)}}" method="POST" id="topicedit" class="form-horizontal" enctype="multipart/form-data">
        @method('PUT')
        {{ csrf_field() }}
        <div class="form-group row m-3">
            <label for="name" class="col-sm-2 col-form-label">Topic Title</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" value="{{$topic->name}} ">
            </div>
        </div>
        <div class="form-group row m-3 d-none">
            <label for="subject_id" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
                <select id="subject_id" name="subject_id" class="form-control">
                    <option value="{{$topic->subject_id}}">{{$topic->subject['name']}} </option>
                </select>
            </div>
        </div>
        <div class="form-group row m-3">
            <label for="year_id" class="col-sm-2 col-form-label">Year Taught</label>
            <div class="col-sm-10">
                <select id="year_id" name="year_id" class="form-control">
                    @foreach ($years as $year)
                      <option
                        @if ($topic->year_id == $year->id) selected @endif
                        value="{{$year->id}} ">{{$year->name}}
                      </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row m-3">
            <label for="term_id" class="col-sm-2 col-form-label">Half Term</label>
            <div class="col-sm-10">
                <select id="term_id" name="term_id" class="form-control">
                    @foreach ($terms as $term)
                      <option
                        @if ($topic->term_id == $term->id) selected @endif
                        value="{{$term->id}} ">{{$term->termname}}
                      </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row m-3 d-none">
            <label for="week" class="col-sm-2 col-form-label">Week</label>
            <div class="col-sm-10">
                <select id="week" name="week" class="form-control">
                    @php $w = 1; @endphp
                    @while ($w < 40)
                      <option
                        @if ($topic->week == $w) selected @endif
                        value="{{$w}}">Week {{$w}}
                      </option>
                      @php $w++; @endphp
                    @endwhile
                </select>
            </div>
        </div>
        <div class="form-group row m-3">
            <label for="description" class="col-sm-2 col-form-label">Topic Content</label>
            <div class="col-sm-10">
                <textarea name="description" rows=10 class="form-control" id="description" placeholder="Details of topic content">{{$topic->description ?? ''}} </textarea>
            </div>
        </div>

        <div class="form-group row m-3">
            <label for="description" class="col-sm-2 col-form-label">Linked Schools</label>
            @php $schoolids = array(); @endphp
            @foreach ($checkedschools as $school)
            @php $schoolids[] = $school['id']; @endphp
            @endforeach
            <div class="col-sm-10">
                <div class="row">
                @foreach ($schools as $school)
                    <div id="checkboxbutton" class="col-lg-4 col-md-6 px-0 py-1">
                    <div id="" class="col-12 defaultcheckedbutton">
                        <div class="d-flex mb-0">
                        <input name="checkedschooldata[]" type="checkbox" id="checkedschooldata{{$school->id}}" value={{$school->id}}
                            @if(in_array($school->id, $schoolids)) {{'checked'}} @endif
                        >
                        <label for="checkedschooldata{{$school->id}}" class="py-2 mb-0">
                            <span id="true"><i class="fa-fw fas fa-check"></i>&nbsp;&nbsp;{{$school->name}}&nbsp;&nbsp;<i class="fa-fw fas fa-blank"></i></span>
                            <span id="false"><i class="fa-fw fas fa-blank"></i>&nbsp;&nbsp;{{$school->name}}&nbsp;&nbsp;<i class="fa-fw fas fa-blank"></i></span>
                        </label>
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
            </div>
        </div>



        {{-- FORM SUBMIT AND CANCEL BUTTONS --}}
        <div class="form-group mt-4 ms-0">
          <div class="row mx-0">
            <button type="button" onclick="goBack()" class="col-12 col-md-5 mb-3 mb-md-0 btn btn-secondary order-2 order-md-1">
              <i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Cancel
            </button>
            <button type="submit" class="col-12 col-md-5 offset-md-2 mb-3 mb-md-0 btn btn-success order-1 order-md-2">
              <i class="fas fa-save"></i>&nbsp;&nbsp;Save Changes
            </button>
          </div>
        </div>
        {{-- END OF FORM SUBMIT AND CANCEL BUTTONS --}}

      </form>

    </div>
  </div>
</div><!-- end containing of content -->

@endsection
