@extends('layouts.admin')

@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @isset($gallery)
                            Edit
                        @else
                            Add
                        @endisset Audio Message
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data"
                            action="@isset($gallery) {{ route('gallery.update', $gallery->id) }} @else {{ route('gallery.store') }} @endisset">
                            @csrf
                            @isset($gallery)
                                @method('put')
                            @endisset
                            <div class="row mb-3">
                                <label for="title"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" value="{{ old('title') ?? ($gallery->title ?? '') }}"
                                        class="form-control @error('title') is-invalid @enderror" name="title">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $gallery }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="picture"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Picture') }}</label>

                                <div class="col-md-6">
                                    <input id="picture" type="file"
                                        class="form-control @error('picture') is-invalid @enderror" name="picture">

                                    @error('picture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-plus"></span> @isset($gallery)
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
