@extends('frontend.layouts.app')
@section('title')
{{$solutionid->so_title}}
@endsection

@section('front_css')

@endsection

@section('frontcontant')

    <section id="portfolio"  class="section-bg" oncopy="return false" oncut="return false" onpaste="return false">
        <div class="container" style="margin-top: 80px;">


    <div class="card">
        <div class="card-header">
            Product Name : {{$solutionid->so_title}}
            <a href="{{route('solution.pdf',$solutionid->id)}}" class="btn btn-sm btn-success pull-right" target="_blank">Download</a>
        </div>
        <div class="card-body">
           <div class="col-md-12 pull-left">
               <center>
                   <img src="{{asset($solutionid->so_image)}}" style="width: 800px;height: 300px;" loading="lazy" />
               </center>
               
           </div>


           <div class="col-md-12 pull-right">
               <br>
               <div class="card-header">
                   
                   <b  >Solution Features</b>
               </div>
               
               <br><br>
               <div>
                   
                   
                   {!!$solutionid->so_discription !!}
               </div>
               
           </div>
        </div>
    </div>
    
    
    
    </div>
    
    
<!--<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
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
