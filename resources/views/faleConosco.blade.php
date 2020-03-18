@extends('layouts.template')

@section('titulo')
Fale Conosco
@endsection

@section('conteudo')

    <section id="sectionFaleConosco">
            <div class="card containerFaleConosco">
                    <div class="card-header text-white text-center align-items-center"style="background-color: #242684;">
                        <h4>Fale Conosco</h4>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0" >
                            <div class="faleConosco">
            <!-- <h1>Fale Conosco</h1> -->
                                <img src="/img/faleconosco.png" alt="">
                            </div>
                            <div class="contatos">
                                <h4>Email:</h4> <h4 class="font-weight-bold"> sac.fabricadesonhos@hotmail.com</h4>
                                <h4> Instagram: </h4> <h4 class="font-weight-bold"> @fbcdesonhos</h4>
                            </div>
                        </blockquote>
                    </div>
            </div>    
    </section>

@endsection