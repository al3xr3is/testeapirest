<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anunciante extends Model
{
    protected $table = 'anunciantes';

    protected $fillable = ['nome', 'contato', 'tipo'];

    public function pecas(){
        return $this->hasMany(Peca::class);
    }

    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
}
