<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $table = 'pecas';

    protected $fillable = ['name', 'description', 'users_id'];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
