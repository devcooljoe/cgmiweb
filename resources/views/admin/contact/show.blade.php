@extends('layouts.admin')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    View Message
            </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="row mb-3">
                            <label for="firstname"
                                class="col-md-4 col-form-label text-md-end">{{ __('First name') }}</label>

                            <div class="col-md-6">
                                <input readonly id="firstname" value="{{ $contact->firstname ?? '' }}"
                                    class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                    value="{{ old('firstname') }}">

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lastname"
                                class="col-md-4 col-form-label text-md-end">{{ __('Last name') }}</label>

                            <div class="col-md-6">
                                <input readonly id="lastname" value="{{ $contact->lastname ?? '' }}"
                                    class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                    value="{{ old('lastname') }}">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input readonly id="email" value="{{ $contact->email ?? '' }}"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="message"
                                class="col-md-4 col-form-label text-md-end">{{ __('Message') }}</label>

                            <div class="col-md-6">
                                <textarea readonly required name="message" id="message" cols="30" rows="10" class="form-control form-control-lg">
                                    {{ $contact->message }}
                                </textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
