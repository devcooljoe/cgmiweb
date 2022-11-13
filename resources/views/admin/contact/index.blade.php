@extends('layouts.admin')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Show all Contacts
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
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th><br></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->firstname }}</td>
                                    <td>{{ $contact->lastname }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>
                                        <div style="height: 30px">
                                            <form action="{{ route('contact.destroy', $contact->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-success btn-sm" style="margin-left: 10px"
                                                    href="{{ route('contact.show', $contact->id) }}">
                                                    View message
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    href="{{ route('contact.destroy', $contact->id) }}">
                                                    <span class="fa fa-trash"></span> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
