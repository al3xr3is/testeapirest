<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = ['descricao', 'endereco', 'status', 'peca_id', 'anunciante_id'];
}
