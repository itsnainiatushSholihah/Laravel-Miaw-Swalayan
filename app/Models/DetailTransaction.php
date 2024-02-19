<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;

    protected $table = 'detailtransactions';

    protected $primaryKey = 'id';

    protected $keyType = 'integer';

    protected $fillable = [
        'id',
        'nota',
        'id_stuff',
        'count',
        'price',
        'discount',
    ];
}
