@extends('frontend.layouts.app')
@section('title','HOME')

@section('front_css')





@endsection
@section('frontcontant')

    @include('frontend.layouts.include.slider')

  

    <main id="main" style="min-height: 200px;">


        <!--==========================
          About Us Section
        ============================-->

    @include('frontend.layouts.include.solution')

    <!-- #about -->






        <!--==========================
          Portfolio Section
        ============================-->
    @include('frontend.layouts.include.product')
 

    @include('frontend.layouts.include.brand')
    <!-- #portfolio -->

        <!--==========================
          Clients Section
        ============================-->

        {{--@include('frontend.layouts.include.client')--}}


        {{--@include('frontend.layouts.include.contact')--}}
        
        

    </main>






@endsection
