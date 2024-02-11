<section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

        <div class="section-header">
            <h3>Contact Us</h3>
            <p>For more information please contact us....</p>
        </div>

        <div class="row contact-info">

            <div class="col-md-3">
                <div class="contact-address">
                    <a href="https://goo.gl/maps/C5teFyoH8tE2" target="_blank"> <i class="ion-ios-location-outline"></i></a>
                   <a href="https://goo.gl/maps/C5teFyoH8tE2" target="_blank">  <h3>Head Office</h3></a>
                   <a href="https://goo.gl/maps/C5teFyoH8tE2" target="_blank">  <address>2A/12 Pallabi,Dhaka-1216<br>Bangladesh</address></a>
                </div>
            </div>
            
            <div class="col-md-3">
                
                    <div class="contact-phone" style="border-right:0;">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Corporate Office</h3>
                    
                    <address>Flat # 4S, House # 43, Road # 3, Sector # 3, Uttara, Dhaka - 1230</address>
                </div>
            </div>
            
            <div class="col-md-3">
                
                    <div class="contact-phone" style="border-right:0;">
                    <i class="ion-ios-location-outline"></i>
                    <h3>USA Office</h3>
                    
                    <address>745 2nd Avenue 40 Street NY-10016,
                        USA</address>
                </div>
            </div>
            
           

            <div class="col-md-3">
                <div class="contact-phone">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Factory</h3>
                    <address>Sector # 1/C, Road # 3, House # 12, Kalwalapara, Mirpur-1, Dhaka-1216</address>
                </div>
            </div>


        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="{{route('store.contact')}}" method="post" role="form" class="contactForm">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" required class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" required id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" required id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" required rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div>

    </div>
<div style="margin-top: 15px;margin-bottom: -60px;}">
   <img src="{{asset('public/Payment_Gateway.png')}}" style="width:100%" /> 
</div>

</section>
