<?php Session::put('page', 'index') ?>
@extends('layouts.app')

@section('title')
<title>Church of God Misson Int'l Inc. | The Wealthy Place Okota</title>
@endsection

@section('headerContent')
<div id="carouselExampleCaptions" class="carousel slide" data-interval="10000" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
            class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="cgmi___crousel_container">
                <div>
                    <p class="cgmi___crousel_title_first">Welcome to</p>
                    <h3>The Wealthy Place Okota</h3>
                    <p class="text-left">
                        <a href="/about" class="cgmi___landing_button">About Us</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="cgmi___crousel_container">
                <div>
                    <p class="cgmi___crousel_title_first">Sermon</p>
                    <h3>Focus on Christ for grace to pray without ceasing</h3>
                    <p class="text-left">
                        <a href="/sermon" class="cgmi___landing_button">Watch Sermon</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <button id="prevButton" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button id="nextButton" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection

@section('content')
    <section>
        <div class="cgmi___section_1">
            <div class="row">
                <div class="col-12 col-md-4 col-sm-4 col-xs-12 m-auto">
                    <img src="/images/pastorandmrs.jpeg" class="img img-responsive" alt="">
                </div>
                <div class="col-12 col-md-8 col-sm-8 col-xs-12">
                    <div class="cgmi___section_skew_cover">
                        <div class="cgmi___section_skew_box">
                            <h3>Welcome to CGMI Okota The Wealthy Place</h3>
                        </div>
                    </div>
                    <div class="cgmi___section_content">
                        <p>
                            We welcome you to the wealthy place a branch of Church of God Mission International. Our
                            vison as a commission is building people into leadership with global passion deeply rooted
                            in Christ. With a mission to evangelize to the lost for the total transformation of their
                            spirit, soul and body, developing them into leaders.
                        </p>
                        <p>Our blessings are spoken over your family, Our hope is that your house will be a joyful,
                            peaceful, and good reflection of God. The divine doors of favor, advancement, promotion,
                            business and career breakthrough shall be opened for you and your family.
                        </p>
                        <p>
                            Words can’t express our affection for you. We are happy to provide you with the undiluted
                            word of God from the scripture. You are regarded as a one-of-a-kind masterpiece in this
                            home. Let God's kindness uplift you; His love guides you, and his rest renew you!
                        </p>
                        <p>Thank you and you are Welcome to the Wealthy Place</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="cgmi___section_2">
            <div class="cgmi___section_skew_cover">
                <div class="cgmi___section_skew_box">
                    <h3>Attend a Service</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <img src="/images/WhatsApp Image 2022-11-05 at 8.29.54 AM.jpeg" class="img img-responsive w-100" alt="">
                </div>
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <img src="/images/Prayer_Service2.jpg" class="img img-responsive w-100" alt="">
                </div>
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <img src="/images/Bible_Study1.jpg" class="img img-responsive w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="cgmi___section_3">
            <img src="/images/play.png" class="img img-responsive m-auto" alt="">
        </div>
    </section>
    <section>
        <div class="cgmi___section_2">
            <div class="cgmi___section_skew_cover">
                <div class="cgmi___section_skew_box">
                    <h3>What’s New at the wealthy place</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <img src="/images/WhatsApp Image 2022-11-05 at 8.35.30 AM.jpeg" class="img img-responsive w-100" alt="">
                </div>
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <img src="/images/WhatsApp Image 2022-11-05 at 8.34.38 AM.jpeg" class="img img-responsive w-100" alt="">
                </div>
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <img src="/images/Rectangle2.png" class="img img-responsive w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="cgmi___section_4">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-6 col-xs-12">
                    {{-- <div class="cgmi___section_body">
                    <h3>Download our App on the platforms below</h3>
                  </div> --}}
                    <div class="d-block">
                        <img src="/images/playstore.png" class="img img-responsive" alt="">
                        <img src="/images/appstore.png" class="img img-responsive" alt="">
                    </div>
                </div>
                <div class="left col-12 col-md-6 col-sm-6 col-xs-12">
                    <img src="/images/phones.png" class="img img-responsive w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="cgmi___section_2">
            <div class="cgmi___section_skew_cover">
                <div class="cgmi___section_skew_box">
                    <h3>Ministries</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <div class="cgmi___ministries_images cgmi___ministries_images1">
                        <div>
                            <p>Men Ministry</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <div class="cgmi___ministries_images cgmi___ministries_images2">
                        <div>
                            <p>Women Ministry</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <div class="cgmi___ministries_images cgmi___ministries_images3">
                        <div>
                            <p>Youth Ministry</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-2 col-sm-2 col-xs-12"></div>
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <div class="cgmi___ministries_images cgmi___ministries_images4">
                        <div>
                            <p>Teenager Ministry</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <div class="cgmi___ministries_images cgmi___ministries_images5">
                        <div>
                            <p>Children Ministry</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2 col-sm-2 col-xs-12"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="cgmi___section_5">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-6 col-xs-12">
                    <img src="/images/img4.png" class="img img-responsive w-100" alt="">
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
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
