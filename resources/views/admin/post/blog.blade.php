@extends('layouts.master-2')
@section('content')
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalCenter">
                       Add New Blog
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
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Tag</th>
                                        <th>Body</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($blog) != 0)
                                        @foreach ($blog as $blogs)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td><img class="" width="40" height="50" src="{{ asset("storage/post/".$blogs->image) }}" alt="Card image cap" /></td>
                                            <td>{{ $blogs->name }}</td>
                                            <td>{{ $blogs->author }}</td>
                                            <td>
                                                @forelse ($blogs->tag as $tags)
                                                <p></p>
                                                <span class="badge bg-primary me-1">{{ $tags->name }}</span>
                                                @empty
                                                <span>No Tag</span>
                                                @endforelse
                                            </td>
                                            <td> {!! html_entity_decode($blogs->body) !!}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                                                    data-bs-target="#modalTop{{ $blogs->id }}" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a class="pt-3" href="javascript:void(0);">
                                                    <form action="{{ route('admin.blog.destroy', $blogs->id) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="ms-2 btn btn-primary waves-effect waves-light" onclick="return confirm('Are you sure?');"><i class=" fa fa-trash me-1"></i>Delete</button>
                                                    </form>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('admin.post.blog-edit')
                                    @endforeach
                                @endif  
                                </tbody>
                                </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->  
        
        <div class="row" aria-label="Page navigation">
            <div class="pagination justify-content-center">
                {{ $blog->links() }}
            </div>
        </div>

    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Add Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if(count($tag) != 0)
                    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">{{ __('Title ') }}</label>
                            <input type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror" id="basic-default-fullname"
                                placeholder="Title" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">{{ __('author') }}</label>
                            <input type="text" name="author"
                                class="form-control  @error('author') is-invalid @enderror" id="basic-default-company"
                                placeholder="ACME Inc." />
                            @error('author')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div>
                                <label for="defaultSelect" class="form-label">{{ __('Tag') }}</label>
                                <select id="defaultSelect" name="tag[]" class="form-select ">
                                    @foreach ($tag as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="file" name="image"
                                    class="form-control  @error('image') is-invalid @enderror" id="inputGroupFile01" />
                                @error('image')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">{{ __(' Message ') }}</label>
                            <textarea  id="body" name="body" class="form-control"
                                placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary ">{{ __(' Save ') }}</button>
                        </div>

                    </form>
                    @else
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.tags.index') }}" class="btn btn-primary">
                                Create New Tag
                            </a>
                        </div>
                        <div class="card-body">
                            You have not created any tag yet. PLease create one now
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>

@endsection

