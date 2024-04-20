<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObrasdeArte extends Model
{
    use HasFactory;
    protected $table = "obras_de_arte";
    protected $primaryKey = 'id';
    public $timestamps = false;
}
