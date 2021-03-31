<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    public function ownedBy(User $user)
    {
        return $this->transactions->where('end_date_time', null)->contains('user_id', $user->id);
    }

    public function haveOwner(Car $car)
    {

    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }


}
