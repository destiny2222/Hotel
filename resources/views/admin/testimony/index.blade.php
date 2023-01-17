@extends('layouts.master-2')
@section('content')
  <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
          <h4 class="mb-0 btn btn-primary waves-effect waves-light" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
             Add Testimony
          </h4>

          {{-- <div class="page-title-right">
              <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="javascript: void(0);" >Tables</a></li>
                  <li class="breadcrumb-item active">Editable Table</li>
              </ol>
          </div> --}}

      </div>
  </div>
</div>
<!-- end page title -->

<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">

              {{-- <h4 class="card-title">Table Edits</h4> --}}
              
              <div class="table-responsive">
                  <table class="table table-editable table-nowrap align-middle table-edits">
                      <thead>
                          <tr>
                            <th>id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($testimonial as $gall)
                        <tr>
                          <td><strong>{{ $loop->index + 1 }}</strong></td>
                          <td><img class="" width="40" height="50" src="{{ asset("storage/testimony/pic/".$gall->image) }}" alt="Card image cap" /></td>
                          <td><strong>{{  $gall->name }}</strong></td>
                          <td><strong>{!!  html_entity_decode($gall->body) !!}</strong></td>
                          <td>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-primary waves-effect waves-light"  href="javascript:void(0);"  data-bs-toggle="modal"
                                       data-bs-target="#small{{ $gall->id }}"><i class="fa fa-edit "></i></a>
                                    <a class="dropdown-item" href="javascript:void(0);">
                                      <form action="{{ route('admin.testimonial.destroy', $gall->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="ms-2 btn btn-primary waves-effect waves-light" onclick="return confirm('Are you sure?');"><i class=" fa fa-trash me-1"></i>Delete</button>
                                      </form>
                                    </a>
                                </div>
                        </td>
                        </tr>
                        @include('admin.testimony.edit')
                        @endforeach
                      </tbody>
                      </table>
              </div>

          </div>
      </div>
  </div> <!-- end col -->
</div> <!-- end row --> 

@include('admin.testimony.create')

@endsection


          