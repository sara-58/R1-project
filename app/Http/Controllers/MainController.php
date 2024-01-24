<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Car;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view('index', compact('cars'));
    }

    public function about()
    {
        return view('about');
    }

    public function testi()
    {
        $testimonials = Testimonial::get();
        return view('testimonial', compact('testimonials'));

    }
    public function listing()
    {
        $cars = Car::paginate(6);
        return view('listing', compact('cars'));
    }

    public function blog()
    {
        $cars = Car::paginate(6);
        return view('blog', compact('cars'));

    }

    public function single()
    {
        return view('single');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
