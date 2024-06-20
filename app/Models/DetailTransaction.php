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

    function stuff() {
        return $this->hasOne(Category::class, 'id', 'id_stuff');
    }

    function transaction() {
        return $this->hasMany(DetailTransaction::class, 'nota', 'nota');
    }
}
