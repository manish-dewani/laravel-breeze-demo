<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class deliveryPartner extends Model
{
    use HasFactory;

    protected $fillable = [
        'deliverypartnername',
        'deliverypartneremail',
        'deliverypartnerphone',
        'deliverypartnercomment'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::Class);
    }
}
