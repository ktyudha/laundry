<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view('admin.carousel.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carousel.create');
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
            'name' => 'required|max:255',
            'status' => 'required',
            'image_url' => 'mimes:jpg,png,jpeg|image|max:1024',
        ]);

        $newName = '';

        if ($request->file('image_url')) {
            $extension = $request->file('image_url')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
            $request->file('image_url')->storeAs('images/carousel', $newName);
        }

        Carousel::create([
            'name' => $request->name,
            'status' => $request->status,
            'image_url' => $request['image_url'] = $newName
        ]);
        return redirect()->route('carousel.index');
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
    public function edit(Carousel $carousel)
    {
        return view('admin.carousel.edit', compact('carousel'));
        return redirect()->route('carousel.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {
        $request->validate([
            'name' => 'required|max:255',
            'status' => 'required',
            'image_url' => 'mimes:jpg,png,jpeg|image|max:1024',
        ]);

        $newName = '';

        $values = [
            'name' => $request->name,
            'status' => $request->status,
        ];
        if ($request->file('image_url')) {
            if ($carousel->image_url) {
                unlink('storage/images/carousel' . $carousel->image_url);
            }
            $extension = $request->file('image_url')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
            $request->file('image_url')->storeAs('images/carousel', $newName);

            $values['image_url'] = $newName;
        }

        $carousel->update($values);
        return redirect()->route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
        if ($carousel->image_url) {
            unlink('storage/images/carousel/' . $carousel->image_url);
        }
        carousel::destroy($carousel->id);
        return redirect()->route('carousel.index');
    }
}
