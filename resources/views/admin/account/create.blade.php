@extends('layouts.admin')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @isset($accountDetail) Edit @else Add @endisset Account Detail
                </div>
                <div class="card-body">
                    <form method="POST"
                        action="@isset($accountDetail) {{ route('accountDetail.update', $accountDetail->id) }} @else {{ route('accountDetail.store') }} @endisset">
                        @csrf
                        @isset($accountDetail) @method('put') @endisset
                        <div class="row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-end">{{ __('Account description') }}</label>

                            <div class="col-md-6">
                                <input id="name" value="{{ $accountDetail->name ?? '' }}"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="number"
                                class="col-md-4 col-form-label text-md-end">{{ __('Account number') }}</label>

                            <div class="col-md-6">
                                <input id="number" value="{{ $accountDetail->number ?? '' }}"
                                    class="form-control @error('number') is-invalid @enderror" name="number"
                                    value="{{ old('number') }}">

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bank"
                                class="col-md-4 col-form-label text-md-end">{{ __('Bank name') }}</label>

                            <div class="col-md-6">
                                <input id="bank" value="{{ $accountDetail->bank ?? '' }}"
                                    class="form-control @error('bank') is-invalid @enderror" name="bank">

                                @error('bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-plus"></span> @isset($accountDetail) {{ __('Update') }} @else {{ __('Add') }} @endisset
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
