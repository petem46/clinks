@extends('layouts.app')
@section('content')
<div class="topics container">
        <h6 class="text-muted">{{Auth::user()->name}} <small>{{Auth::user()->school['name']}} </small></h6>
        <h1 class="display-4">Add Topic</h1>
    <hr>
    <div class="row">
    <div class="col-md-12 mb-3">
      <form action="/topics" method="POST" id="topicsnew" class="form-horizontal" enctype="multipart/form-data">
        @method('POST')
        {{ csrf_field() }}
        <div class="form-group row m-3">
            <label for="name" class="col-sm-2 col-form-label">Topic Title</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Subject Name">
            </div>
        </div>
        <div class="form-group row m-3">
            <label for="subject_id" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
                <select id="subject_id" name="subject_id" class="form-control">
                    <option value="{{$subjectid}}">{{$subjectname}} </option>
                </select>
            </div>
        </div>
        <div class="form-group row m-3">
            <label for="week" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
                <input type="number" id="week" name="week" class="form-control" min="1" max="39">
                {{-- <select id="week" name="week" class="form-control">
                    <option selected>Choose Week ...</option>
                    <option value="1">Week 1 </option>
                    <option value="2">Week 2 </option>
                    <option value="3">Week 3 </option>
                    <option value="4">Week 4 </option>
                    <option value="5">Week 5 </option>
                    <option value="6">Week 6 </option>
                    <option value="7">Week 7 </option>
                    <option value="8">Week 8 </option>
                    <option value="9">Week 9 </option>
                    <option value="10">Week 10 </option>
                    <option value="11">Week 11</option>
                    <option value="12">Week 12</option>
                </select> --}}
            </div>
        </div>
        <div class="form-group row m-3">
            <label for="halfterm" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
                <input type="number" id="halfterm" name="halfterm" class="form-control" min="1" max="6">
{{--
                <select id="halfterm" name="halfterm" class="form-control">
                    <option selected>Choose Week ...</option>
                    <option value="1">Week 1 </option>
                    <option value="2">Week 2 </option>
                    <option value="3">Week 3 </option>
                    <option value="4">Week 4 </option>
                    <option value="5">Week 5 </option>
                    <option value="6">Week 6 </option>
                    <option value="7">Week 7 </option>
                    <option value="8">Week 8 </option>
                    <option value="9">Week 9 </option>
                    <option value="10">Week 10 </option>
                    <option value="11">Week 11</option>
                    <option value="12">Week 12</option>
                </select> --}}
            </div>
        </div>
        <div class="form-group row m-3">
            <label for="description" class="col-sm-2 col-form-label">Topic Content</label>
            <div class="col-sm-10">
                <textarea name="description" rows=10 class="form-control" id="description" placeholder="Details of topic content">Details of topic content</textarea>
            </div>
        </div>



        {{-- FORM SUBMIT AND CANCEL BUTTONS --}}
        <div class="form-group mt-4 ms-0">
          <div class="row mx-0">
            <button type="button" onclick="goBack()" class="col-12 col-md-5 mb-3 mb-md-0 btn btn-secondary order-2 order-md-1">
              <i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Cancel
            </button>
            <button type="submit" class="col-12 col-md-5 offset-md-2 mb-3 mb-md-0 btn btn-success order-1 order-md-2">
              <i class="fas fa-save"></i>&nbsp;&nbsp;Add Topic
            </button>
          </div>
        </div>
        {{-- END OF FORM SUBMIT AND CANCEL BUTTONS --}}

      </form>

    </div>
  </div>
</div><!-- end containing of content -->

@endsection
