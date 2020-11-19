@extends('Learningschool')
@section('content')

	
	<div class="jumbotron text-center" style=" background-image:url('asset/image/sign in1.jpg');
        background-size: cover;
        height:400px;
        background-position: center;">
        <h1 class="display-4 text-light H1"> Recommendation Form </h1>
  	</div>

  	<div class="container my-5">
		  <div class="row justify-content-center">
			<div class="col-5">
				<form action="{{route('recommendation.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                        <label class="small mt-3">{{ __('Name') }}</label>
                         <input id="name" type="text" class="form-control" placeholder="Enter Name" name="name">

                         <label class="small mt-4">{{ __('Profile') }}</label>
                         <input id="name" type="file" class="form-control-file" name="photo">

                         <label class="small mt-4">{{ __('Rating') }}</label>
                         <table>
                             <tr>
                                 <td><input id="name" value="1" type="radio" name="rating"></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                             </tr>
                             <tr>
                                 <td><input id="name" value="2" type="radio" name="rating"></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                             </tr>
                             <tr>
                                 <td><input id="name" value="3" type="radio" name="rating"></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                             </tr>
                             <tr>
                                 <td><input id="name" value="4" type="radio" name="rating"></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                             </tr>
                             <tr>
                                 <td><input id="name" value="5" type="radio" name="rating"></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                 <td><i class="fa fa-star" aria-hidden="true"></i></td>
                             </tr>
                         </table>
                         <!-- <input id="name" type="text" class="form-control" name="rating"> -->

                         <label class="small mt-4">{{ __('Description') }}</label>
                         <textarea  class="form-control" name="description" placeholder="Enter Description"></textarea>

                        </div>
                   
                       <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        
                        <button type="submit" class="btn btn-outline-primary bTn btn-block">   {{ __('Submit') }}</button>
                    </div>
		  		</form>
			 </div>
		  </div>
  </div>


@endsection