<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $CustomerProses = Customer::latest()->paginate(5);
        return view('dashboard.customers', compact('stocks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //user Destrot
    public function destroyUser($id)
    {
       DB::delete('delete from users where id = ?', [$id]);
    
        return redirect()->route('AdminDashBoard.users')->with('success', 'Customer deleted successfully.');
    }
}
