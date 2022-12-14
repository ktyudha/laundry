<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Paket;
use App\Models\Promo;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $paket = Paket::id();
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::all();
        $pakets = Paket::all();
        // $category = Category::all(['pakaian']);
        return view('admin.order.create', compact('categories', 'pakets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'category_id' => 'required',
            'paket_id' => 'required',
            'jumlah' => 'required',
        ]);

        $category = Category::find($request->category_id);
        $price = 0;

        $price = $request->jumlah * $category['price'];

        Order::create([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'category_id' => $request->category_id,
            'paket_id' => $request->paket_id,
            'status' => $request->status,
            'jumlah' => $request->jumlah,
            'sumofprice' => $request['sumofprice'] = $price,
        ]);
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $categories = Category::all();
        $pakets = Paket::all();
        return view('admin.order.edit', compact('order', 'categories', 'pakets'));
        return redirect()->route('order.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'name' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'category_id' => 'required',
            'paket_id' => 'required',
            'jumlah' => 'required',
        ]);
        $category = Category::find($request->category_id);
        $price = 0;

        $price = $request->jumlah * $category['price'];

        $values = [
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'category_id' => $request->category_id,
            'paket_id' => $request->paket_id,
            'status' => $request->status,
            'jumlah' => $request->jumlah,
            'sumofprice' => $request['sumofprice'] = $price,
        ];
        $order->update($values);
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        Order::destroy($order->id);
        return redirect()->route('order.index');
    }
}
