@extends('principal')

@section('content')

<nav class="sidebar position-fixed">
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item" href="#"><i class="material-icons">show_chart</i><p>Dashboard</p></a>
    <a class="list-group-item" href="/livros"><i class="material-icons">library_books</i><p>Livros</p></a>
    <a href="#" class="list-group-item" href="#"><i class="material-icons">settings</i><p>Parâmetros</p></a>
  </div>
</nav>

<div class="container content">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"></li>
    </ol>
    </nav>
  <div class="painel">
    @yield('contentAdmin')
  </div>
</div>


@endsection
