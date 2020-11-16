@extends('Learningschool')
@section('content')

	<div class="jumbotron text-center" style="background-image:url('asset/image/s9.jpg');
        background-size: cover;
        height:400px;
        background-position: center;">
        <h1 class="display-4 text-dark H1">Course detail</h1>
      
  </div>

  	<div class="container my-5">
  		<div class="row">
  		@foreach($courses as $course)
  		<div class="col-lg-4">
  		<div class="box">
		<div class="imgbox">
			<img src="{{$course->photo}}" class="img-fluid w-100">
		</div>
		<div class="content">
			<h2 align="center"> {{$course->name}}}</h2>
		</div>
		</div>
		<button type="button" class="btn btn-outline-primary bTn container">Register</button>
  		</div>
  		@endforeach
  		</div>
	</div>


@endsection