<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = [
        'words', 'link','created_at'
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
