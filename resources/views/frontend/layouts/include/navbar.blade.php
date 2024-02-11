<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <!-- <h1><a href="#intro" class="scrollto">BAITS</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{URL::to('/')}}"><img src="{{asset('public/frontend/')}}/img/baits-logo.png" style="width: 150px;" alt="" title=""  /></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="{{URL::to('/')}}">Home</a></li>
                <li><a href="http://shop.baitsbd.com" target="blank" >Shop</a></li>

                <li><a href="{{route('about')}}">About Us</a></li>
                <li class="menu-has-children"><a href="#">Solution</a>
                    <ul>
                        <?php $solutions = DB::table('solutions')->get(); ?>

                        @foreach($solutions as $solution)
                        <li><a href="{{route('product.by.solution',$solution->id)}}">{{$solution->so_title}}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="{{route('product')}}">Product</a></li>
                
                <li class="menu-has-children"><a href="#">Career</a>
                    <ul>
                        
                        <li><a href="{{URL::to('/career')}}">Career</a></li>
                        <li><a href="{{URL::to('/internee')}}">Internee</a></li>
                        
                    </ul>
                </li>
                <li><a href="{{route('software')}}">Software</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{route('faq')}}">FAQ</a></li>
                <!--<li><a href="#">Blog</a></li>-->
                
                

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header>
