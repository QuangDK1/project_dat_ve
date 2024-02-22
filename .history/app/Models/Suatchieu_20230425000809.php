<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuatChieu extends Model
{
    use HasFactory;
    protected $table = 'suatchieu';
    protected $primaryKey = "IDSuatChieu";
    protected $fillable = ['ThoiGian'];

}