@extends('layouts.admin')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Show all Books
                    <a class="btn btn-primary btn-sm" style="margin-left: 10px"
                        href="{{ route('book.create') }}"><span class="fa fa-plus"></span>
                        New Book
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
                                <th>Author</th>
                                <th>Picture</th>
                                <th>File</th>
                                <th><br></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td><a target="_blank" href="{{ $book->picture }}">View Picture</a></td>
                                    <td><a target="_blank" href="{{ $book->file }}">View File</a></td>
                                    <td>
                                        @can('update', $book)
                                        <div style="height: 30px">
                                            <form action="{{ route('book.destroy', $book->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-success btn-sm" style="margin-left: 10px"
                                                    href="{{ route('book.edit', $book->id) }}">
                                                    <span class="fa fa-edit"></span> Edit
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    href="{{ route('book.destroy', $book->id) }}">
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
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
