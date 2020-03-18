<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\Feedback;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewHome()
    {
        $produtos = Product::all();
        if($produtos){
        return view('home')->with(['produtos'=>$produtos]);
        }else{
            return view('home');
        }   
    }

    public function viewAdm()
    {
        if(Auth::user()){
        $produtos = Product::all();
        $feedbacks = Feedback::all();
        return view('adm', ['produtos'=>$produtos], ['feedbacks'=>$feedbacks]);
        }else{
            return redirect()->route('login');
        }
    // // }
    }
    
    public function viewComoComprar()
    {
       return view('comoComprar');
    }

    public function viewFaleConosco()
    {
       return view('faleConosco');
    }

    public function viewSobreNos()
    {
       return view('sobreNos');
    }
 


}
