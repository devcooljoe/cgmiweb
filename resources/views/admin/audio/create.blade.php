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
                                <label for="embed"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Embed code') }}</label>

                                <div class="col-md-6">
                                    <input id="embed" value="{{ old('embed') ?? ($audioMessage->embed ?? '') }}"
                                        class="form-control @error('embed') is-invalid @enderror" name="embed">

                                    @error('embed')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $audioMessage }}</strong>
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
