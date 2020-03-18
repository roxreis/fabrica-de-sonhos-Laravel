<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Feedback;
use Auth;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        if(Auth::user()){
            $produtos = Product::all();
            $feedbacks = Feedback::all();
            return view('adm', ['produtos'=>$produtos], ['feedbacks'=>$feedbacks]);
            }else{
                return redirect()->route('login');
            }
                      

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
        
            $produto = new Product();           
            $produto->nomeProduct = $request->input('nomeProduct');
            $produto->descProduct = $request->input('descProduct');
            $produto->priceProduct = $request->input('priceProduct');
            $produto->quantProduct = $request->input('quantProduct');
            $produto->linkProduct = $request->input('linkProduct');
            $produto->image1 = $request->input('image1');
            $produto->image2 = $request->input('image2');
            $produto->image3 = $request->input('image3');
    
            if($request->hasFile('image1')){
                $produto->image1 = $request->image1->store('imagens');
            }
            if($request->hasFile('image2')){
                $produto->image2 = $request->image2->store('imagens');
            }
            if($request->hasFile('image3')){
                $produto->image3 = $request->image3->store('imagens');
            }
           
            $produto->save();
              
            return redirect()->route('product.index');
        

            
        
    }
               
       
      

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {            
            $produtos = Product::where('id', $id)->get();
            return view('ofertaIndividual')->with(['produtos'=>$produtos]);
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id=0)
    {
        $produtos = Product::find($id);
        
        if($produtos){
            return view('editarProduto')->with(["produtos"=>$produtos]);
        }
        

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
        $produto = Product::find($id);           
        $produto->nomeProduct = $request->input('nomeProduct');
        $produto->descProduct = $request->input('descProduct');
        $produto->priceProduct = $request->input('priceProduct');
        $produto->quantProduct = $request->input('quantProduct');
        $produto->linkProduct = $request->input('linkProduct');
        $produto->image1 = $request->input('image1');
        $produto->image2 = $request->input('image2');
        $produto->image3 = $request->input('image3');

        if($request->hasFile('image1')){
            $produto->image1 = $request->image1->store('imagens');
        }
        if($request->hasFile('image2')){
            $produto->image2 = $request->image2->store('imagens');
        }
        if($request->hasFile('image3')){
            $produto->image3 = $request->image3->store('imagens');
        }
       
        $produto->save();
          
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->route('product.index');
        
    }
    

}
