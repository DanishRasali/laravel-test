@extends('layouts.header')
@section('content')
@include('layouts.sidebar')
@include('layouts.navbar')

<div class="content-wrapper" style="background: #121212 !important">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="text-white">User Details</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="text-align: left;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="row">
                        <div class="card" style="width: 100%;">
                            <div class="card-body" >
                                <h5 class="card-title">PERSONAL DETAILS</h5><br>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Full Name: {{$user[0]->name}}</li>
                                    <li class="list-group-item">Email: {{$user[0]->email}}</li>
                                    <li class="list-group-item">Phone Number: {{$user[0]->phone_num}}</li>
                                </ul>
                                <br>
                                <h5 class="card-title">Address</h5><br>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$user[0]->address}}</li>    
                                </ul>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="float: right !important;">
                        <a href="{{ env('APP_URL') }}/updateUser" class="btn btn-primary" style="background: #03a1a4  !important;">Update User</a>
                    </div>
                </div>
	</div>
        
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@stop
