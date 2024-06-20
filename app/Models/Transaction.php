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

    public function customer() {
        return $this->hasOne(Customer::class, 'id', 'id_customer');
    }

    public function detail() {
        return $this->hasMany(DetailTransaction::class, 'nota', 'nota');
    }

    public function user() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
