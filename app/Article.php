<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'name', 'user_id',
    ];

    public function user()
    {
    	return $this->belongTo(User::class);
    }
}
