<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    public function donors()
    {
        return $this->belongsToMany(Donor::class);
    }
    use HasFactory;
}
