@extends('layouts.template')

@section('titulo')
Adm
@endsection

@section('conteudo')

<section class="sectionAdm h-auto" >
       
    <div class="card col-md-9  overflow-auto mb-3">
        <table class="table table-sm table-striped table-bordered display dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;" onsubmit="confirm('Tem certeza que deseja excluir?')">
        {{ method_field('DELETE') }}>
            <thead>
                <tr style="color: #202284;">
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">LINK</th>
                    <th scope="col">IMAGEM1</th>
                    <th scope="col">IMAGEM2</th>
                    <th scope="col">IMAGEM3</th>
                    <th scope="col">EDITAR</th>
                </tr>
            </thead>
                <tbody>
                    @foreach($produtos as $produto)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$produto->nomeProduct}}</td>
                            <td>{{$produto->descProduct}}</td>
                            <td>R$ {{$produto->priceProduct}}</td>
                            <td>{{$produto->quantProduct}}</td>
                            <td><a href="{{$produto->linkProduct}}"></a></td>
                            <td><img src="{{asset('storage/'.$produto->image1)}}" alt="" style="widht:10vw;height:10vh"></td>
                            <td><img src="{{asset('storage/'.$produto->image2)}}" alt="" style="widht:10vw;height:10vh"></td>
                            <td><img src="{{asset('storage/'.$produto->image3)}}" alt="" style="widht:10vw;height:10vh"></td>
                            <td><a href="{{route('product.edit', $produto -> id)}}" class="btn btn-primary">Editar</a>
                                <form action="{{route('product.destroy', $produto -> id)}}" method="post">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Excluir</button>
                                </form></td>
                        </tr>
                        
                    @endforeach

                </tbody>
        </table>                        
    </div>     
        <div class="card col-md-3 mb-3">
  
            <h5 class="card-header" style="background-color: #202284;color: #fff;">Cadastro de Produto</h5>
            <div class="card-body">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form  action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                @CSRF
                
                    <div class="form-group">
                        <label for="">Nome Produto</label>
                        <input class="form-control" type="text" name="nomeProduct" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Descrição</label>
                       <input class="form-control"  name="descProduct" id="" type="text"></input> 
  
                    </div>
                    <div class="form-group">
                        <label for="">Preço</label>
                        <input class="form-control col-md-7" type="number" name="priceProduct" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Quantidade</label>
                        <input class="form-control col-md-7" type="number" name="quantProduct" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Link</label>
                        <input class="form-control"  name="linkProduct" id="" type="url"></input> 
                    </div>
                    <div class="form-group">
                        <label for="">Foto 1</label>
                        <input class="form-control" type="file" name="image1" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Foto 2</label>
                        <input class="form-control" type="file" name="image2" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Foto 3</label>
                        <input class="form-control" type="file" name="image3" id="">
                    </div>

                    <input type="submit" value="Cadastrar Produto" class="btn btn-success">
                
                 </form>
            </div>
        </div>
        <div class="card formCadastroUsuario ">
            <h5 class="card-header" style="background-color: #202284;color: #fff;">Cadastro de Usuario Adm</h5>
            <div class="card-body">
                <form  action="{{ route('register') }}" method="post">
                @CSRF
                
                    <div class="form-group">
                        <label for="">Nome Usuario</label>
                        <input class="form-control" type="text" name="name" id="" required autocomplete="name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="text" name="email" id="" 
                        autocomplete="email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Senha</label>
                        <input class="form-control col-md-7" type="password" name="password" id=""required
                        autocomplete="new-password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror   
                    </div>
                    <div class="form-group">
                            <label for="password-confirm" class="">{{ __('Confirma senha') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control col-md-7" name="password_confirmation" required autocomplete="new-password">
                            </div>
                    </div>
                    
                    <input type="submit" value="Cadastrar Usuario" class="btn btn-success">
                
                 </form>
            </div>
        </div>

        <div class="card col-lg-6" id="feedback">
           
                <h5 class="card-header text-center" style="background-color: #202284;color: #fff;">O que estão falando!</h5>
                @forelse($feedbacks as $feedback)
            <div class="overflow-auto">
                <div class="card p-2"> 
                    <h5>FEEDBACKS</h5>
                    <p>{{$feedback->feedback}}</p>
                    <h5>EMAIL</h5>
                    <P>{{$feedback->emailFeedback}}</P>
                    <a href="/feedback/deletar/{{$feedback->id}}" id="excluirFeedback" onclick="confirm('Tem certeza que deseja excluir?')"><button class="btn btn-danger"  type="submit" >Excluir</button></a>
                </div>    
                @empty
                    <h5 class="d-flex align-self-center p-3">Não ha feedback</h5>
                @endforelse
            </div>
           
        </div>

  
    
</section>

@endsection
