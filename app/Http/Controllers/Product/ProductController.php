<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//usre models product mvc
use App\Models\Product;

use Carbon\Carbon;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //ten trang
        $title = 'product';

        //lay het data produc
        $data = Product::orderBy('created_at','desc')
        ->limit(10)
        ->get();

        return view('product.index',['data'=>$data,'title'=>$title]);
    }

    //select name product
    public function getName(Request $request){

        $title = 'produc '.$request->all()['key_word'];

        $name = $request->all()['key_word'];
        $dataName = Product::where('name_pd','like',"%$name%")->orderBy('created_at','desc')->get();
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
    public function store(Request $request)
    {

        $request->validate([
            'name_pd'           => 'required|unique:product',
            'quantity_pd'       => 'required',
            'sold_pd'           => 'required',
            'image_pd'          => 'required|image|mimes:jpg,bmp,png',
            'price_pd'          => 'required',
            'describe_pd'       => 'required',        
        ]);

        $filename = rand().'.'.$request->image_pd->extension();
        $request->image_pd->move(public_path('upload'),$filename);

        $product = new Product;

        $product->name_pd       = $request->name_pd;
        $product->quantity_pd   = $request->quantity_pd;
        $product->sold_pd       = $request->sold_pd;
        $product->image_pd      = $filename;
        $product->price_pd      = $request->price_pd;
        $product->describe_pd   = $request->describe_pd;


        $product->save();

        return redirect()->route('product');
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
    public function edit($id)
    {
        ////ten trang
        $title = 'edit_product';

        if (!empty($id)) {
            $dataId = Product::find($id);

            //get add product
            return view('form.product.form_edit',['title'=>$title,'dataId'=>$dataId]);

        }else{    
            return redirect()->route('product')->with('msg','san pham khong ton tai');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if(!empty($id)){

        
            $product = Product::find($id);
          
            $request->validate([
                'name_pd'           => 'required',
                'quantity_pd'       => 'required',
                'sold_pd'           => 'required',
                'image_pd'          => 'required|image|mimes:jpg,bmp,png',
                'price_pd'          => 'required',
                'describe_pd'       => 'required',
            ]);
  
            $image                  = $request->file('image_pd');
            $new_name               = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload'), $new_name);

            $product->name_pd       = $request->name_pd;
            $product->quantity_pd   = $request->quantity_pd;
            $product->sold_pd       = $request->sold_pd;
            $product->image_pd      = $new_name;
            $product->price_pd      = $request->price_pd;
            $product->describe_pd   = $request->describe_pd;
 
            $product->save();
            return redirect()->route('product');
        }else{
            return redirect()->route('product')->with('msg','san pham da xoa');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //xoa product
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product')->with('msg','san pham da xoa');
    }
    
}
