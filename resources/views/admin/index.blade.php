@extends('layouts.master-2')
@section('page-title', 'Dashboard')
@section('content')
<div class="row">
  <div class="col-md-6 col-xl-4">
      <div class="card">
          <div class="card-body">
              <div class="float-end mt-2">
                  <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div>
              </div>
              <div>
                  <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ count(App\Models\Room::get()) }}</span></h4>
                  <p class="text-muted mb-0">Room</p>
              </div>
              {{-- <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week --}}
              </p>
          </div>
      </div>
  </div> <!-- end col-->


    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="customers-chart" data-colors='["--bs-primary"]'> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ count(App\Models\Post::get()) }}</span></h4>
                    <p class="text-muted mb-0">Blog</p>
                </div>
                {{-- <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week --}}
                </p>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-4">

        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="growth-chart" data-colors='["--bs-warning"]'></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ count(App\Models\Gallery::get()) }}</span></h4>
                    <p class="text-muted mb-0">Gallery</p>
                </div>
                {{-- <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week --}}
                </p>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="orders-chart" data-colors='["--bs-primary"]'> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ count(App\Models\Testimonial::get()) }}</span></h4>
                    <p class="text-muted mb-0">Testimonials</p>
                </div>
                {{-- <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week --}}
                </p>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-4">

        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="orders-chart" data-colors='["--bs-warning"]'></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ count(App\Models\Service::get()) }}</span></h4>
                    <p class="text-muted mb-0">Services</p>
                </div>
                {{-- <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week --}}
                </p>
            </div>
        </div>
    </div> <!-- end col-->


</div> <!-- end row-->




<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title mb-4">Booking Request</h4>
              <div class="table-responsive">
                  <table class="table table-centered table-nowrap mb-0">
                      <thead class="table-light">
                          <tr>
                              <th>Booking ID</th>
                              <th>Name</th>
                              <th>email</th>
                              <th>Amount</th>
                              <th>check out</th>
                              <th>check in</th>
                              <th>phone</th>
                              <th>Room Type</th>
                              <th>Room number</th>
                              <th>Date</th>
                          </tr>
                      </thead>
                      <tbody>
                        @forelse ($booking as $book)
                        <tr>
                            <td>{{  $book->bookingid  }}</td>
                            <td>{{  $book->name  }}</td>
                            <td>{{  $book->email  }}</td>
                            <td>{{  $book->price  }}</td>
                            <td>{{  $book->check_out  }}</td>
                            <td>{{  $book->check_in  }}</td>
                            <td>{{  $book->phone  }}</td>
                            <td>{{  $book->room_id  }}</td>
                            <td>{{  $book->number  }}</td>
                            <td>{{  $book->created_at->toFormattedDateString()  }}</td>
                        </tr>
                        @empty
                            <tr>
                                <td><h2>No Booking Request</h2></td>
                            </tr>
                        @endforelse

                      </tbody>
                  </table>
              </div>
              <!-- end table-responsive -->
          </div>
      </div>
  </div>
</div>
<!-- end row -->
<div class="row" aria-label="Page navigation">
    <div class="pagination justify-content-center">
        {{ $booking->links() }}
    </div>
</div>
<!-- / Content -->
@endsection


          