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
            <h1 class="text-white">My Stories</h1>
          </div><!-- /.col -->
		  <div class="col-sm-6">
			<a href="{{ env('APP_URL') }}/addStory" class="btn btn-primary trigger-btn" style="float: right !important; background: #03a1a4  !important;">Add Story</a>
		  </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="text-align: left;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
			@foreach($stories as $story)
			<div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="row">
                        <div class="card" style="width: 100%;">
                            <div class="card-body" >
                                <h5 class="card-title">{{$story->title}}</h5><br>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$story->content}}</li>
                                </ul>
								<br/>
								<a href="{{ env('APP_URL') }}/story/{{$story->id}}" class="btn btn-primary" style="background: #03a1a4  !important;">View Story</a> 
								<a href="{{ env('APP_URL') }}/updateStory/{{$story->id}}" class="btn btn-primary">Update Story</a> 
								<button type="button" class="btn btn-danger" onclick="deleteStory('{{$story->id}}')">Delete Story</button> 
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			@endforeach
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script>
function deleteStory(story_id){
	
   $.ajax({
	  type: "DELETE",
	  url: '{{ env('APP_URL') }}/api/deleteStory/' + story_id,
	  dataType: "json",
	  success: function(story){
		if(story.status == 200){
			Swal.fire({
			  icon: 'success',
			  title: 'Success',
			  text: story.message,
			}).then((result) => {
			  window.location.href = "{{ env('APP_URL') }}/stories";
			});					
		}else{
			Swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: story.message,
			});
		}
	  },
	  error: function() {
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'An error occurred!',
		});
	  },
   });
}
</script>
@stop
