<?php

namespace ecommerce;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{

  protected $table = 'livros';

  protected $fillable = array("titulo","autor", "edicao", "editora", "isbn", "codBarras", "imagem");

  public function grupoPrecificacao(){
      return $this>hasOne('ecommerce\GrupoPrecificacao', 'id_grupo_precificacao');
  }

  public function editora(){
    return $this->hasOne('ecommerce\Editora');
  }

  public function autores(){
    return $this->belongsToMany('ecommerce\Autor', 'autores_livros', 'id_livro', 'id_autor');
  }

  public function categorias(){
    return $this->belongsToMany('ecommerce\Categoria', 'categorias_livros', 'id_livros', 'id_categoria');
  }

}
