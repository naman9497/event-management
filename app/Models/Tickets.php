<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Events;

class Tickets extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_no', 'ticket_price' , 'ticket_id'
    ];

    public function events(){
        return $this->belongsToMany(Events::class);
    }
}
