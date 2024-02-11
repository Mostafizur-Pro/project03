@extends('backend.layouts.app')

@section('title','Home')

@section('content')
    <div class="content">
    <div class="animated fadeIn">
        <!-- Widgets  -->


        <div class="row">


            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-cash"></i>
                            </div>
                            <?php
                                $solution =DB::table('solutions')->get();
                                $products =DB::table('products')->get();
                                $clients =DB::table('clients')->get();
                                $users =DB::table('users')->get();
                            ?>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">{{$solution->count('id') }}</div>
                                    <div class="stat-heading">Solution</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-cart"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">{{$products->count('id') }}</div>
                                    <div class="stat-heading">Product</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">{{$clients->count('id') }}</div>
                                    <div class="stat-heading">Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">{{$users->count('id') }}</div>
                                    <div class="stat-heading">User</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /Widgets -->
        <!--  Traffic  -->

        <!--  /Traffic -->
        <div class="clearfix"></div>
        <!-- Orders -->


        <!-- /#add-category -->
    </div>
    </div>
    <!-- /.content -->
@endsection
