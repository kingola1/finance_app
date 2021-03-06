<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayerType extends Model
{
    use HasFactory;

    public function payer()
    {
        return $this->belongsTo(Payer::class);
    }
}
