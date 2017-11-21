<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Account extends Model
{
    use Searchable;
    protected $fillable = ['name'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
