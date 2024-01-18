@extends('layouts.admin')

@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @isset($message)
                            Edit
                        @else
                            Add
                        @endisset Message
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data"
                            action="@isset($message) {{ route('message.update', $message->id) }} @else {{ route('message.store') }} @endisset">
                            @csrf
                            @isset($message)
                                @method('put')
                            @endisset
                            <div class="row mb-3">
                                <label for="link"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Link') }}</label>

                                <div class="col-md-6">
                                    <input id="link" value="{{ old('link') ?? ($message->link ?? '') }}"
                                        class="form-control @error('link') is-invalid @enderror" name="link">

                                    @error('link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-plus"></span> @isset($message)
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
