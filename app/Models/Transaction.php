<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';

    protected $primaryKey = 'nota';

    protected $keyType = 'string';

    protected $fillable = [
        'nota',
        'id_user',
        'id_customer',
        'date',
    ];
}
