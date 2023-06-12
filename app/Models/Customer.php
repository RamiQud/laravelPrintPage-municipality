<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'datacustumer';
    protected $fillable = [
        'CustumerName',
        'numberId',
        'WaterTypeSubscription',
        'LandVoucherNumber',
        'PieceOfLandNumber',
        'neighborhood',
        'note',
        'mobileNumber',
        'firstWitness',
        'secondWitness',
        'exportDate'
    ];
 



}
