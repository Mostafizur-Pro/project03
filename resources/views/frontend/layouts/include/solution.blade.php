<section id="about">
    <div class="container">

        <header class="section-header">
            <h3>Our Solution</h3>
            <p>BAITS are an established and trusted name in home and business security that meets the needs of our community to protect people and property.
                Our mission is to create value-added solutions for our clients and partners, taking advantage of the best technologies and capabilities. We are committed and determined to provide the best solutions so that our customers can benefit from improved security to help increase productivity and efficiency of operations.
            </p>
        </header>

        <div class="row about-cols">
            @foreach($solution as $solutions)

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col" style="min-height: 515px;">
                        <div class="img">
                            <a href="{{route('product.by.solution',$solutions->id)}}">  <img src="{{asset($solutions->so_image)}}" style="width: 400px; height: 250px;" alt="" class="img-fluid" loading="lazy" /></a>
                        </div>
                        <h2 class="title"><a href="{{route('product.by.solution',$solutions->id)}}">{{$solutions->so_title}}</a></h2>
                        <p>
                            {!! str_limit(strip_tags($solutions->so_discription),250) !!}
                        </p>
                    </div>
                </div>

            @endforeach

        </div>
        


    </div>
</section>
