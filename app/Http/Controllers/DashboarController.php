<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\dataCustume;

class DashboarController extends Controller
{
    public function indexDashborde()
    {
        return view('AdminDashBoard.indexDashborde');
    }

   public function users()
    {
        return view('AdminDashBoard.users');
    }
    function customers()
    {
        return view('AdminDashBoard.customers');
    }
    function delete()
    {
        return view('AdminDashBoard.delete');
    }
}

