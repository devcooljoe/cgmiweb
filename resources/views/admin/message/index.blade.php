@extends('layouts.admin')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Show all Messages
                    <a class="btn btn-primary btn-sm" style="margin-left: 10px"
                        href="{{ route('message.create') }}"><span class="fa fa-plus"></span>
                        New Message
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
                            @foreach ($messages as $message)
                                <tr>
                                    <td><a target="_blank" href="{{ $message->link }}">View Message</a></td>
                                    <td>
                                        @can('update', $message)
                                        <div style="height: 30px">
                                            <form action="{{ route('message.destroy', $message->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-success btn-sm" style="margin-left: 10px"
                                                    href="{{ route('message.edit', $message->id) }}">
                                                    <span class="fa fa-edit"></span> Edit
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    href="{{ route('message.destroy', $message->id) }}">
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
                    {{ $messages->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
