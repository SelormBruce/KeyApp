@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                  {{--   @if ( Auth::user()->role->role =='Admin') --}}
                    <div class="card-header">Dashboard</div>

                {{--     @include('Admin.dashboard') --}}
                     </div>
                    {{--  @endif
 --}}
            </div>
        </div>
    </div>
</div>
@endsection
