@extends('frontend.layouts.app')
@section('title','Intern')

@section('frontcontant')

    <section id="portfolio"  class="section-bg" >
        <div class="container" style="margin-top: 80px;">


            <div class="card">
                <div class="card-header">
                    
                </div>
                <div class="card-body">
                    <h3 style="text-align: center">INTERNEE</h3>
                    <p>Whether you are looking for a sales & marketing job or looking for your next career change as an experienced internee, you will find a variety of opportunities to be part of BAITS that helps many people to do more, feel better, live longer and travel on a trip of growth.</p>
                    
                    <br>
                    <br>
                    
                  
                                <form action="{{route('internee.store')}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    
                                      <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault01">Full Name</label>
                                          <input type="text" class="form-control" id="validationDefault01" name="fullname" placeholder="Enter Your Full Name" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault02">Phone Number</label>
                                          <input type="text" class="form-control" id="validationDefault02" placeholder="Enter Your Phone Number" name="phonenumber"  required>
                                        </div>
                                        
                                      </div>
                                      <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault03">Email</label>
                                          <input type="email" class="form-control" id="validationDefault03" placeholder="Enter Your Email Address" name="email" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="validationDefault04">Attached Your CV</label>
                                          <input type="file" name="cv" class="form-control-file" id="exampleFormControlFile1" id="file" accept="application/pdf,application/docx,application/doc" required>
                                        </div>
                                      </div>
                                      
                                      <div class="form-row">
                                        
                                        <div class="col-md-12 mb-3">
                                          <label for="validationDefault04">Message</label>
                                          <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"required></textarea>
                                        </div>
                                        
                                      </div>
                                      
                                      
                                      <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>  
                  
                  
                </div>
            </div>
        </div>
        
<!--        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
<!-- horizontal_add -->
<!--<ins class="adsbygoogle"-->
<!--     style="display:block"-->
<!--     data-ad-client="ca-pub-9589180780835177"-->
<!--     data-ad-slot="7899329333"-->
<!--     data-ad-format="auto"-->
<!--     data-full-width-responsive="true"></ins>-->
<!--<script>-->
<!--     (adsbygoogle = window.adsbygoogle || []).push({});-->
<!--</script>-->

    </section>


@endsection


