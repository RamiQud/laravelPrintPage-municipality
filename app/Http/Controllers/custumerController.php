<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class custumerController extends Controller
{
    public function index()
    {
        $CustomerProses = Customer::latest()->paginate(5);
        return view('dashboard.customers', compact('stocks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function layout()
    {
        return view('stocks.layout');
    }
    public function create()
    {
        return view('stocks.create');
    }

    public function show($id)
    {
        // return view('stocks.Customers', compact('row','id'));
        return view('index');
    }

    public function destroy($id)
    {
       DB::delete('delete from datacustumer where id = ?', [$id]);
    
        return redirect()->route('dashboard.customers')->with('success', 'Customer deleted successfully.');
    }
 
}
