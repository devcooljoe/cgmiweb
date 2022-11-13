@extends('layouts.admin')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @isset($book) Edit @else Add @endisset Book
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data"
                        action="@isset($book) {{ route('book.update', $book->id) }} @else {{ route('book.store') }} @endisset">
                        @csrf
                        @isset($book) @method('put') @endisset
                        <div class="row mb-3">
                            <label for="title"
                                class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" value="{{ $book->title ?? '' }}"
                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                    value="{{ old('title') }}">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
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

                        <div class="row mb-3">
                            <label for="book"
                                class="col-md-4 col-form-label text-md-end">{{ __('book') }}</label>

                            <div class="col-md-6">
                                <input id="book" type="file"
                                    class="form-control @error('book') is-invalid @enderror" name="book">

                                @error('book')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-plus"></span>@isset($book) {{ __('Update') }} @else {{ __('Add') }} @endisset
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
