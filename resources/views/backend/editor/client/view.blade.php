@extends('backend.layouts.app')
@section('title','Client View')

@section('content')

    <section id="portfolio"  class="section-bg" >
        <div class="container" style="margin-top: 80px;">

            <div class="col-lg-6 pull-left">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Client information</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Client Name : </td>
                                <td>{{$client->client_name}}</td>
                            </tr>
                            <tr>
                                <td>Client Phone : </td>
                                <td>{{$client->client_phone}}</td>

                            </tr>
                            <tr>
                                <td>Client Email : </td>
                                <td>{{$client->client_email}}</td>
                            </tr>
                            <tr>
                                <td>Client Address : </td>
                                <td>{{$client->client_address}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pull-right">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Client Photo</strong>
                    </div>
                    <div class="card-body">

                       <center> <img src="{{asset($client->client_image)}}"></center>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
