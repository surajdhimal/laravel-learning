<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Controllers\Controller;
use App\Models\Thread;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $account = Account::with("threads")->find(2);
        return $account;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accounts = Account::find(1);
        if ($accounts) { // Check if the account exists
            $accounts->delete();
        } else {
            return response()->json(["message" => "Account not found"], 404);
        }
        // Thread::where("user_id", 1)->delete();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        //
    }
}
