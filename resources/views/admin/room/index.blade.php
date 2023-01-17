@extends('layouts.master-2')
@section('page-title', 'Room List')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="text-end py-3">
            <a href="javascript:void()" class="btn btn-primary waves-effect waves-light"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Add New Room</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-editable table-nowrap align-middle table-edits">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Number</th>
                                <th>Body</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($room) != 0)
                            @foreach ($room as $rooming)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td><img class="" width="40" height="50" src="{{ asset('cover/'.$rooming->cover_image) }}" alt="Card image cap" /></td>

                                    <td>{{ $rooming->name }}</td>
                                    <td>{{ $rooming->price }}</td>
                                    <td>{{ $rooming->number }}</td>
                                    <td> 
                                        {!! html_entity_decode($rooming->discription) !!}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-edit{{$rooming->slug}}">
                                                <i class="fas fa-pencil-alt me-1"></i>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                            <form action="{{ route('admin.rooms.destroy', $rooming->slug) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="ms-2 btn btn-primary waves-effect waves-light" onclick="return confirm('Are you sure?');"><i class=" fa fa-trash me-1"></i>Delete</button>
                                            </form>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @include('admin.room.edit')
                            @endforeach
                        @endif  
                        </tbody>
                        </table>
                </div>
               @include('admin.room.create')
            </div>
        </div>
    </div>
</div>            
@endsection
