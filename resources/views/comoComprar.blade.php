@extends('layouts.template')

@section('titulo')
Como Comprar?
@endsection



@section('conteudo')

    <section class="h-auto d-flex justify-content-center align-items-center">
        <div class="card  comoComprar">
                <div class="card-header text-white text-center " style="background-color:#202283;">
                    <h4>Orientações para compra! &#128578</h4>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0" >
                     
                       
                            <p  class="font-weight-bold">Na página inicial, quando você clicar no botão ver mais:</p>
                            <img src="/img/ver-mais.png" alt="imagem de botão ver mais"><br><br>

                            <p class="font-weight-bold">Você verá a oferta com mais detalhes e também um link para compra, ex:</p>
                            <img class="img-fluid"src="/img/ofertaIndividualExemplo.png" alt="exemplo de como comprar"><br><br>
                            <p class="font-weight-bold">Ao clicar você será redirecionado para um formulario do google, ai é so seguir as demais instruções!</p><br>

                            <p >Qualquer dúvida, clique lá em cima em <strong>"Fale Conosco"</strong> e entre em contato.</p>


                           
                        </p>
                       
                    </blockquote>
                </div>
            </div>    
    </section>





@endsection
