@extends('frontend.layouts.app')
@section('title')
{{$product->p_name}}
@endsection

@section('frontcontant')

    <section id="portfolio"  class="section-bg" oncopy="return false" oncut="return false" onpaste="return false">
        <div class="container" style="margin-top: 80px;">


    <div class="card">
        <div class="card-header">
            Product Name : {{$product->p_name}}
            <a href="{{route('product.pdf',$product->id)}}" class="btn btn-sm btn-success pull-right" target="_blank">Download</a>
        </div>
        <div class="card-body">
           <div class="col-md-12 pull-left">
               
               
                
                    <center>
                       <img src="{{asset($product->brand_logo)}}" style="width: 600px;height: 300px;" />
                    </center>
               
               
               
           </div>


           <div class="col-md-12 pull-right">
               <br>
               <div class="card-header">
                   
                   <b  >Product Features</b>
               </div>
               
               <br><br>
               <div class="col-md-8" style="margin:0 auto;width:800px;">
                   
                   
                   {!!$product->p_features !!}
               </div>
               
           </div>
        </div>
    </div>
    </div>

    </section>


@endsection
