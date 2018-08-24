@extends('painelAdmin')


@section('contentAdmin')

<div class="container">
    <h3 class="text-center">Livros Cadastrados</h3>

    <div class="margin-top-lg d-flex justify-content-end">
      <a href="livros/cadastro" role="button" class="btn btn-primary btn-cadastro"><i class="fas fa-plus"></i>Cadastrar um livro</a>
    </div>
    <div class="book-list-row margin-top-m">
      @if(old('titulo'))
        <div class="alert alert-success">
          <strong>Sucesso!</strong> O livro {{old('titulo')}} foi cadastrado</strong>
        </div>
      @endif
      <div class="d-flex d-flex flex-wrap">
        @foreach ($livros as $l)
          <a class="card" style="width: 12rem;" href="#">
              @if($l->imagem == NULL)
                <img class="card-img-top" src="{{url('storage/livros/blank.png')}}" alt="titulo do livro">
              @else
                <img class="card-img-top" src="{{url('storage/livros/'.$l->imagem)}}" alt="{{$l->titulo}}">
              @endif
              <div cllass="card-body">
                  <h5 class="card-title text-center margin-top-sm"><?= $l->titulo ?></h5>
                  <h6 class="text-center">R$ 12,50</h6>
                  <p class="card-text text-center">{{$l->edicao}}º Edição</p>
              </div>
          </a>
       @endforeach
      </div>
    </div>
</div>

@endsection
