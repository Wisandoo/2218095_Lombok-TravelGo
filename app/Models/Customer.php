<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id_customers';
    public $incrementing = true;
    protected $fillable = ['nama', 'alamat', 'jenis_kelamin', 'deskripsi', 'gambar'];
    public $timestamps = false;
}
