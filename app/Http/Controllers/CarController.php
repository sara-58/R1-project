<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common;
use App\Models\Car;
use App\Models\Category;

class CarController extends Controller
{
    use Common;
    private $columns = [
        'carTitle',
        'carImage',
        'luggages',
        'doors',
        'passengers',
        'price',
        'category_id',
        'description',
        'carPublished',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view('dashboard.carList', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','categoryName')->get();
        return view('admin.addCar', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'carTitle' => 'required|string|max:255',
            'carImage' => 'required|mimes:png,jpg,jpeg|max:2048',
            'luggages' => 'required|integer',
            'doors' => 'required|integer',
            'passengers' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string',
        ]);

        $data['carPublished'] = isset($request['carPublished']);
        $data['carImage'] = $this->uploadFile($request->carImage, 'assets\images');
        $data['category_id'] = $request['category_id'];

        Car::create($data);

        return 'done';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Category::withCount('cars')->select('id', 'categoryName')->get();
        $car = Car::findOrFail($id);

        return view('single', compact('car', 'categories'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::select('id', 'categoryName')->get();
        $car = Car::findOrFail($id);
        return view('admin.editCar', compact('car'), compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'carTitle' => 'required|string|max:255',
            'carImage' => 'required|mimes:png,jpg,jpeg|max:2048',
            'luggages' => 'required|integer',
            'doors' => 'required|integer',
            'passengers' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string',
        ]);

        $data['carPublished'] = isset($request['carPublished']);

        if (isset($request->carImage)) {
            $data['carImage'] = $this->uploadFile($request->carImage, 'assets\images');
        }

        Car::where('id',$id)->update($data);
        return redirect()->route('cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
        return redirect()->route('cars');
    }
}
