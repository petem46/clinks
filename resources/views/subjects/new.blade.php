@extends('layouts.app')
@section('content')
<div class="subjects container">
    <h6 class="text-muted">{{Auth::user()->name}} <small>{{Auth::user()->school['name']}} </small></h6>
        <h1 class="display-4">Add Subject</h1>
    <hr>
  <div class="row">
    <div class="col-md-12 mb-3">
          <form action="/subjects" method="POST" id="subjectsnew" class="form-horizontal" enctype="multipart/form-data">
        @method('POST')
        {{ csrf_field() }}
        <div class="form-group row m-3">
            <label for="name" class="col-sm-2 col-form-label">Subject Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Subject Name">
            </div>
        </div>
        <div class="form-group row m-3">
            <label for="keystage_id" class="col-sm-2 col-form-label">Key Stage</label>
            <div class="col-sm-10">
                <select id="keystage_id" name="keystage_id" class="form-control">
                    <option selected>Choose...</option>
                    @foreach ($keystages as $keystage)
                    <option value="{{$keystage->id}}">{{$keystage->name}} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row m-3">
            <label for="year_id" class="col-sm-2 col-form-label">Year Taught</label>
            <div class="col-sm-10">
                <select id="year_id" name="year_id" class="form-control">
                    <option selected>Choose...</option>
                    @foreach ($years as $year)
                    <option value="{{$year->id}}">{{$year->name}} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row m-3">
                <label for="intent" class="col-sm-2 col-form-label">Statement of Intent</label>
                <div class="col-sm-10">
                    <textarea name="intent" rows=10 class="form-control" id="intent" placeholder="Statement of intent"></textarea>
                </div>
            </div>


        {{-- FORM SUBMIT AND CANCEL BUTTONS --}}
        <div class="form-group mt-4 ms-0">
          <div class="row mx-0">
            <button type="button" onclick="goBack()" class="col-12 col-md-5 mb-3 mb-md-0 btn btn-secondary order-2 order-md-1">
              <i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Cancel
            </button>
            <button type="submit" class="col-12 col-md-5 offset-md-2 mb-3 mb-md-0 btn btn-green order-1 order-md-2">
              <i class="fas fa-save"></i>&nbsp;&nbsp;Add Subject
            </button>
          </div>
        </div>
        {{-- END OF FORM SUBMIT AND CANCEL BUTTONS --}}

      </form>

    </div>
  </div>
</div><!-- end containing of content -->

@endsection
