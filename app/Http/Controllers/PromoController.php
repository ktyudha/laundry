<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use app;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $promos = Promo::all();
        return view('admin.promo.index', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promo.create');
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
            'title' => 'required|max:255',
            'tagline' => 'required',
            'status' => 'required',
            'body' => 'required',
            'image_url' => 'mimes:jpg,png,jpeg|image',
        ]);

        $newName = '';

        if ($request->file('image_url')) {
            $extension = $request->file('image_url')->getClientOriginalExtension();
            $newName = Str::words($request->title, 2) . '-' . now()->timestamp . '.' . $extension;
            $request->file('image_url')->storeAs('images/promo', $newName);
        }

        Promo::create([
            'title' => $request->title,
            'tagline' => $request->tagline,
            'status' => $request->status,
            'body' => $request->body,
            'image_url' => $request['image_url'] = $newName
        ]);
        return redirect()->route('promo.index');
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
    public function edit(Promo $promo)
    {
        return view('admin.promo.edit', compact('promo'));
        return redirect()->route('promo.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promo $promo)
    {
        $request->validate([
            'title' => 'required|max:255',
            'tagline' => 'required',
            'status' => 'required',
            'body' => 'required',
            'image_url' => 'mimes:jpg,png,jpeg|image',
        ]);

        $newName = '';

        $values = [
            'title' => $request->title,
            'tagline' => $request->tagline,
            'status' => $request->status,
            'body' => $request->body,
        ];
        if ($request->file('image_url')) {
            if ($promo->image_url) {
                unlink('storage/images/' . $promo->image_url);
            }
            $extension = $request->file('image_url')->getClientOriginalExtension();
            $newName = Str::words($request->title, 2) . '-' . now()->timestamp . '.' . $extension;
            $request->file('image_url')->storeAs('images/promo', $newName);

            $values['image_url'] = $newName;
        }

        $promo->update($values);
        return redirect()->route('promo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promo $promo)
    {
        if ($promo->image_url) {
            unlink('storage/images/' . $promo->image_url);
        }
        Promo::destroy($promo->id);
        return redirect()->route('promo.index');
    }
}
