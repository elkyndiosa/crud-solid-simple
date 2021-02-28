<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, HasUuid;    
    protected $fillable = [
        'uuid','user_id','title','editorial','year','number',
    ];
    protected $hidden = [
        'id'
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
