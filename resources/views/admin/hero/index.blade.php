@extends('layouts.admin')

@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Show all Hero Banners
                        <a class="btn btn-primary btn-sm" style="margin-left: 10px"
                            href="{{ route('heroBanner.create') }}"><span class="fa fa-plus"></span>
                            New Banner
                        </a>
                    </div>
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
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Picture</th>
                                    <th><br></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($heroBanners as $banner)
                                    <tr>
                                        <td>{{ $banner->title }}</td>
                                        <td><a target="_blank" href="{{ $banner->picture }}">View Picture</a></td>
                                        <td>
                                            @can('update', $banner)
                                                <div style="height: 30px">
                                                    <form action="{{ route('heroBanner.destroy', $banner->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a class="btn btn-success btn-sm" style="margin-left: 10px"
                                                            href="{{ route('heroBanner.edit', $banner->id) }}">
                                                            <span class="fa fa-edit"></span> Edit
                                                        </a>
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            href="{{ route('heroBanner.destroy', $banner->id) }}">
                                                            <span class="fa fa-trash"></span> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        {{ $heroBanners->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
