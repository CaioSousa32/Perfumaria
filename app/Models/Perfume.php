<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'marca',
        'nome',
        'nota_oufativa',
        'validade',
    ];

    public function donoDoPerfume() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
