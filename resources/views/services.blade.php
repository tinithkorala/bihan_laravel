@extends('template.app')

@section('content')

    <div class="container">
     
        <div class="row mt-5">

            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card service-card">
                    <h5 class="card-header dark-card-header">Flight Booking</h5>
                    <img src="./images/s1_flight_booking.jpg" class="card-img-top margin-minus" alt="...">
                    <div class="card-body">
                    <p class="card-text">
                        We can help you to find the best airfare at a cheaper with a guarantee. We ensure thousands 
                        of travelers experience a smooth journey with the credits goind to our expertisein sourcing, planning, 
                        and implementation. Whenever the destination, whatever the budget, our qualified staff are alaways ready 
                        to help you with all your travel requirements.
                    </p>
                    <center><button type="button" class="btn btn-orange btn-contact"><a href="./contact.html">Contact Us</a></button></center>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card service-card">
                    <h5 class="card-header dark-card-header">Hotel Booking</h5>
                    <img src="./images/s2_hotel_booking.jpg" class="card-img-top margin-minus" alt="...">
                    <div class="card-body">
                    <p class="card-text">
                        We offer the best hotel packages and highly personlaized and custom-made itineraries. Our team will help you to plan your trip, book flights and hotels, organize transport and transfers and even arrange special services anywhere in the world to make your dream come true.
                    </p>
                    <center><button type="button" class="btn btn-orange btn-contact"><a href="./contact.html">Contact Us</a></button></center>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card service-card">
                    <h5 class="card-header dark-card-header">Travel Guide</h5>
                    <img src="./images/s3_travel_guide.jpg" class="card-img-top margin-minus" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Plan your tailor-made trip with a local expert.        
                        </p>
                        <center><button type="button" class="btn btn-orange btn-contact"><a href="./contact.html">Contact Us</a></button></center>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    
@endsection