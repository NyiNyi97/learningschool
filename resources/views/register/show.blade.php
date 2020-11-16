@extends('Backendtemplate')
@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
       <a href="{{route('register.index')}}"class="btn btn-outline-info"><i class="fas fa-angle-double-left fa-2x"></i></a>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Register Detail</h2>
            <div class="card my-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{($register->photo)}}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="font-size: 17px;">
                  <h3 class="card-title">Register date :{{$register->registerdate}}</h3>
                  <p class="card-title">Student name : {{$register->user->name}}</p>
                  <p class="card-text">Birthday : {{$register->birthday}}</p>
                   <p class="card-text">phone number : {{$register->phone }}</p>
                   <p class="card-text">Address : {{$register->address}}</p>
                
                   @if($register->status==0)
                    <form action="{{route('register.confirm', $register->id)}}" method="post">
                      @csrf
                       <button class="btn btn-info">Confirm</button>
                    </form>
                    @elseif($register->status==1)
                    <button class="btn btn-success">Successfully</button>
                    @endif
                  <p class="card-text my-3"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
