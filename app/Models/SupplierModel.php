<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    protected $table = 'm_supplier';
    protected $primaryKey = 'supplier_id';

    protected $fillable = ['supplier_kode', 'nama_supplier', 'supplier_alamat'];
}