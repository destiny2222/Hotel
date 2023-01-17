@component('mail::layout')
<style>
  .table-head{
    border-collapse:collapse; 
    width: 100%;
  }

  .table-head td{
    border:1px solid #ccc;
    padding: 10px;
  }
</style>

    {{-- Header --}}
    @slot('header')
    @component('mail::header', ['url' => config('app.url')])
        <!-- header here -->
        <h1>Contact Request</h1>
    @endcomponent
    @endslot

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 style="padding: 10px 0;">Contact Request</h2>
      <table class="table-head">
        <tr>
          <th></th>
          <th></th>
        </tr>
        <tr>
          <td><code>First Name</code></td>
          <td>{{  $firstname }}</td>
        </tr>
        <tr>
          <td><code>Last Name</code></td>
          <td>{{  $lastname }}</td>
        </tr>
        <tr>
          <td><code>Email Address</code></td>
          <td>{{  $email }}</td>
        </tr>
        <tr>
          <td><code>Phone Number</code></td>
          <td>{{  $phone }}</td>
        </tr>
        <tr>
          <td><code>Subject</code></td>
          <td>{{  $subject }}</td>
        </tr>
        <tr>
          <td><code>Message</code></td>
          <td>{{  $message }}</td>
        </tr>
      </table>
      </div>    
    </div>
  </div>

   {{-- Footer --}}
   @slot('footer')
   @component('mail::footer')
       <!-- footer here -->
       {{-- De bay lux hotel and suites. All rights reserved --}}
   @endcomponent
@endslot

@endcomponent
