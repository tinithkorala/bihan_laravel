@extends('template.app')

@section('content')

<div class="container">
     
    <div class="row w-100 mt-5">

        <!-- contact details -->
        <div class="col-lg-6 col-md-12 col-sm-12">

            <div class="card bg-dark-transparent text-white mb-5">

                <div class="col-sm-12 col-md-12 col-lg-12">

                    <p class="regular-paragraph text-light">
                        Let's get one of our travel experts to guide you through your next travel! Reach us and we'd love to help you out with any inquiries you have with a free consultation.
                    </p>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h3 class="text-bold">Address</h3>
                    <p class="small-paragraph text-light">
                        Travel Bag (Pvt) Ltd <br>
                        U.G 46, People's park, <br>
                        Colombo 01100 <br>
                        Sri Lanka
                    </p>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6">

                    <div class="row">
                        <h3 class="text-bold">Hotline</h3>
                        <p class="small-paragraph text-light">011 3671 616</p>
                    </div>

                    <div class="row">
                        <h3 class="text-bold">Email</h3>
                        <p class="small-paragraph text-light">info@travelbag.biz</p>
                    </div>

                </div>

            </div>

        </div>
        <!-- /contact details -->

        <!-- contact form -->
        <div class="col-lg-6 col-md-12 col-sm-12">
            
            <form action="">

                <div class="row text-white">

                    <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                        <label class="small-paragraph" for="">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                        <label class="small-paragraph" for="">Phone</label>
                        <input type="tel" name="tel" id="tel" class="form-control">
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                        <label class="small-paragraph" for="">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control">
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                        <label class="small-paragraph" for="">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12 mb-2">
                        <label class="small-paragraph" for="">Message</label>
                        <textarea name="message" id="message" cols="30" rows="6" class="form-control"></textarea>
                    </div>

                    <button type="button" class="btn btn-orange btn-contact m-3"><a href="">Submit</a></button>

                </div>

            </form>

        </div>
        <!-- /contact form -->

    </div>
    
</div>
    
@endsection