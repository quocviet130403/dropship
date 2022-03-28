<?php

namespace App\Http\Controllers;

use App\Repository\Pages\PageRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PageRepositoryInterface $pageRepositoryInterface)
    {
        //
        $listPages = $pageRepositoryInterface->getAll();
        $data = [
            'listPages' => $listPages
        ];
        return view('admin.pages.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PageRepositoryInterface $pageRepositoryInterface)
    {
        //
        $data = $request->input();
        $data = Arr::except($data, ['_token']);
        $pageRepositoryInterface->addOrUpdate($data);
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
    public function edit($id, PageRepositoryInterface $pageRepositoryInterface)
    {
        //
        $page = $pageRepositoryInterface->getById($id);
        $data = [
            'page' => $page
        ];
        return view('admin.pages.create',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, PageRepositoryInterface $pageRepositoryInterface)
    {
        //
        $data = $request->input();
        $data = Arr::except($data, ['_token','_method']);
        $pageRepositoryInterface->updateById($id,$data);
        return back()->with('update',true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, PageRepositoryInterface $pageRepositoryInterface)
    {
        //
        $pageRepositoryInterface->deleteById($id);
        return back()->with('delete',true);
    }
}
