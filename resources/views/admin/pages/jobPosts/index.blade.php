@extends('admin.layouts.header')
	@section('title',__('List Post'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Blog
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('admin/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Job Posts List</h3>
              <div style="float: right;">
                <a class="btn btn-info btn-sm" role="button" href="{{ route('job_post_add') }}" title="Add Blog">+ Job Post </a>
              </div>
            </div>
            <div class="box-body">
              <table id="table_list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Designation</th>
                  <th>Vacancies	</th>
                  <th>Work Status</th>
                  <th>Experience</th>
                  <th>Location</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php $i=1 @endphp
                  @foreach($posts as $row)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $row->designation }}</td>
                      <td>{{ $row->vacancies }}</td>
                        @if($row->work_status == '1')
                          <td>Full Time</td>
                        @elseif($row->work_status == '2') 
                          <td>Part Time</td>
                        @else
                          <td>Internship</td>
                        @endif
                
                      
                      <td>{{ $row->experience }}</td>
                      <td>{{ $row->location }}</td>
                      <td>
                        @if($row->status == '1')
                          <span class="label label-success">Active</span>
                        @else
                          <span class="label label-danger">Not Active</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('job_post_delete', $row->id) }}" title="Delete Category" onclick="return confirm('Are you sure you want to delete')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>&nbsp;
                          <a href="{{ route('job_post_edit', $row->id) }}" title="Edit Category">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                          </a>
                      </td>
                    </tr>
                  @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

	@endsection