@extends('layouts.admin')

@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @isset($audioMessage)
                            Edit
                        @else
                            Add
                        @endisset Audio Message
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data"
                            action="@isset($audioMessage) {{ route('audioMessage.update', $audioMessage->id) }} @else {{ route('audioMessage.store') }} @endisset">
                            @csrf
                            @isset($audioMessage)
                                @method('put')
                            @endisset
                            <div class="row mb-3">
                                <label for="title"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" value="{{ old('title') ?? ($audioMessage->title ?? '') }}"
                                        class="form-control @error('title') is-invalid @enderror" name="title">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $audioMessage }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="audio"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Audio') }}</label>

                                <div class="col-md-6">
                                    <input id="audio" type="file"
                                        class="form-control @error('audio') is-invalid @enderror" name="audio">

                                    @error('audio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-plus"></span> @isset($audioMessage)
                                            {{ __('Update') }}
                                        @else
                                            {{ __('Add') }}
                                        @endisset
                                    </button>
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
