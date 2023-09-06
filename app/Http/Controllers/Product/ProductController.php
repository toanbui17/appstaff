<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//usre models product
use App\Models\product;


class ProductController extends Controller
{

    //khai bao bien de khoi tao phuong thuc trong contruct
    private $products;
    //khoi tao construct de khoi tao doi tuong
    public function __construct() {
        $this->products = new product();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //ten trang
        $title = 'product';

        //lay het data produc
        $data = $this->products->getAllProduct();

        return view('product.index',['data'=>$data, 'title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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

    //show request
    public function showRequest(Request $request){
        //request name product
        //dd($request);
        $name = $request->input('name_pd');
       // dd($product);
        die;
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
