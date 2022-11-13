<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountDetailRequest;
use App\Http\Requests\UpdateAccountDetailRequest;
use App\Models\AccountDetail;

class AccountDetailController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(AccountDetail::class, 'accountDetail');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = AccountDetail::orderBy('id', 'DESC')->paginate(20);

        return view('admin.account.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAccountDetailRequest  $request
     */
    public function store(StoreAccountDetailRequest $request)
    {
        auth()->user()->accountdetail()->create([
            'name' => $request->name,
            'number' => $request->number,
            'bank' => $request->bank,
        ]);

        return redirect()->route('accountDetail.index')->with('success', 'Account Details added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  AccountDetail  $accountDetail
     */
    public function show(AccountDetail $accountDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  AccountDetail  $accountDetail
     */
    public function edit(AccountDetail $accountDetail)
    {
        return view('admin.account.create', compact('accountDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAccountDetailRequest  $request
     * @param  AccountDetail  $accountDetail
     */
    public function update(UpdateAccountDetailRequest $request, AccountDetail $accountDetail)
    {
        $accountDetail->update([
            'name' => $request->name,
            'number' => $request->number,
            'bank' => $request->bank,
        ]);

        return redirect()->route('accountDetail.index')->with('success', 'Account Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  AccountDetail  $accountDetail
     */
    public function destroy(AccountDetail $accountDetail)
    {
        $accountDetail->delete();

        return redirect()->route('accountDetail.index')->with('success', 'Account Details deleted successfully');
    }
}
