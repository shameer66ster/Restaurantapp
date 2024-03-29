@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Main Functions</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <div class="row text-center">
            <div class="col-sm-4 ">
              <a href="">
                <h4>Management</h4>
                <img width='50px' src="{{asset('image/system-integration.png')}}" alt="">
              </a>
            </div>
            <div class="col-sm-4">
              <a href="">
                <h4>Cashier</h4>
                <img width='50px' src="{{asset('image/cash-machine.png')}}" alt="">
              </a>
            </div>
            <div class="col-sm-4">
              <a href="">
                <h4>Report</h4>
                <img width='50px' src="{{asset('image/report.png')}}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection