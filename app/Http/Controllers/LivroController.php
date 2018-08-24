<?php

  namespace ecommerce\HTTP\Controllers;
  use Illuminate\Http\Request;
  use ecommerce\Livro;

  class LivroController{

    public function salvar(Request $request){

      $params = $request->except('imagem');

      //Do image upload
      if($request->hasFile('imagem') && $request->file('imagem')->isValid()){

        $fileName = $params["titulo"].".".$request->imagem->extension();

        $params['imagem'] = "";

        $upload = $request->imagem->storeAs('livros', $fileName);
        if($upload){
            $params['imagem'] = $fileName;
        }
      }

      $livro = new Livro($params);
      $livro->save();

      return redirect('/livros')->withInput($request->only('titulo'));

    }

    public function consultar(){

      $livros = Livro::all();

      return view('listar_livros')->with('livros', $livros);

    }

  }

?>
