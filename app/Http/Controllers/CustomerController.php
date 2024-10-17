<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $values = Customer::all();

        return view('tests.customer', compact('values'));
    }
}
