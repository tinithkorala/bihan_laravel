@extends('template.app')

@section('content')

<div class="container">
     
    <div class="row w-100 mt-5">

        <!-- contact details -->
        <div class="col-lg-6 col-md-12 col-sm-12">

            <div class="card bg-dark-transparent text-white mb-5">

                <div class="row">

                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <p class="regular-paragraph text-light">
                            Let's get one of our travel experts to guide you through your next travel! Reach us and we'd love to help you out 
                            with inquiries you have with a free consultation
                        </p>

                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6">

                        <h5 class="text-bold">Address</h5>
                        <p class="small-paragraph text-light">
                            Travel Bag (Pvt) Ltd <br>
                            U.G 46, People's park, <br>
                            Colombo 01100 <br>
                            Sri Lanka
                        </p>

                        <div class="row">
                            <h5 class="text-bold">Hotline</h5>
                            <p class="small-paragraph text-light">(+94) 114 395 800</p>
                        </div>
    
                        <div class="row">
                            <h5 class="text-bold">Email</h5>
                            <p class="small-paragraph text-light mb-0">info@travelbag.biz</p>
                        </div>
    
                    </div>
    
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <a class="decoration-none" href="https://www.facebook.com/TheTravelbagglobal/?ref=page_internal">
                            <img src="./images/icon_facebook.svg" alt="" width="25" height="25" class="me-2">
                            <h5 class="text-bold mb-0">Follow us on Facebook</h5>
                        </a>
                    </div>

                </div>
                

            </div>

        </div>
        

        <!-- contact form -->
        <div class="col-lg-6 col-md-12 col-sm-12">
            
            <form action="{{ route('contact.sendmail') }}" method="POST">
                @csrf
                <div class="row text-white">

                    <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                        <label class="small-paragraph" for="">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="fw-bold text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                        <label class="small-paragraph" for="">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
                        @error('phone')
                            <p class="fw-bold text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                        <label class="small-paragraph" for="">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}" required>
                        @error('subject')
                            <p class="fw-bold text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                        <label class="small-paragraph" for="">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="fw-bold text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12 mb-2">
                        <label class="small-paragraph" for="">Message</label>
                        <textarea name="messageArea" id="messageArea" cols="30" rows="6" class="form-control" required >{{ old('message') }}</textarea>
                        @error('messageArea')
                            <p class="fw-bold text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-orange btn-contact m-3">Submit</button>

                </div>

            </form>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

        </div>
        <!-- /contact form -->

        <!-- /contact details -->
      
    </div>
    
</div>
    
@endsection