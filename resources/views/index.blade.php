<?php Session::put('page', 'index'); ?>
@extends('layouts.app')

@section('title')
    <title>Church of God Misson Int'l Inc. | The Wealthy Place Okota</title>
@endsection

@section('headerContent')
    <div id="carouselExampleCaptions" class="carousel slide" data-interval="12000" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
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
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
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
                            Words can???t express our affection for you. We are happy to provide you with the undiluted
                            word of God from the scripture. You are regarded as a one-of-a-kind masterpiece in this
                            home. Let God's kindness uplift you; His love guide you, and his rest renew you!
                        </p>
                        <p>Thank you and you are Welcome to the Wealthy Place</p>
                        <p class="cgmi___past_name">Rev Matthew Asemota</p>
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
                    <img src="/images/WhatsApp Image 2022-11-05 at 8.29.54 AM.jpeg" class="img img-responsive w-100"
                        alt="">
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
        <div class="w-100 text-center" style="padding: 20px">
            @if ($live != null)
                <?php $link = preg_replace('/https:\/\/www\.youtube\.com\/watch\?v=|https:\/\/youtu.be\//', 'https://www.youtube.com/embed/', $live->link); ?>
                <iframe width="100%" height="500" src="{{ $link }}?controls=1">
                </iframe>
            @endif
        </div>
    </section>
    <section>
        <div class="cgmi___section_2">
            <div class="cgmi___section_skew_cover">
                <div class="cgmi___section_skew_box">
                    <h3>What???s New at the wealthy place</h3>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @for ($i=0; $i<count($events); $i+=3)
                    <div class="carousel-item active">
                        <div class="row">
                            @if ($i < count($events))
                            <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                                <img src="/storage/<?php echo $events[$i]['picture'] ?>"
                                    class="img img-responsive w-100" style="height: 400px;" alt="">
                            </div>
                            @endif
                            @if ($i+1 < count($events))
                            <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                                <img src="/storage/<?php echo $events[$i+1]['picture'] ?>"
                                    class="img img-responsive w-100" style="height: 400px;" alt="">
                            </div>
                            @endif
                            @if ($i+2 < count($events))
                            <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                                <img src="/storage/<?php echo $events[$i+2]['picture'] ?>"
                                    class="img img-responsive w-100" style="height: 400px;" alt="">
                            </div>
                            @endif
                        </div>
                    </div>
                    @endfor
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section>
        <div class="cgmi___section_4">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-6 col-xs-12">
                    <div class="cgmi___section_body" style="margin-bottom: 40px">
                        <h3>Download our app to stay in touch with the Wealthy Place.</h3>
                    </div>
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
                <div class="col-12 col-md-6 col-sm-12 col-xs-12">
                    <img src="/images/WhatsApp Image 2022-11-03 at 9.58.06 PM.jpeg" class="img img-responsive w-100"
                        alt="">
                </div>
                <div class="col-12 col-md-6 col-sm-12 col-xs-12">
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
