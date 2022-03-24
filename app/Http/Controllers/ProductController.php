<?php

namespace App\Http\Controllers;

use App\Repository\Categories\CategoryRepositoryInterface;
use App\Repository\Images\ImageRepositoryInterface;
use App\Repository\Products\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductRepositoryInterface $productRepositoryInterface)
    {
        //
        $listProducts = $productRepositoryInterface->getAll();
        $data = [
            'listProducts' => $listProducts
        ];
        return view('admin.products.index',$data);
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
        return view('admin.products.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ProductRepositoryInterface $productRepositoryInterface,ImageRepositoryInterface $imageRepositoryInterface)
    {
        //

        $data = $request->input();
        $data = Arr::except($data, ['_token','filepath']);
        $listProducts = $productRepositoryInterface->getAllName();
        $data['code'] = Str::random(8);
        if(!blank($listProducts)){
            foreach($listProducts as $item){
                if($item->product == $data['product']){
                    return back()->with('exist',true);
                }
            }
        }
        $productRepositoryInterface->addOrUpdate($data);
        $productId = getByProduct($data['product'])->id;
        $urlImage = convert_image($request->input('filepath'));
        if(is_array($urlImage)){
            foreach($urlImage as $image){
                $data = [
                    'image' => $image,
                    'product_id' => $productId
                ];
                $imageRepositoryInterface->addOrUpdate($data);
            }
            return back()->with('status',true);
        }else{
            $data = [
                'image' => $urlImage,
                'product_id' => $productId
            ];
            $imageRepositoryInterface->addOrUpdate($data);
            return back()->with('status',true);
        }
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
