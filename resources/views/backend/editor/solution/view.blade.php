@extends('backend.layouts.app')
@section('title','Solution View')

@section('content')

    <section id="portfolio"  class="section-bg" >
        <div class="container" style="margin-top: 80px;">


            <div class="card">
                <div class="card-header">
                    {{$solution->so_title}}
                </div>
                <div class="card-body">
                    <div class="col-md-6 pull-left">
                        <img src="{{asset($solution->so_image)}}" style="width: 500px;height: 300px;" />
                    </div>


                    <div class="col-md-6 pull-right">
                        {!!$solution->so_discription !!}
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
