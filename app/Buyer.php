<?php

namespace App;

use App\Trasnsaction;

class Buyer extends User
{
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
