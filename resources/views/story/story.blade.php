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
            <h1 class="text-white">My Story</h1>
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
                                <h5 class="card-title">{{$story[0]->title}}</h5><br>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$story[0]->content}}</li>
                                </ul>
                            </div>
                        </div>
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
