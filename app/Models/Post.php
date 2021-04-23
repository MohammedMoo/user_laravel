<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'description' , 'user_id']; //// frome the doc (انت مسحوح لك تملي )

    public function user()
    {
        return $this->belongsTo(User::class); //  hasMany لو العكس اذا احتاجت اخلي اليوزر عندا كذا بوست و تتكتب في صفحة اليوزر
    }
}
