<?php

namespace App\Http\Controllers\Produtos;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    private $service;
    private $category;

    public function __construct(Service $service, Category $category)
    {
        $this->service = $service;
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = $this->service
            ->orderBy('name', 'asc')->get();
        return view('pages.produtos.servicos.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->category->all();
        return view('pages.produtos.servicos.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $service = $this->service;

        $service->name = $request->name;
        $service->category_id = $request->category_id;
        $service->description = $request->description;
        $service->amount = $request->amount;
        $service->amount_min = $request->amount_min;
        $service->deadline_deal = $request->deadline_deal;
        $service->deadline_real = $request->deadline_real;
        $service->save();

        return redirect()->route('painel.servicos.index')
            ->with('success','Serviço cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $service = $this->service->where('url', $url)->first();
        return view('pages.produtos.servicos.show', compact('service'));
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
