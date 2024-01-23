<?php

namespace App\Http\Controllers;

use App\Traits\Common;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    use Common;
    private $columns =[
        'testiName',
        'testiPosition',
        'content',
        'testiPublished',
        'testiImage',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $testimonials = Testimonial::get();
       return view('dashboard.testimonialList' , compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addTestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'testiName' => 'required|string|max:255',
            'testiPosition' => 'required|string|max:255',
            'content' => 'required|string',
            'testiImage' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        $data['testiPublished'] = isset($request['testiPublished']);
        $data['testiImage'] = $this->uploadFile($request->testiImage, 'assets\images');

        Testimonial::create($data);

        return 'done';
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
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.editTestimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'testiName' => 'required|string|max:255',
            'testiPosition' => 'required|string|max:255',
            'content' => 'required|string',
            'testiImage' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        $data['testiPublished'] = isset($request->published);

        if(isset($request->testiImage)){
            $data['testiImage'] = $this->uploadFile($request->testiImage, 'assets\images');
        }

        Testimonial::where('id',$id)->update($data);

        return redirect()->route('testimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id',$id)->delete();
        return redirect()->route('testimonials');
    }
}
