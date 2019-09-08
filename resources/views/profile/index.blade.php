<style>
        .img{
        width:150px;
        height: 150px;
        border-radius: 50%;
        }

        </style>
@extends('layouts.app')
@section('content')

<div class="container">

        <div>
                <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card" style="background-color:#082052!important">
                                <div class="card-header" style="background-color:#FF5733!important">
                                    <small class="font-weight-bold text-light">{{  $user->name}}`s Profile </small>
                                </div>

                                <div class="card-body">
                                         <div >
                                             <div class="col">
                                                 <img src="/uploads/avatars/{{  $user->avatar}}" alt="avatar" class=" img mr-2 float-left">
                                                </div>
                                               <p class="justify-content-center text-light">  {{  $user->name}}</p>
                                               <p class="justify-content-center text-light">  Update Profile</p>

                                                <form action="/user/{{$user->id}}" method="POST" enctype="multipart/form-data">
                                                    @method('PATCH')
                                                    <div class="form-group">
                                                            <div>
                                                                    <input type="file" name="avatar" class="text-light">
                                                                </div>
                                                                <div>
                                                                    <button class="btn-sm btn-primary float-right">Update</button>
                                                                </div>
                                                    </div>
                                                 @csrf
                                                </form>
                                         </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
</div>
@endsection
