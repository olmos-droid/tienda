<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['title','synopsis','type','genere','duration','year','price','image','file'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['created_at','updated_at',];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        //
    ];
    // protected $guarded =[];

    public function scopeTitle($query, $param)
    {
        return $query->where('title', 'like', $param);
    }
    public function scopeSynopsis($query, $param)
    {
        return $query->where('synopsis', 'like', $param);
    }
    public function scopeDuration($query, $param)
    {
        return $query->where('duration', 'like', $param);
    }
    public function scopeYear($query, $param)
    {
        return $query->where('year', 'like', $param);
    }
    public function scopeType($query, $param)
    {
        if ($param != 2) {
            return $query->where('type', $param);
        }
    }
}
