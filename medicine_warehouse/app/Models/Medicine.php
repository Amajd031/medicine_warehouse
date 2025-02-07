<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'scientific_name', 'trade_name', 'classification', 'Company_name_id', 'available_quantity', 'expiry_date', 'price',
    ];

    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }

    public function CompanyOfMedicine()
    {
        return $this->belongsTo(CompanyOfMedicine::class);
    }

}
