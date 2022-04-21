<?php

namespace App\Http\Controllers;

use App\Repository\Categories\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        //
        $categories = $categoryRepositoryInterface->getAll();
        $data = [
            'categories' => $categories
        ];
        return view('admin.categories.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        //
        $categories = $categoryRepositoryInterface->getAll();
        $data = [
            'categories' => $categories
        ];
        return view('admin.categories.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        //
        $data = $request->input();
        $data = Arr::except($data, ['_token']);
        $data['gender'] = implode(',',$data['gender']);
        $categoryRepositoryInterface->addOrUpdate($data);
        return back()->with('status',true);
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
    public function edit($id,CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        //
        $categories = $categoryRepositoryInterface->getAll();
        $category = $categoryRepositoryInterface->getById($id);
        $data = [
            'categories' => $categories,
            'category' => $category
        ];
        return view('admin.categories.create',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        //
        $data = $request->input();
        $data = Arr::except($data, ['_token','_method']);
        $data['gender'] = implode(',',$data['gender']);
        $categoryRepositoryInterface->updateById($id,$data);
        return back()->with('update',true);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        $categoryRepositoryInterface->deleteById($id);
        return back()->with('delete',true);
    }
}
