@extends('frontend.layouts.app')
@section('title','Career')

@section('frontcontant')

    <section id="portfolio"  class="section-bg" >
        <div class="container" style="margin-top: 80px;">


            <div class="card">
                <div class="card-header">
                    
                </div>
                <div class="card-body">
                    <h3 style="text-align: center">CAREER</h3>
                    <p>Whether you are looking for a job or looking for your next career change as an experienced professional, you will find a variety of opportunities to be part of BAITS that helps many people to do more, feel better, live longer and travel on a trip of growth.</p>
                    
                    <br>
                    <br>
                    
                  
                                <form action="{{route('career.store')}}" method="POST" enctype="multipart/form-data" >
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
                                          <input type="file" name="cv" class="form-control-file" id="exampleFormControlFile1" accept="application/pdf,application/docx,application/doc" required>
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
                  
                  

                  



@endsection
