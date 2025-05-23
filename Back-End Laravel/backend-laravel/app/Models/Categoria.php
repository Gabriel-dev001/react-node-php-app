<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria'; 

    protected $fillable = [
        'nome'
    ];

    public $timestamps = false;

    
    public function filmes(){
        return $this->hasMany(Filme::class, 'categoria_id', 'id');
    }
}
