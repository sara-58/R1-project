<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common;
use App\Models\Category;
use App\Models\Car;

class CategoryController extends Controller
{
    use Common;
    private $columns =[
        'categoryName',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view('dashboard.categoryList', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'categoryName' => 'required|string|max:255',
        ]);

        Category::create($data);

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
        $category = Category::findOrFail($id);
        return view('admin.editCategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'categoryName' => 'required|string|max:255',
        ]);

        Category::where('id', $id)->update($data);

        return redirect()->route('category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $carsCount = Car::where('category_id', $id)->count();

        if ($carsCount > 0) {

            return ('Cannot delete category. There are cars associated with it.');
        }

        $category->delete();

        return redirect()->route('category');
    }

}
