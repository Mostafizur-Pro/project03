<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">


        @if(Request::is('admin*'))

                <li class="active">
                    <a href="{{route('admin.dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>


                <li class="menu-title">Main Navbar</li><!-- /.menu-title -->

                <li>
                    <a href="{{route('admin.user')}}"><i class="menu-icon fa fa-user"></i>Users </a>
                </li>



                    <li>
                        <a href="{{route('admin.slider')}}"><i class="menu-icon fa fa-laptop"></i>Slider </a>
                    </li>



                    <li>
                        <a href="{{route('admin.solution')}}"><i class="menu-icon fa fa-tasks"></i>Solution </a>
                    </li>


                    <li>
                        <a href="{{route('admin.product')}}"><i class="menu-icon fa  fa-briefcase"></i>Product </a>
                    </li>
                    
                    <li>
                        <a href="{{route('admin.software.index')}}"><i class="menu-icon fa  fa-briefcase"></i>Software </a>
                    </li>


                    <li>
                        <a href="{{route('admin.client')}}"><i class="menu-icon fa fa-users"></i>Client </a>
                    </li>

                    <li>
                        <a href="{{route('admin.contact')}}"><i class="menu-icon fa fa-comments"></i>Contact </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-wrench"></i>Setting</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Logo</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">contant</a></li>
                        </ul>
                    </li>





            @endif


            @if(Request::is('editor*'))


                <li class="active">
                    <a href="{{route('editor.dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>



                <li class="menu-title">UI elements</li><!-- /.menu-title -->

                <li>
                    <a href="{{route('editor.slider')}}"><i class="menu-icon fa fa-laptop"></i>Slider </a>
                </li>

                <li>
                    <a href="{{route('editor.solution')}}"><i class="menu-icon fa fa-tasks"></i>Solution </a>
                </li>


                <li>
                    <a href="{{route('editor.product')}}"><i class="menu-icon fa  fa-briefcase"></i>Product </a>
                </li>

                <li>
                    <a href="{{route('editor.client')}}"><i class="menu-icon fa fa-users"></i>Client </a>
                </li>






            @endif


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
