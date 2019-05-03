<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = ['title', 'content'];

    public function user(){
        $this->belongsTo(User::class, 'user_id');
    }
}
