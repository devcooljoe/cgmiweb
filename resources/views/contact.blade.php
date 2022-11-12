<?php Session::put('page', 'contact') ?>
@extends('layouts.app')

@section('title')
<title>{{ config('app.name', 'Laravel') }}</title>
@endsection

@section('headerContent')
<div class="cgmi___crousel_container cgmi___crousel_container_about">
    <div>
        <h3 class="text-center">Contact us</h3>
    </div>
</div>
@endsection

@section('content')
<section>
    <div class="row d-flex cgmi___contact_padding">
        <div class="col-12 col-md-6 col-sm-6 col-xs-12 m-auto">
            <br><br>
            <p style="font-size: 20px">Thank you for visiting our website. Please contact us using the form below if you have any questions about our church or any of our services.</p>
            <br><br><br>
            <div class="row">
                <div class="col-12 col-md-6 col-sm-6 col-xs-12">
                    <label for="first">First Name<span>*</span></label>
                    <input type="text" id="first" name="firstname" class="form-control form-control-lg">
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-xs-12">
                    <label for="last">Last Name<span>*</span></label>
                    <input type="text" id="last" name="lastname" class="form-control form-control-lg">
                </div>
            </div>
            <br>
            <label for="email">Email<span>*</span></label>
            <input type="text" name="email" id="email" class="form-control form-control-lg">
            <br>
            <label for="message">Your Message<span>*</span></label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control form-control-lg"></textarea>
            <br>
            <input type="submit" value="SEND" class="btn btn-primary btn-lg">
            <br><br>
            <br>
        </div>
    </div>
</section>
<section>
    <div class="cgmi___section_5" style="background-color: #989292">
        <div class="row">
            <div class="col-12 col-md-6 col-sm-6 col-xs-12">
                <img src="/images/WhatsApp Image 2022-11-03 at 9.58.06 PM.jpeg" class="img img-responsive w-100" alt="">
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
                    <iframe style="height:400px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7928.161207715063!2d3.305613074825276!3d6.511481590810276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8eef7c74b431%3A0x22106eb8e25fecca!2sOkota%20Estate%2C%20Ilasamaja%20102214%2C%20Lagos!5e0!3m2!1sen!2sng!4v1667216922585!5m2!1sen!2sng"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
