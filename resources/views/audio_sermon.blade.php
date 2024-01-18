<?php Session::put('page', 'sermon'); ?>
@extends('layouts.app')

@section('title')
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script>
        function share(title, audio) {
            if (navigator.share) {
                navigator.share({
                    title: title,
                    url: audio,
                }).then(() => {
                    console.log('Thanks for sharing!');
                }).catch(console.error);
            } else {
                console.log("Cant share anything");
            }
        }
    </script>
@endsection

@section('headerContent')
    <div class="cgmi___crousel_container cgmi___crousel_container_about">
        <div>
            <h3 class="text-center">Have you missed a service? <br> You can listen to it here.</h3>
        </div>
    </div>
@endsection

@section('content')
    <section>
        <div class="cgmi___sermon_section">
            <br>
            <h3 class="text-center" style="font-size: 30px; font-weight:bold;text-transform:uppercase">Audio Messages</h3>
            <br>
            <div class="cgmi___sermon_section_second_div">
                <div class="row">
                    @foreach ($messages as $message)
                        <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                            <div class="cgmi___sermon_section_second_div_video_book">
                                <div>
                                    <audio controls>
                                        <source src="{{ $message->audio }}" type="audio/mpeg">
                                        Your browser does not support the audio tag.
                                    </audio>
                                    <h4>{{ $message->title }}</h4>
                                    <div style="width:100%; display:flex;">
                                        <span class="btn btn-primary btn-sm" style="margin-left:auto;"
                                            onclick="share('{{ $message->title }}', '{{ route('index') . '/' . $message->audio }}')"
                                            id="shareBtn">SHARE</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
                {{ $messages->links() }}
            </div>
        </div>
    </section>
    <br><br>
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