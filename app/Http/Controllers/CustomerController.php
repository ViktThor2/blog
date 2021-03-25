<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
      return view('customer.create');
    }

    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required|max:80',
        'email' => 'required|max:80|email|unique:customers,email',
        'password' => 'required|confirmed'
      ]);

      $customer = new Customer;
      $customer->setData($request->all());
      $customer->save();

      return redirect()->route('index');
    }

    public function login()
    {
      return view('customer.login');
    }

    public function loginStore(Request $request)
    {
      $this->validate($request, [
        'email'     =>  'required|email',
        'password'  =>  'required'
      ]);

      $data = $request->only('email', 'password');
      \Auth::guard('customer')->attempt($data);
      $customer = \Auth::guard('customer')->user();
      dd($customer);

      if( \Auth::guard('customer')->check() ) {
        return redirect()->route('index');
      } else { session()->flash(
          'message', 'Hibás email cím vagy jelszó');
        return redirect()->back();
      }

    }

}
