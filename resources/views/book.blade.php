<?php Session::put('page', 'book'); ?>
@extends('layouts.app')

@section('title')
    <title>{{ config('app.name', 'Laravel') }}</title>
@endsection
@section('headerContent')
    <div class="cgmi___crousel_container cgmi___crousel_container_about">
        <div>
            <h3 class="text-center">Intellectual growth should commence at birth and cease only at
                death. ― Albert Einstein</h3>
            <div class="cgmi_form_field_2_div">
                <form action="#" method="get">
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
                    <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                        <div class="cgmi___sermon_section_second_div_video_book">
                            <div>
                                <img src="/images/booksample.png" class="img" alt="">
                                <h4>Title of Book</h4>
                                <p>By Sososo and So</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                        <div class="cgmi___sermon_section_second_div_video_book">
                            <div>
                                <img src="/images/booksample.png" class="img" alt="">
                                <h4>Title of Book</h4>
                                <p>By Sososo and So</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                        <div class="cgmi___sermon_section_second_div_video_book">
                            <div>
                                <img src="/images/booksample.png" class="img" alt="">
                                <h4>Title of Book</h4>
                                <p>By Sososo and So</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                        <div class="cgmi___sermon_section_second_div_video_book">
                            <div>
                                <img src="/images/booksample.png" class="img" alt="">
                                <h4>Title of Book</h4>
                                <p>By Sososo and So</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                        <div class="cgmi___sermon_section_second_div_video_book">
                            <div>
                                <img src="/images/booksample.png" class="img" alt="">
                                <h4>Title of Book</h4>
                                <p>By Sososo and So</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                        <div class="cgmi___sermon_section_second_div_video_book">
                            <div>
                                <img src="/images/booksample.png" class="img" alt="">
                                <h4>Title of Book</h4>
                                <p>By Sososo and So</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                        <div class="cgmi___sermon_section_second_div_video_book">
                            <div>
                                <img src="/images/booksample.png" class="img" alt="">
                                <h4>Title of Book</h4>
                                <p>By Sososo and So</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                        <div class="cgmi___sermon_section_second_div_video_book">
                            <div>
                                <img src="/images/booksample.png" class="img" alt="">
                                <h4>Title of Book</h4>
                                <p>By Sososo and So</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                        <div class="cgmi___sermon_section_second_div_video_book">
                            <div>
                                <img src="/images/booksample.png" class="img" alt="">
                                <h4>Title of Book</h4>
                                <p>By Sososo and So</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div style="cgmi___pagination">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span class="sr-only">Next</span>
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <br><br>
@endsection
