<section id="clients" class="wow fadeInUp">
    <div class="container">

        <header class="section-header">
            <h3>Our Clients</h3>
        </header>

        <?php $clients = DB::table('clients')->where('client_publication',1)->get(); ?>

        <div class="owl-carousel clients-carousel">
		@foreach($clients as $client)
            <img src="{{asset($client->client_image)}}" alt="" style="height: 70px; width: 300px;">
		@endforeach
        </div>
        
    </div>
</section>



