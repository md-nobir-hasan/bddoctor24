<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use App\Services\Backend\CategoryService;
use App\Http\Requests\Backend\StoreCategoryRequest;
use App\Http\Requests\Backend\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function __construct(protected CategoryService $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['data'] = Category::orderBy('serial', 'desc')
                                ->paginate(10);
        $n['count'] = Category::all();
        return view('backend.pages.setup.category.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $n['serial'] = Category::count();
        return view('backend.pages.setup.category.create', $n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();
        $status = $this->service->store($data);

        //Redirection decission
        if($request->redirect == 'back'){
            $redirect_route = 'setup.category.index';
        }else{
            $redirect_route = 'setup.category.create';
        }

        if(!$status){
            return redirect()->route($redirect_route)->with('error', "Something went wrong");
        }
        return redirect()->route($redirect_route)->with('success', "$request->title is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $Category)
    {
        $n['datum'] = $Category;
        return view('backend.pages.setup.category.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $Category)
    {
        $data = $request->validated();
        $this->service->update($Category,$data);

        return redirect()->route('setup.category.index')->with('success', "$request->title is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $Category)
    {
        $title = $Category->title;
        $status = $this->service->delete($Category);

        if ($status) {
            request()->session()->flash('success', "$title successfully deleted");
        } else {
            request()->session()->flash('error', 'Error while deleting Categorys');
        }

        return back();
    }
}
