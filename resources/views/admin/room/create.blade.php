
    <!-- Center Modal example -->
    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Upload Room</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form class="custom-validation" action="{{ route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Room Name</label>
                                <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name"  placeholder="Room Name"/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid  @enderror" name="price"  placeholder="Room Price"/>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Room Number</label>
                                <input type="text" class="form-control @error('number') is-invalid  @enderror" name="number"  placeholder="Room Number"/>
                                @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Image</label>
                                <div class="">
                                    <input name="cover_image" type="file" class="form-control @error('cover_image') is-invalid  @enderror" > 
                                </div>
                                @error('cover_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                            </div>  
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Cover Image</label>
                                <div class="">
                                    <input  type="file" name="images[]" class="form-control @error('images') is-invalid  @enderror" multiple >
                                </div>
                                @error('images')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                            </div>  
                            <div class="col-lg-12">
                                <label for="Status" class="d-none">Status</label>
                                <select name="status" class="form-control d-none" id="">
                                    <option value="0">Not Book</option>
                                    <option value="1">Book</option>
                                </select>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Discription</label>
                                <div>
                                    <textarea  class="form-control @error('discription') is-invalid  @enderror" id="body" name="discription" rows="5"></textarea>
                                </div>
                                @error('discription')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div>
                                    <input type="submit" class="btn btn-primary waves-effect waves-light me-1" value="Submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
