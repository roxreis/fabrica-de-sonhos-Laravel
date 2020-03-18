<?php

namespace App\Http\Controllers;
use App\Feedback;
use Illuminate\Http\Request;


class FeedbackController extends Controller
{
   public function armazenaFeedback(Request $request){

                        
              
                $feedback = new Feedback(); 
            if($feedback != null){ 
                $feedback->feedback = $request->input('feedback');
                $feedback->emailFeedback = $request->input('emailFeedback');
                $feedback->save();
    
                return redirect()
                                ->route('home')
                                ->with('sucess','Feedback enviado com sucesso!'); 
               
            }else{        
                return redirect()
                ->route('home')
                ->with('danger','Formulario não preenchido corretamente!'); 
            }
        
   }


   public function deletaFeedback($id)
   {
       Feedback::where('id',$id)->delete();
       return redirect('/adm');
       
   }
   
}
