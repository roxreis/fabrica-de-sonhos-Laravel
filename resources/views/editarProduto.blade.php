@extends('layouts.template')

@section('titulo')
Editar Produto
@endsection

@section('conteudo')


        <section class="container sectionAdm justify-content-center">

            <div class="card row col-lg-8 col-md-4">
  
                <h5 class="card-header" style="background-color: #202284;color: #fff;">Editar de Produto</h5>
                    <form class="p-3" action="{{route('product.update', $produtos->id)}}" method="post" enctype="multipart/form-data" >
                    @CSRF
                    @method('PUT')
                    
                        <div class="form-group ">
                            <label for="">Nome Produto</label>
                            <input class="form-control" type="text" name="nomeProduct" id="" value="{{$produtos->nomeProduct}}">
                        </div>
                        <div class="form-group">
                            <label for="">Descrição</label>
                           <input class="form-control"  name="descProduct" value="{{$produtos->descProduct}}" id="" type="text"></input> 

    
                        </div>
                        <div class="form-group">
                            <label for="">Preço</label>
                            <input class="form-control col-md-7" type="number" value="{{$produtos->priceProduct}}" name="priceProduct" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Quantidade</label>
                            <input class="form-control col-md-7" type="number" value="{{$produtos->quantProduct}}" name="quantProduct" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input class="form-control"  name="linkProduct" value="{{$produtos->linkProduct}}" id="" type="url"></input> 
                        </div>
                        <div class="form-group">
                            <label for="">Foto Produto</label>
                            <img src="{{asset('storage/'.$produtos->image1)}}" alt="" style="widht:15vw;height:15vh">
                            <img src="{{asset('storage/'.$produtos->image2)}}" alt="" style="widht:15vw;height:15vh">
                            <img src="{{asset('storage/'.$produtos->image3)}}" alt="" style="widht:15vw;height:15vh">
                            <input class="form-control" type="file" name="image1"  id="">
                            <input class="form-control" type="file" name="image2"  id="">
                            <input class="form-control" type="file" name="image3"  id="">
                        </div>

                        <input type="submit" value="Editar Produto" class="btn btn-success">
                        <a href="/adm" class="btn btn-danger">Cancelar Edição</a>
                    
                    </form>
            </div>
        </section>


@endsection