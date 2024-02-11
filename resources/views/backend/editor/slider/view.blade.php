@extends('backend.layouts.app')
@section('title','Slider View')

@section('content')

    <section id="portfolio"  class="section-bg" >
        <div class="container" style="margin-top: 80px;">


            <div class="card">
                <div class="card-header">
                    {{$slider->s_title}}
                </div>
                <div class="card-body">
                    <div class="col-md-6 pull-left">
                        <img src="{{asset($slider->s_image)}}" style="width: 500px;height: 300px;" />
                    </div>


                    <div class="col-md-6 pull-right">
                        {!!$slider->s_discription !!}
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
