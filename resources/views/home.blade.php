@extends('layouts.template')

@section('titulo')
Home
@endsection



@section('conteudo')

<section class="secao1home">
       
    <div class="container bannerHome col-auto">

   
      
     
    </div>
</section >
<!-- <div id="separacao">

    </div> -->

    <section class="container secao2home">
        

    <div class="cardsHome">
        @foreach($produtos as $produto)
            <div class="card h-auto cardHome" >
            <img src="{{asset('storage/'.$produto->image1)}}" class="card-img-top imgCardHome" alt="$produto->image">
                <div class="card-body">
                    <h5 class="card-title">{{$produto->nomeProduct}}</h5>
                    <p class="card-text">{{$produto->descProduct}}</p>
                    <strong class="card-text">Preço R$ {{$produto->priceProduct}},00 + frete</strong><br><br>
                    <a href="{{route('product.show', $produto->id)}}" class="btn botao text-white">Ver mais</a>
                </div>
            </div>
        @endforeach
    </div>
    
    
        <div   id="sugestao" >
                
            <div id="capa-sugestao" class="form-group p-3 ">
                <form  action='/criarFeedback' method="post">
                @CSRF
                    <h3 class="text-center font-weight-bold text-white">Feedback :)</h3>
                    <div class="form-group">
                        <label for="validationTextarea"  class=" text-white">O que está achando do nosso site!?</label>
                        <textarea class="form-control col-sm-10 col-lg-6" name="feedback" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva sua sugestão"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class=" text-white">Seu Email</label>
                        <input type="email" class="form-control col-sm-8 col-lg-6"  name="emailFeedback" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>    
            </div>  
        </div>
       @if(session('sucess'))
            <div class="alert alert-success text-center w-50">
                <p>{{session('sucess')}}</p>
            </div>
        @endif
        @if(session('danger'))
            <div class="alert alert-danger text-center w-50">
                <p>{{session('danger')}}</p>
            </div>
        @endif

    </section>

@endsection

