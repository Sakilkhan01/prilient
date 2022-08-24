@extends('admin.layouts.header')
	@section('title',__('Add Job Post'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Job Post
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Add Blog</h3>
            </div>
            <form method="post" action="{{ route('job_post_store') }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('designation') ? ' has-error' : '' }}">
                  <label>Designation :</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Designation" name="designation" value="{{ old('designation') }}">
                </div>
                <div class="form-group {{ $errors->has('vacancies') ? ' has-error' : '' }}">
                  <label>Vacancies :</label><strong class="error">*</strong>
                  <input type="text" class="form-control" placeholder="Vacancies of number" name="vacancies" value="{{ old('vacancies') }}">
                </div>
                <div class="form-group {{ $errors->has('work_status') ? ' has-error' : '' }}">
                  <label>Type of Work :</label><strong class="error">*</strong>
                  <select class="form-control" name="work_status">
                    <option value="">--Select Status--</option>
                    <option value="1" {{ old('work_status')==1 ? 'selected' : '' }}>Full Time</option>
                    <option value="2" {{ old('work_status')==2 ? 'selected' : '' }}>Part Time</option>
                    <option value="3" {{ old('work_status')==3 ? 'selected' : '' }}>Internship</option>
                  </select>
                </div>
                <div class="form-group {{ $errors->has('experience') ? ' has-error' : '' }}">
                  <label>Experience :</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Experience" name="experience" value="{{ old('experience') }}">
                 <small class="text-danger">Please enter experience Eg ( 1-3 Year, 2+ year, 0-3 Year, 2-5 Year )</small>

                </div>
                <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
                  <label>Location :</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Location" name="location" value="{{ old('location') }}">
                </div>                                          
                  
                <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                  <label>Status :</label><strong class="error">*</strong>
                  <select class="form-control" name="status">
                    <option value="">--Select Status--</option>
                    <option value="1" {{ old('status')==1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status')==0 ? 'selected' : '' }}>Deactive</option>
                  </select>
                </div>
                <div class="form-group pull-right">
                  <button class="btn btn-info" type="submit">Save</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>

    </section>
  </div>
	@endsection
  