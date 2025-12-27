<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Guru extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'guru';

    protected $fillable = [
        'name',
        'slug',
        'kelas_id',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
