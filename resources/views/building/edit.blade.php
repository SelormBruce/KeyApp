
@extends('layouts.app')
@section('content')
<div class="row justify-content-center container ">
        <div class="col-md-8" >
            <div class="card">

                    <div class="card-header text-light  " style="background-color:#FF5733!important">Edit Building Details</div>

<div class="container m-2 py-3" style="background-color:#082052!important" >

        <form action="/building/{{$building->id}}" method="POST" style="background-color:#082052!important">
               @method('PATCH')
            <div>
                @include('building.form')
            </div>
            <div class="d-flex justify-content-center">
                   <button class="btn btn-outline-info " type="submit">
                               Update Building details
                       </button>
            </div>

            @csrf
           </form>
</div>
                     </div>

            </div>
        </div>
@endsection
