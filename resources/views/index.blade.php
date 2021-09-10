@extends('template.app')

@section('content')

    <div class="container">

        <div class="row w-100">
            <div class="col-xm-12 col-sm-12 col-md-9 col-lg-7 d-flex flex-column justify-content-center header ">
                <span class="text-white main-header">Welcome</span>
                <span class="text-white main-header">to Travel Bag</span>
                <span class="text-white sub-header mb-3">We have got covered every aspect when it comes to planning your
                    next destination</span>
                <button type="button" class="btn btn-orange btn-contact"><a href="{{ url('contact') }}">Contact
                        Us</a></button>
            </div>
        </div>

    </div>
    
@endsection