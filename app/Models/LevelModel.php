<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
    protected $table = 'm_level'; // Pastikan nama tabel sesuai dengan database
    protected $primaryKey = 'level_id'; // Pastikan primary key sesuai

}