@extends('layouts.master-2')
@section('content')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#smallModal">
              Add New Tag
            </h4>

            {{-- <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);" >Tables</a></li>
                    <li class="breadcrumb-item active">Ta Table</li>
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

                  <h4 class="card-title">Table Edits</h4>
                  
                  <div class="table-responsive">
                      <table class="table table-editable table-nowrap align-middle table-edits">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Name</th>
                                  <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($tag as $tagger)
                                <tr>
                                  <td><strong>{{ $loop->index + 1 }}</strong></td>
                                  <td><strong>{{  $tagger->name }}</strong></td>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <a class=" btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                                      data-bs-target="#small{{ $tagger->id }}" title="Edit">
                                              <i class="fas fa-edit"></i>
                                          </a>
                                      <a class="" href="javascript:void(0);">
                                        <form action="{{ route('admin.tags.destroy', $tagger->id) }}" method="POST">
                                          @method('delete')
                                          @csrf 
                                          <button class="ms-2 btn btn-primary waves-effect waves-light"><i class="fa fa-trash me-1"></i>Delete</button>
                                        </form>
                                      </a>
                                    </div>
                                </td>
                                </tr>
                                @include('admin.Tag.edit')
                            @endforeach 
                          </tbody>
                          </table>
                  </div>

              </div>
          </div>
      </div> <!-- end col -->
  </div> <!-- end row -->  

<!-- / Content -->

@include('admin.Tag.create')

@endsection


          