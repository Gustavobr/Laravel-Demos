<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = 'estoque';

    protected $primaryKey = 'id_estoque';

    protected $fillable =  ['nome'];

    public $timestamps = true;

     public function Produtos(){

        return $this->hasMany('App\Produto', 'id', 'id_estoque');
    }


}
