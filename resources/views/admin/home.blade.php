@extends('layouts.admin')

@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Welcome {{ auth()->user()->name }}</div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="5">Church Account Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('accountDetail.index') }}">
                                            Show Account Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="5">Library Books</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('book.index') }}">Show all
                                            Books</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="5">Messages</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('message.index') }}"> Show all
                                        Messages</a>
                                </td>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="5">Contacts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('contact.index') }}"> Show all
                                        Contacts</a>
                                </td>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="5">Subscribers</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('newsletter.index') }}"> Show all
                                        Subscribers</a>
                                </td>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="5">Events</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('event.index') }}"> Show all

                                        Events</a>
                                </td>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="5">Hero Banners</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('heroBanner.index') }}"> Show all

                                        Hero Banners</a>
                                </td>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="5">Audio Messages</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('audioMessage.index') }}"> Show all

                                        Audio Messages</a>
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
