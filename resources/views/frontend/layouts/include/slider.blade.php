<section id="intro" style="margin-top: 90px;">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <?php

                $sliders = DB::table('sliders')->where('s_p_status',1)->get();
                $i = 1;
                ?>

                @foreach($sliders as $slider)

                        @if($i==1)
                            <div class="carousel-item active">
                                @else
                                    <div class="carousel-item">

                                        @endif
                                        <div class="carousel-background ">
                                            <img src="{{URL::to($slider->s_image)}}"  alt="" >
                                        </div>

                                        <div class="carousel-container">
                                            <div class="carousel-content">
                                                <h2>{{$slider->s_title}}</h2>
                                                <p>{{$slider->s_discription}}</p>
                                         </div>

                                     </div>
                             </div>
                                    <?php   $i++;    ?>


                @endforeach


            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>
