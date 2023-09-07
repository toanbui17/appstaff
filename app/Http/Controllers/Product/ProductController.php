<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//usre models product mvc
use App\Models\product;

//use form request product
use App\Http\Requests\Admin\ProductRequest;


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

    //select name product
    public function getName(Request $request){

        $name = $request->input();
        $dataName = $this->products->getByName($name);
        dd($name);
        die;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //ten trang
        $title = 'add_product';
        //get add product
        return view('form.product.form_add',['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    //     //validator
    //     $rules=[
    //         //khai bao roles
    //         'name_pd'=>'required',
    //         'quantity_pd'=>'required',
    //         'sold_pd'=>'required',
    //         'image_pd' => 'required|file|size:5120',
    //         'price_pd'=>'required|double:8.2',
    //         'describe_pd'=>'required',
    //         'created_at' => 'required|date_format:dd-mm-yyyy|min:10',
    //         'updated_at' => 'required|date_format:dd-mm-yyyy|min:10',
    //     ];
        
    //     $messages=[
    //         //khai bbao messages
    //         'requirred'=>'khong duoc de rong!',
    //         'file'=>'khong phai file anh',
    //         'double:8.2'=>'khong dung gia',
    //         'min:10'=>'nhap lai ngay thang'
    //     ];
    
    //     $request->validate($rules,$messages);
    // }

    //foem validator
    public function productvalidate(Request $request,ProductRequest $request_pd){
        $datapost = [
            'name_pd'=>$request->name_pd,
            'quantity_pd'=>$request->quantity_pd,
            'sold-pd'=>$request->sold_pd,
            'image_pd'=>$request->image_pd,
            'price_pd'=>$request->price_pd,
            'describe_pd'=>$request->describe_pd,
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at,
        ];

        $this->products->addProduct($datapost);
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
