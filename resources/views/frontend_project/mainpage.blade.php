@extends('Learningschool')
@section('content')
	
	 {{-- Slider  --}}
  <div class="jumbotron text-center" style=" background-image:url('asset/image/s9.jpg');
        background-size: cover;
        height:400px;
        background-position: center;">
        <h1 class="display-4 text-dark H1">Welcome My Learning School</h1>
        <a class="btn btn-primary btn-lg my-4 BTN" href="https://www.youtube.com/watch?v=Zcpwdcvz3KE"  target="_blanks" role="button">Recommendation <i class="fas fa-angle-right"></i><i class="fas fa-angle-right"></i></a>
  </div>
  {{-- Slider end --}}
		<div class="container my-5">
		<div class="row">
			<div class="col-md-4">
				<div>
					<div class="card-body text-center">	
						<a href="{{route('aboutuspage')}}" class="text-decoration-none text-dark">
						<div class="inner1">							
							<h2 class="card-text TExt"> About </h2>
							<p class="card-text Ptag"> Step foot inside our lively classroom from the comfort of your home. We will give you the brightest future. </p>
						</div>	
					</div>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div>
					<div class="card-body text-center">
						<div class="inner1">
							<h2 class="card-text TExt"> Achievements </h2>
							<p class="card-text Ptag"> Started in 2012 and got different prizes every years. In 2019, 20 of our students got the prizes at English essay. </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div>
					<div class="card-body text-center">
						<div class="inner1">
						<h2 class="card-text TExt"> Programs </h2>
						<p class="card-text Ptag"> As the seasons change, keep an eye on what's head at My Learning School. Come and join with us! </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<h2 class="text-center TExt">Course</h2>
	<div class="container my-5">
		<div class="row">
			 @foreach($Courses as $course)
			<div class="col-md-4">
				<div class="card shadow">
				<a href="{{route('coursedetail',$course->id)}}">	
					<img src="{{$course->photo}}" class="img-fluid w-75"></a>
						<div class="card-body text-center">	
							<p class="card-text"> {{$course->name}} </p>

							<a href="{{route('coursedetail',$course->id)}}"><button class="btn btn-outline-primary bTn container-fluid" > Details </button></a>
						</div>
				</div>
			</div>
			@endforeach
		</div>
		</div>
	</div>

	<div class="container-fluid my-5">
		<div class="parallax" data-parallax="scroll" data-z-index="1" 
		data-image-src="{{asset('asset/image/p5.jpg')}}"></div>
	</div>
	





	 <h2 class="text-center TExt">Recommendation</h2> 
	<div class="testimonials">
		<div class="inner">
			<div class="row1">

				<div class="col">
					<div class="testimonial">
						<img src="{{asset('asset/image/02.jpg')}}">
						<div class="name"> Aung Kyaw </div>
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>" Learning Private School is very good for every students. The teachers are good at teaching and very patient for our childrens. One of the best school ever! "</p>
					</div>
				</div>

				<div class="col">
					<div class="testimonial">
						<img src="{{asset('asset/image/01.jpg')}}">
						<div class="name"> Kyaw Htet </div>
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<p>" This school is not very good. It is same like the other private school. But one things I like is the teacher from this school is very patient to our children. "</p>
					</div>
				</div>

				<div class="col">
					<div class="testimonial">
						<img src="{{asset('asset/image/0.jpg')}}">
						<div class="name"> Aye Thaung </div>
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<p>" I usually don't like private schools but I think this school is the best for my children education because they have good facilities and teachers. "</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('script')

@endsection