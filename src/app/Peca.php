<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $table = 'pecas';

    protected $fillable = ['nome', 'descricao', 'preco', 'anunciante_id'];

    public function anunciantes(){
        return $this->belongsToMany(Anunciante::class);
    }

    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
}
