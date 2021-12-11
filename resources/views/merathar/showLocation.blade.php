@extends('merathar.master')
@section('content')
<section class="container my-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <div class="text-center">
                            <h3 class="">LOCATION SHOW</h3>
                            <a href="{{Route('location.index')}}" class="btn btn-primary float-right">Add City</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>City Name</th>
                                <th>Location Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($show as $item)
                              <tr>
                                  <td>{{$item->city_name}}</td>
                                  <td>{{$item->location_name}}</td>
                                  <td>
                                      <a href="{{Route('location.edit',$item->location_id)}}" class="btn btn-primary">Edit</a>
                                      <a href="{{Route('location.destroy',$item->location_id)}}" class="btn btn-danger">Delete</a>
                                  </td>
                              </tr>

                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
