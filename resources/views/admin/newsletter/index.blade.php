@extends('layouts.admin')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Show all Subscribers
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
                                <th>Name</th>
                                <th>Email</th>
                                <th><br></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newsletters as $newsletter)
                                <tr>
                                    <td>{{ $newsletter->name }}</td>
                                    <td>{{ $newsletter->email }}</td>
                                    <td>
                                        @can('delete', $newsletter)
                                        <div style="height: 30px">
                                            <form action="{{ route('newsletter.destroy', $newsletter->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    href="{{ route('newsletter.destroy', $newsletter->id) }}">
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
                    {{ $newsletters->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
