<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    protected $fillable = ['date','quarter', 'starting_point', 'end_point', 'surcon_number', 'name', 'status', 'no_of_pillars', 'plan_number', 'location', 'lga', 'amount', 'type', 'payment_mode'];
}
