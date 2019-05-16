<?php

namespace dzuko\Http\Controllers;

use Validator;
use dzuko\Product;
use dzuko\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            return datatables()->of(Product::latest()->get())
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }


        return view('products.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name'          =>  'required',
            'price'         =>  'required',
            'description'   =>  'required',
            'category'      =>  'required',
            'image'         =>  'required|image|max:2048'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        // $image = $request->file('image');
        // $new_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images'), $new_name);

        $image = $request->image->store('products');

        $form_data = array(
            'name'              =>  $request->name,
            'price'             =>  $request->price,
            'description'       =>  $request->description,
            'category_id'       =>  $request->category,
            'image'             =>  'storage/'. $image
        );

        Product::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
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
        if(request()->ajax())
        {
            $data = Product::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

    }

    public function destroyer($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

    }

    public function updater(Request $request)
    {
        $image_url = $request->hidden_image;

        $form_data = '';

        if($request->hasFile('image'))
        {
            $rules = array(
                'name'          =>  'required',
                'price'         =>  'required',
                'description'   =>  'required',
                'category'      =>  'required',
                'image'         =>  'required|image|max:2048'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $image = $request->image->store('products');

            $form_data = array(
                'name'              =>  $request->name,
                'price'             =>  $request->price,
                'description'       =>  $request->description,
                'category_id'       =>  $request->category,
                'image'             =>  'storage/'. $image
            );

            unlink($image_url);
            // Storage::disk('public')->delete($image_url);
        }
        else
        {
            $rules = array(
                'name'          =>  'required',
                'price'         =>  'required',
                'description'   =>  'required',
                'category'      =>  'required',
            );

            $error = Validator::make($request->all(), $rules);

            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $form_data = array(
                'name'              =>  $request->name,
                'price'             =>  $request->price,
                'description'       =>  $request->description,
                'category_id'       =>  $request->category,
                'image'             =>  $image_url
            );
        }

        Product::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);
    }

}
