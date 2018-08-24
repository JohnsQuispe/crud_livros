@extends("painelAdmin")

@section("contentAdmin")

<div class="container">
    <h3 class="text-center">Cadastro de Livro</h3>
    <div class="d-flex justify-content-center margin-top-m">
      <form class="col-6" method="POST" action="salvar" enctype="multipart/form-data">
        <div class="form-group">
          <label>Titulo</label>
          <input type="text" name="titulo" class="form-control" placeholder="Titulo do Livro">
        </div>
        <div class="form-group">
          <label>Autor(a)</label>
          <input type="text" name="autor" class="form-control" placeholder="Autor">
        </div>
        <div class="form-group">
          <label>Edição</label>
          <input type="text" name="edicao" class="form-control" placeholder="Somente Números">
        </div>
        <div class="form-group">
          <label>Editora</label>
          <select name="editora" class="form-control" id="editoras">
            <option value="">Selecione a editora</option>
          </select>
        </div>
        <div class="form-group">
          <label>ISBN</label>
          <input type="text" name="isbn" class="form-control" placeholder="ISBN">
        </div><div class="form-group">
          <label>Código de Barras</label>
          <input type="text" name="codBarras" class="form-control" placeholder="Sem traços ou pontos">
        </div>
        <input type="hidden"
        name="_token" value="{{{ csrf_token() }}}" />
        <div class="custom-file">
          <label>Foto do Livro</label>
          <input type="file" class="custom-file-input" name="imagem" id="validatedCustomFile">
          <label class="custom-file-label" for="validatedCustomFile">Imagem da livro...</label>
          <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
        <button class="btn btn-primary col-12 margin-top-m">Cadastrar</button>
      </form>
    </div>
</div>

@stop

@section('javascript')

  <script>

    $(document).ready(function(){

      function handleResponse(data){
        $.each(data, function(i, editora){
          $('#editoras').append(`<option value="${editora.id}">${editora.nome}</option>`);
        });

      }

      function arrumar(data){

        console.log(data);

      }

      $.ajax({
        url: '{{ substr(Request::url(), 0, strlen(Request::url()) - strlen(Request::path()))}}fill/editora'
      }).done(handleResponse);

      $.ajax({
        url: '{{ substr(Request::url(), 0, strlen(Request::url()) - strlen(Request::path()))}}fill/autor'
      }).done(arrumar);

    });

    /*
    $("selector").load("<page>", function(){

    });

    */

  </script>

@endsection
