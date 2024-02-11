@extends('backend.layouts.app')
@section('title','Product View')

@section('content')

    <section id="portfolio"  class="section-bg" >
        <div class="container" style="margin-top: 80px;">


            <div class="card">
                <div class="card-header">
                    {{$product->p_name}}
                </div>
                <div class="card-body">
                    <div class="col-md-6 pull-left">
                        <img src="{{asset($product->p_image)}}" style="width: 500px;height: 300px;" />
                    </div>


                    <div class="col-md-6 pull-right">
                        {!!$product->p_features !!}
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
