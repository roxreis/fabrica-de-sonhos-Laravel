@extends('layouts.template')

@section('titulo')
Oferta individual
@endsection



@section('conteudo')
  
    <section class="p-3 container sectionOfertaIndivid">
       
       
        <div id="containerOfertaIndivid">       
            <figure class="ofertaIndivid">
                <span class="trs next"></span>
                <span class="trs prev"></span>
        @foreach($produtos as $produto)
            @if($produto->image3)
                <div id="slider">
                    <a href="#" class="trs img-fluid"><img id="imgOfertaIndivid" src="{{asset('storage/'.$produto->image1)}}" alt="Imagem 1" /></a>
                    <a href="#" class="trs img-fluid"><img id="imgOfertaIndivid" src="{{asset('storage/'.$produto->image2)}}" alt="Imagem 2" /></a>
                    <a href="#" class="trs img-fluid"><img id="imgOfertaIndivid" src="{{asset('storage/'.$produto->image3)}}" alt="Imagem 3" /></a>
                </div>
            
            @else
                <div id="slider">
                    <a href="#" class="trs img-fluid"><img id="imgOfertaIndivid" src="{{asset('storage/'.$produto->image1)}}" alt="Imagem 1" /></a>
                    <a href="#" class="trs img-fluid"><img id="imgOfertaIndivid" src="{{asset('storage/'.$produto->image2)}}" alt="Imagem 2" /></a>
                </div>
            @endif
                <figcaption></figcaption>
            </figure>
                   
                 
            
                    <!-- informacoes oferta -->
            <div class="row col-xl-6 col-lg-12 col-sm-12 d-flex flex-column justify-content-center align-items-center" 
            style="color: #202284;">
                <h1 class="font-weight-bold text-center titleOfertaIndivid"> {{$produto->nomeProduct}}</h1><br>
                <h2 class=" text-center" > {{$produto->descProduct}}</h2>
                <h5 class="card-text font-weight-bold text-center">Preço: R$ {{$produto->priceProduct}},00 + frete</h5><br>
                <h5 class="card-text font-weight-bold text-center" style="color: #202284;">Link para compra abaixo!</h5>
                <a class="card-text linkCompra" target="_blank" href="{{$produto->linkProduct}}">*Clique aqui</a><br>
                <p id="notaOferta">*Você será redirecionado para pagina de formulário do Google</p>
            </div>
        @endforeach        
      
        </div> 
    </section>

        <!-- botão voltar -->
        <div class="container text-center mt-5 mb-5">
            <!-- botao voltar -->
            <a href='/'><button class='font-weight-bold btn encontreBotao'>Voltar</button></a>
        </div>


@endsection