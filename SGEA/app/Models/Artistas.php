<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artistas extends Model
{
    use HasFactory;
    protected $table="artistas";
    protected $primaryKey="id";
    public $timestamps=false;

    // protected function casts(): array {
    //     return[
    //         "id"=>'string'
            
    //     ];
    // }
}
