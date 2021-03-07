<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pool extends Model
{
    use HasFactory;

    protected $table = 'polls';
    protected $fillable = ['id', 'title', 'description', 'deadline', 'created_by'];

    public function user()
    {
      return $this->belongsTo(User::class, 'created_by');
    }

    public function choices() {
      return $this->hasMany(Choice::class);
    }

    public function votes() {
        return $this->hasMany(Votes::class);
    }

}
