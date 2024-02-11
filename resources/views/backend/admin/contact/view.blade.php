@extends('backend.layouts.app')
@section('title','Contact View')

@section('content')

    <section id="portfolio"  class="section-bg" >
        <div class="container" style="margin-top: 80px;">

            <div class="col-lg-6 pull-left">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Sender information</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Name : </td>
                                <td>{{$contact->name}}</td>
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td>{{$contact->email}}</td>

                            </tr><tr>
                                <td>Subject : </td>
                                <td>{{$contact->subject}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pull-right">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Message , Date/Time :{{$contact->created_at}} </strong>
                    </div>
                    <div class="card-body">
                        {!! $contact->message !!}
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
