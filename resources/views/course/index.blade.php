@extends('Backendtemplate')

@section('content')
<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2 class="d-inline-block">Course List</h2>
          <a href="{{route('course.create')}}" class="btn btn-info float-right">Add New</a>
          <table class="table mt-3 table-bordered dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @php 
              $i=1;
              @endphp
                @foreach($course as $row)
                <tr>
                <td>{{$i++}}</td>
                <td>{{$row->name}}</td> 
                <td>{{$row->price}}  KS</td>
                <td>
                <a href="{{route('course.edit', $row->id )}}" class="btn btn-warning">Edit</a>
                <a href="{{route('course.show', $row->id )}}" class="btn btn-success">Show</a>
                
                <form action="{{route('course.destroy', $row->id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure to delete')">
                  @csrf
                  @method('DELETE')
                  <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/dataTables.bootstrap.min.js')}}"></script>
  <script type="text/javascript">
    $('.dataTable').DataTable();
  </script>
@endsection