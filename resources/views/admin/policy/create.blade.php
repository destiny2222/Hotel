<!-- Modal -->
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Add Policy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if(count($room) != 0)
                <form action="{{ route('admin.policy.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <div>
                            <label for="defaultSelect" class="form-label">{{ __('Tag') }}</label>
                            <select id="defaultSelect" name="room_id" class="form-select ">
                                @foreach ($room as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">{{ __(' Information ') }}</label>
                        <textarea  id="body" name="information" class="form-control"
                            placeholder=""></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary ">{{ __(' Save ') }}</button>
                    </div>

                </form>
                @else
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.rooms.index') }}" class="btn btn-primary">
                            Create New Room
                        </a>
                    </div>
                    <div class="card-body">
                        You have not created any amenities yet. PLease create one now
                    </div>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>