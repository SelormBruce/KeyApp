
@extends('layouts.app')
@section('content')
<div class="row justify-content-center container ">
        <div class="col-md-8" >
            <div class="card" style="background-color:#082052!important">

                    <div class="card-header text-light  " style="background-color:#FF5733!important">Details for {{$building->name}}

                </div>
                <a href="/dashboard" class="ml-auto">Back</a>
            </div>

            <div class="text-light">
                <small class="d-flex h5"><strong>Building Name:</strong><span class="mr-4"></span> {{$building->name}}</small>

                      </div>
                      <div class="text-light">
                        <small class="d-flex h5"><strong>Building Description:</strong>  <span class="mr-4"></span>{{$building->description}}</small>
                      </div>
        </div>




</div>


@endsection
