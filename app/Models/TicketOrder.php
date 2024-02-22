<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Orderdetail;
use App\Models\Suatchieu;

class TicketOrder extends Model
{
    use HasFactory;
    protected $table = 'dondatve';
    public $timestamps = false;
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     **/
    public function ve(): \Illuminate\Database\Eloquent\Relations\hasOne
    {
        return $this->hasOne(Orderdetail::class, 'id_ve', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     **/
    public function suatChieu(): \Illuminate\Database\Eloquent\Relations\hasOne
    {
        return $this->hasOne(Suatchieu::class, 'id', 'suatchieu_id');
    }
}
