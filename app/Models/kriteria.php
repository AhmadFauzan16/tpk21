<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kriteria extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tb_kriteria';
    protected $fillable = ['deleted_at'];
}
