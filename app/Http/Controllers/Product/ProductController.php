<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//usre models product mvc
use App\Models\Product;

//use form request product
use App\Http\Requests\Admin\ProductRequest;


class ProductController extends Controller
{

    //khai bao bien de khoi tao phuong thuc trong contruct
    private $Products;
    //khoi tao construct de khoi tao doi tuong
    public function __construct() {
        $this->Products = new Product();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //ten trang
        $title = 'product';

        //lay het data produc
        $data = $this->Products->getAllProduct();

        return view('product.index',['data'=>$data,'title'=>$title]);
    }

    //select name product
    public function getName(Request $request){

        $title = 'produc '.$request->all()['name_pd'];

        $name = $request->all()['name_pd'];
        $dataName = $this->Products->getByName($name);
        return view('home.home_nameProduct',['title'=>$title,'dataName'=>$dataName]);
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
    /*
    public function store(Request $request)
    {
        //
        //validator
        $rules=[
            //khai bao roles
            'name_pd'=>'required',
            'quantity_pd'=>'required',
            'sold_pd'=>'required',
            'image_pd' => 'required|file|size:5120',
            'price_pd'=>'required|double:8.2',
            'describe_pd'=>'required',
            'created_at' => 'required|date_format:dd-mm-yyyy|min:10',
            'updated_at' => 'required|date_format:dd-mm-yyyy|min:10',
        ];
        
        $messages=[
            //khai bbao messages
            'requirred'=>'khong duoc de rong!',
            'file'=>'khong phai file anh',
            'double:8.2'=>'khong dung gia',
            'min:10'=>'nhap lai ngay thang'
        ];
    
        $request->validate($rules,$messages);
    }*/

    //foem validator
    public function productValidate(ProductRequest $request){

        //khong doc duoc validated date
        $data= $request->validated([
            'name_pd'=>['required'],
            'quantity_pd'=>['required'],
            'sold_pd'=>['required'],
            'image_pd' => ['required|file|size:5120'],
            'price_pd'=>['required|double:8.2'],
            'describe_pd'=>['required'],
            'created_at' => ['required|date_format:dd-mm-yyyy|min:10'],
            'updated_at' => ['required|date_format:dd-mm-yyyy|min:10'],
        ]);

        dd($data);
        die;

        $this->Products->addProduct($data);

        return redirect()->route('product');
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
    public function edit(string $id = '0')
    {
        ////ten trang
        $title = 'edit_product';
        if (!empty($id)) {
            $dataId = $this->Products->getById($id);
            //kiem tra con ton tai khong
            if (!empty($dataId[$id])) {
                $dataId = $dataId[$id];
            }else{
                return redirect()->route('product')->with('msg','san pham khong ton tai');
            }
        }else{    
            return redirect()->route('product')->with('msg','san pham khong ton tai');
        }
        //get add product
        return view('form.product.form_edit',['title'=>$title,'dataId'=>$dataId]);
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
