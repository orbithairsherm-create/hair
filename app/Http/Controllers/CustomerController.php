<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function insert(Request $request)
    {
        $data = new Customer();

        $data->name = $request->name;
        $data->contact = $request->contact;
        $data->address = $request->address;

        $data->save();

        return redirect('/');
    }
}