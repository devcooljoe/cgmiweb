@extends('layouts.admin')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Show all events
                    <a class="btn btn-primary btn-sm" style="margin-left: 10px"
                        href="{{ route('event.create') }}"><span class="fa fa-plus"></span>
                        New event
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
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->title }}</td>
                                    <td><a target="_blank" href="{{ $event->picture }}">View Picture</a></td>
                                    <td>
                                        @can('update', $event)
                                        <div style="height: 30px">
                                            <form action="{{ route('event.destroy', $event->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-success btn-sm" style="margin-left: 10px"
                                                    href="{{ route('event.edit', $event->id) }}">
                                                    <span class="fa fa-edit"></span> Edit
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    href="{{ route('event.destroy', $event->id) }}">
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
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
