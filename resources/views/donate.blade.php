<?php Session::put('page', 'donate'); ?>
@extends('layouts.app')

@section('title')
    <title>{{ config('app.name', 'Laravel') }}</title>
@endsection

@section('headerContent')
    <div class="cgmi___crousel_container cgmi___crousel_container_about">
        <div>
            <h3 class="text-center">Donate</h3>
        </div>
    </div>
@endsection

@section('content')
    <section>
        <div class="row d-flex cgmi___contact_padding">
            <div class="col-12 col-md-6 col-sm-10 col-xs-12 m-auto">
                <br><br>
                <div class="cgmi___donate_title_div_first_child">
                    <span>Account Description</span>
                    <span>Accout Number</span>
                    <span>Bank</span>
                </div>
                @foreach ($accounts as $account)
                    <div class="cgmi___donate_title_div">
                        <span>{{ $account->name }}</span>
                        <span>{{ $account->number }}</span>
                        <span>{{ $account->bank }}</span>
                    </div>
                @endforeach
                {{ $accounts->links() }}
            </div>
        </div>
    </section>
    <section>
        <div class="cgmi___section_5" style="background-color: #989292">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-6 col-xs-12">
                    <img src="/images/WhatsApp Image 2022-11-03 at 9.58.06 PM.jpeg" class="img img-responsive w-100"
                        alt="">
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-xs-12">
                    <div class="cgmi___section_skew_cover">
                        <div class="cgmi___section_skew_box">
                            <div class="cgmi___section_skew_box_inner">
                                <h3>OUR FOUR CARDINAL POINT</h3>
                            </div>
                        </div>
                    </div>
                    <div class="cgmi___section_5_listview">
                        <ul>
                            <li>Right Living</li>
                            <li>Team Work</li>
                            <li>Evangelism</li>
                            <li>Prayer</li>
                        </ul>
                    </div>
                    <div class="cgmi___section_skew_cover mb-4">
                        <div class="cgmi___section_skew_box">
                            <div class="cgmi___section_skew_box_inner">
                                <h3>Where we are</h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.0325632569!2d3.314451629203779!3d6.505191332176234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8eea4751713d%3A0xc243acb9a4d21b45!2sChurch%20Of%20God%20Mission!5e0!3m2!1sen!2sng!4v1667858219786!5m2!1sen!2sng"
                            width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
