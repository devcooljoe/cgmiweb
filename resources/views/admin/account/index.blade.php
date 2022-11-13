@extends('layouts.admin')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Show all Account Details
                    <a class="btn btn-primary btn-sm" style="margin-left: 10px"
                        href="{{ route('accountDetail.create') }}"><span class="fa fa-plus"></span>
                        New Account Detail
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
                                <th>Account Description</th>
                                <th>Account Number</th>
                                <th>Bank Name</th>
                                <th><br></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $account)
                                <tr>
                                    <td>{{ $account->name }}</td>
                                    <td>{{ $account->number }}</td>
                                    <td>{{ $account->bank }}</td>
                                    <td>
                                        @can('update', $account)
                                        <div style="height: 30px">
                                            <form action="{{ route('accountDetail.destroy', $account->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-success btn-sm" style="margin-left: 10px"
                                                    href="{{ route('accountDetail.edit', $account->id) }}">
                                                    <span class="fa fa-edit"></span> Edit
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    href="{{ route('accountDetail.destroy', $account->id) }}">
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
                    {{ $accounts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
