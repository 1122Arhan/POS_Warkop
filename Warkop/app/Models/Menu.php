<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Menu extends Model
{
    use HasFactory;

    public function stands(): HasOne
    {
        return $this->hasOne(Stand::class, 'id', 'stands_id');
    }

    public function kategoris(): HasOne
    {
        return $this->hasOne(Kategori::class, 'id', 'kategoris_id');
    }
}
