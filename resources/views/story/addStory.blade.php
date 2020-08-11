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
            <h1 class="text-white">Add Story</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="text-align: left;">
      <div class="container-fluid">
        <div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="about">
				<form id="addStory">  
					<input type="hidden" name="user_id" value="{{Auth::id()}}"/>
					<div class="form-group">
						<label for="title" style="color: #fff;">Title:</label>
									<input
										type="text"
										id="title"
										name="title"
										class="form-control"
										placeholder="Enter Story Title" required
										value=""/>  
					</div>

					<div class="form-group">
						<label for="content" style="color: #fff;">Content:</label>
						<input
							type="text"
							id="content"
							name="content"
							class="form-control"
							placeholder="Enter Story Content" required
							value=""
							/>
					</div>
					<br><button type="submit" class="btn btn-primary" style="float: right; background: #03a1a4  !important;">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script>
 $(function() {

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
 
	$("#addStory").submit(function(event){
	   event.preventDefault();
	   var formData = $(this).serialize();
		
	   $.ajax({
		  type: "POST",
		  url: '{{ env('APP_URL') }}/api/addStory',
		  data: formData,
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

	});   
 });
</script>
@stop
