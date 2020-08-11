<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomer;
use App\Http\Requests\UpdateCustomer;
use App\Customer;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        return view('customer.index', ['customers' => Customer::all()]);
    }

    public function view($id){

        return view('customer.view',['customer' => Customer::findOrFail($id)]);
    }

    public function store(StoreCustomer $request){

        $customer = new Customer;

        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone1 = $request->phone1;
        $customer->phone2 = $request->phone2;

        $customer->save();

        return redirect()->back()->with('status', 'Cliente registrado');

    }

    public function update(UpdateCustomer $request){

        $customer = Customer::findOrFail($request->customerid);

        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone1 = $request->phone1;
        $customer->phone2 = $request->phone2;

        $customer->save();

        return redirect()->back()->with('status', 'Cliente actualizado');

    }

    public function destroy(Request $request){

        Customer::find($request->customerid)->delete();

        return redirect()->route('customer.index')->with('status','Cliente eliminado');

    }
}
