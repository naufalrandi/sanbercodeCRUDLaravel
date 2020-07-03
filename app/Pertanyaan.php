<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = [
        'judul', 'isi'
    ];

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }
}
