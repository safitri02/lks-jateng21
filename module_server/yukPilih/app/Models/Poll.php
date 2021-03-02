<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $table = 'polls';
    protected $fillable = ['id', 'title', 'description', 'deadline', 'created_by'];

    public function getCreatorAttibute()
    {
        return $this->user->username;
    }

    public function user()
    {
      return $this->belongsTo(User::class, 'created_by');
    }

}
