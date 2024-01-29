@extends('layouts.admin')

@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Show all Gallery Pictures
                        <a class="btn btn-primary btn-sm" style="margin-left: 10px" href="{{ route('gallery.create') }}"><span
                                class="fa fa-plus"></span>
                            New Picture
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
                                    <th>Link</th>
                                    <th><br></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                    <tr>
                                        <td><a target="_blank" href="{{ $gallery->picture }}">View picture</a></td>
                                        <td>
                                            @can('update', $gallery)
                                                <div style="height: 30px">
                                                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a class="btn btn-success btn-sm" style="margin-left: 10px"
                                                            href="{{ route('gallery.edit', $gallery->id) }}">
                                                            <span class="fa fa-edit"></span> Edit
                                                        </a>
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            href="{{ route('gallery.destroy', $gallery->id) }}">
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
                        {{ $galleries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
