<?php Session::put('page', 'book'); ?>
@extends('layouts.app')

@section('title')
    <title>{{ config('app.name', 'Laravel') }}</title>
@endsection
@section('headerContent')
    <div class="cgmi___crousel_container cgmi___crousel_container_about cgmi___crousel_container_book">
        <div>
            <h3 class="text-center">Intellectual growth should commence at birth and cease only at
                death. ― Albert Einstein</h3>
            <div class="cgmi_form_field_2_div">
                <form action="{{ route('book') }}" method="get">
                    <input type="text" name="search" class="cgmi_form_field_2" placeholder="Book/Author">
                    <input type="submit" value="search" class="cgmi_form_button_2">
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section>
        <div class="cgmi___sermon_section">
            <br>
            <h3 class="text-center" style="font-size: 30px; font-weight:bold;text-transform:uppercase">Most Popular</h3>
            <br>
            <div class="cgmi___sermon_section_second_div">
                <div class="row">
                    @foreach ($books as $book)
                        <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                            <div class="cgmi___sermon_section_second_div_video_book">
                                <div>
                                    <a href="/{{ $book->file }}" target="_blank" rel="noopener noreferrer">
                                        <img src="/{{ $book->picture }}" class="img" alt="">
                                    </a>
                                    <h4>{{ $book->title }}</h4>
                                    <p>by {{ $book->author }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
                {{ $books->links() }}
            </div>
        </div>
    </section>
    <br><br>
@endsection
