<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = ['description', 'status', 'adress', 'pecas_id', 'users_id'];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function pecas(){
        return $this->belongsToMany(Peca::class);
    }
}
