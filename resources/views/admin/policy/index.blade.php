@extends('layouts.master-2')
@section('content')
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalCenter">
                       Add New Policy
                    </h4>


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
                                        <th>Id</th>
                                        <th>Room</th>
                                        <th>Body</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($policy) != 0)
                                        @foreach ($policy as $blogs)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                @forelse ($blogs->room as $tags)
                                                <p></p>
                                                <span class="badge bg-primary me-1">{{ $tags->name }}</span>
                                                @empty
                                                <span>No Room</span>
                                                @endforelse
                                            </td>
                                            <td> {!! html_entity_decode($blogs->information) !!}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                                                    data-bs-target="#modalTop{{ $blogs->id }}" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a class="pt-3" href="javascript:void(0);">
                                                    <form action="{{ route('admin.amenitie.destroy', $blogs->id) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="ms-2 btn btn-primary waves-effect waves-light" onclick="return confirm('Are you sure?');"><i class=" fa fa-trash me-1"></i>Delete</button>
                                                    </form>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('admin.policy.edit')
                                    @endforeach
                                @endif  
                                </tbody>
                                </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->  


@endsection

@include('admin.policy.create')


