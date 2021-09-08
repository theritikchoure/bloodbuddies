<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Donor extends Model
{
    public function requisitions()
    {
        return $this->belongsToMany(Requisition::class);
    }
    use HasFactory;
}
