@extends('layouts.admin')

@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @isset($heroBanner)
                            Edit
                        @else
                            Add
                        @endisset Hero Banner
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data"
                            action="@isset($heroBanner) {{ route('heroBanner.update', $heroBanner->id) }} @else {{ route('heroBanner.store') }} @endisset">
                            @csrf
                            @isset($heroBanner)
                                @method('put')
                            @endisset
                            <div class="row mb-3">
                                <label for="title"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" value="{{ old('title') ?? ($heroBanner->title ?? '') }}"
                                        class="form-control @error('title') is-invalid @enderror" name="title">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $heroBanner }}</strong>
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
