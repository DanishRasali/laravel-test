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
            <h1 class="text-white">Update User</h1>
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
				<form id="updateUser"> 
						<input type="hidden" name="id" value="{{$user[0]->id}}"/>
                        <div class="form-group">
                            <label for="name" style="color: #fff;">Full Name:</label>
                                        <input
                                            type="text"
                                            id="name"
                                            name="name"
                                            class="form-control"
                                            placeholder="Enter Full Name" required
                                            value="{{$user[0]->name}}"/>  
                        </div>

                        <div class="form-group">
                            <label for="email" style="color: #fff;">Email:</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                placeholder="Enter Your Email" required
                                value="{{$user[0]->email}}"
                                />
                        </div>
       
                        <div class="form-group">
                            <label for="phone_num" style="color: #fff;">Phone Number:</label>
                            <input
                                type="text"
                                id="phone_num"
                                name="phone_num"
                                class="form-control"
                                placeholder="Enter Your Phone Number" required
                                value="{{$user[0]->phone_num}}"
                                />
                        </div>
						
						<div class="form-group">
                            <label for="address" style="color: #fff;">Address:</label>
                            <input
                                type="text"
                                id="address"
                                name="address"
                                class="form-control"
                                placeholder="Enter Your Address" required
                                value="{{$user[0]->address}}"
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
 
	$("#updateUser").submit(function(event){
	   event.preventDefault();
	   var formData = $(this).serialize();
		
	   $.ajax({
		  type: "PUT",
		  url: '{{ env('APP_URL') }}/api/updateUser',
		  data: formData,
		  dataType: "json",
		  success: function(user){
			if(user.status == 200){
				Swal.fire({
				  icon: 'success',
				  title: 'Success',
				  text: user.message,
				}).then((result) => {
				  window.location.href = "{{ env('APP_URL') }}/user";
				});					
			}else{
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: user.message,
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
