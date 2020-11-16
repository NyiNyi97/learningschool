@extends('Learningschool')
@section('content')
    

    <div class="jumbotron text-center" style=" background-image:url('asset/image/s9.jpg');
        background-size: cover;
        height:400px;
        background-position: center;">
        <h1 class="display-4 text-dark H1">My Profile</h1>
    </div>


    <div class="container mt-5">
		<!-- Profile -->
		<form action="" method="post" enctype="multipart/form-data">
            <div class="row justify-content-center">

            	
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 order-1 align-items-center justify-content-between">
                    <div class="avatar-upload">
                        <div class="avatar-edit">

                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="newphoto" disabled="" data-user_id = "" value="" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url('');">
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 order-xl-2 order-lg-2 order-md-3 order-sm-3 order-3">
                    
                        <fieldset disabled>
                            {{-- <?php if(isset($_SESSION['profile_msg'])) { ?>
                                <h6 class="text-success"> <?= $_SESSION['profile_msg'] ?> </h6>
                            <?php } ?> --}}
                            
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputName"> Name</label>
                                        <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" name="name" value="" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="phone">Phone Number</label>
                                        <input class="form-control py-4" id="phone" type="text" placeholder="Enter Phone Number" name="phone" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group hideForm d-flex align-items-center justify-content-between my-5 mb-0">
                                <button type="submit" class="btn btn-outline-primary BTn"> Save </button>
                            </div>
                        </fieldset>
                    
                </div>
                
                <div class="col-xl-1 col-lg-1 col-md-12 col-sm-12 col-12 order-xl-3 order-lg-3 order-md-2 order-sm-2 order-2">
                    <button class="btn btn-warning float-right profile_editBtn" type="button"> 
                     <i class="fas fa-cog"></i>
                    </button>
                </div>
            </div>
        </form>
		

	</div>

@endsection