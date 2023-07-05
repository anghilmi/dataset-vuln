<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Customers';
        $data['q'] = $request->get('q');
        $data['customers'] = Customer::where('kode_name', 'like', '%' . $data['q'] . '%')->get();
        return view('admin.index', $data);
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        Customer::create($request->except(['_token','submit']));
        return redirect()->route('customer.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $data['title'] = 'Add Customer';
    //     return view('admin.create', $data);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     // $request->validate([
    //     //     'kode_name' => 'required',
    //     //     'name_gejala' => 'required',
    //     // ]);

    //     // $customer = new Customer();
    //     // $customer->KODE
    //     // $customer->save();
    //     Customer::create($request->except(['_token','submit']));
    //     return redirect('/customer')->with('success', 'Customer added successfully');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $data['title'] = 'Edit Data Gejala';
        $data['customer'] = $customer;
        return view('admin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'kode_name' => 'required',
            'name_gejala' => 'required',
        ]);

        $customer->kode_name = $request->kode_name;
        $customer->name_gejala = $request->name_gejala;
        $customer->save();
        return redirect('/customer')->with('success', 'Data Gejala updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/customer')->with('success', 'Data Gejala deleted successfully');
    }
}