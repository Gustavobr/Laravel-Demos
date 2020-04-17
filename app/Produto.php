<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
        protected $table = 'produtos';

        public $timestamps = true;

        protected $fillable = [
            'nome', 'descricao', 'preco', 'quantidade'

        ];


      
}
