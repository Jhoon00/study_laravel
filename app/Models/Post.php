<?php

namespace App\Models;

use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id']; //화이트 리스트

    // protected $guarded = ['created_at']; //블랙 리스트

    public function comments() {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
