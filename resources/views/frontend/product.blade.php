@extends('frontend.layouts.app')

@section('title','Solution By Product')


@section('frontcontant')

    <section id="portfolio"  class="section-bg" >
        <div class="container" style="margin-top: 80px;">

            <header class="section-header">
                <h3 class="section-title">Our Products</h3>
            </header>



            <div class="row portfolio-container">


                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                               <a href="{{route('product.details',$product->id)}}" ><img src="{{asset($product->p_image)}}" style="width:350px;height:262px;" class="img-fluid" alt="" loading="lazy"> </a>

                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="{{route('product.details',$product->id)}}">{{$product->p_name}}</a></h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>

        </div>
    </section>


@endsection
