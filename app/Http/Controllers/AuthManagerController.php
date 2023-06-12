<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Models\DataCustumer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\dataCustume;
use App\Http\Controllers\UserController;

class AuthManagerController extends Controller
{
    function login()
    {
        return view('login');
    }
    function registertion()
    {
        return view('AdminDashBoard.registertion');
    }
    function index()
    {
        return view('index');
    }

    function registertionPost(Request $request)
    {
        $request->validate([
            'numberId' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required'
            
        ]);

        $data = [
            'numberId' => $request->numberId,
            'username' => $request->username,
            'password' => $request->password,
            'role' => $request->role
        ];
        $user = new User();
        $user->numberId = $request->input('numberId');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        if ($user->save()) {
            return redirect(route('registertion'))->with("success", "تم تسجيل المستخدم بنجاح");
        } else {
            $userExists = User::where('numberId',  $user->numberId)->exists();
            return redirect(route('registertion'))->with("error", "المستخدم مسجل مسبقا");
        }
    }
    // public function datacustumerPost(Request $request)
    // {
    //     $request->validate([
    //         'CustumerName' => 'required',
    //         'numberId' => 'required|unique:users',
    //         'WaterTypeSubscription' => 'required',
    //         'LandVoucherNumber' => 'required',
    //         'PieceOfLandNumber' => 'required',
    //         'neighborhood' => 'required',
    //         'note'=>'nullable()',
    //         'mobileNumber' => 'required',
    //         'firstWitness' => 'required',
    //         'secondWitness' => 'required',
    //         'exportDate'=>'nullable()',
    //     ]);

    //     // استخراج البيانات التي تم إدخالها من الطلب
    //     $customerData = $request->only([
    //         'CustumerName',
    //         'numberId',
    //         'WaterTypeSubscription',
    //         'LandVoucherNumber',
    //         'PieceOfLandNumber',
    //         'neighborhood',
    //         'note',
    //         'mobileNumber',
    //         'firstWitness',
    //         'secondWitness',
    //         'exportDate',
    //     ]);

    //     // حفظ بيانات العميل في قاعدة البيانات
    //     $customer = new Customer();
    //     $customer->fill($customerData);
    //     if ($customer->save()) {
    //         return redirect(route('index'))->with("success", "تم تسجيل الزبون بنجاح");
    //     } else {
    //         $userExists = Customer::where('numberId', $customer->numberId)->exists();
    //         return redirect(route('index'))->with("error", "فشل التسجيل، تأكد من البيانات المدخلة");
    //     }
    // }

    public function datacustumerPost(Request $request)
    {
        $validatedData = $request->validate([
            'CustumerName' => 'required|unique:dataCustumer',
            'numberId' => 'required|unique:dataCustumer',
            'WaterTypeSubscription' => 'required',
            'LandVoucherNumber' => 'required',
            'PieceOfLandNumber' => 'required',
            'neighborhood' => 'required',
            'note' => 'nullable',
            'mobileNumber' => 'required',
            'firstWitness' => 'required',
            'secondWitness' => 'required',
            'exportDate' => 'required'
        ]);

        $dataCustumer = new Customer();
        $dataCustumer->CustumerName = $validatedData['CustumerName'];
        $dataCustumer->numberId = $validatedData['numberId'];
        $dataCustumer->WaterTypeSubscription = $validatedData['WaterTypeSubscription'];
        $dataCustumer->LandVoucherNumber = $validatedData['LandVoucherNumber'];
        $dataCustumer->PieceOfLandNumber = $validatedData['PieceOfLandNumber'];
        $dataCustumer->neighborhood = $validatedData['neighborhood'];
        $dataCustumer->note = $validatedData['note'];
        $dataCustumer->mobileNumber = $validatedData['mobileNumber'];
        $dataCustumer->firstWitness = $validatedData['firstWitness'];
        $dataCustumer->secondWitness = $validatedData['secondWitness'];
        $dataCustumer->exportDate = $validatedData['exportDate'];
        $dataCustumer->save();

        return redirect()->back()->with('success', 'تم إضافة بيانات العميل بنجاح.');
    }
    // /////////////////////////
    function loginPost(Request $request)
    {
        $request->validate([
            'numberId' => 'required|exists:users',
            'password' => 'required'
        ]);

        $user = User::where('numberId', $request->input('numberId'))->first();
        if ($user || password_verify($request->input('password'), $user->password)) {
            auth()->login($user);
            session(['username' => $user->username]);
            // return redirect(route('login'))->with("success",  $user->password);
            return redirect(route('index'))->with("success", $user->username);
        } else {
            return redirect(route('login'))->with("error", "تفاصيل تسجيل الدخول غير صحيحة.");
        }
    }

    // function logoutPost(Request $request)
    // {        // We Must Include The Auth Facade Here
    //     Auth::logout();
    //     // or this
    //     auth()->logout(); // The auth() helper method is global , we done have to include Auth Facade if we use the helper method
    // }
    // function userloginPost(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required|unique:users'
    //     ]);

    //     $user = User::where('numberId', $request->input('numberId'))->first();
    // }



}
