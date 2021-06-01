<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cbventa extends Model
{
    use HasFactory;
    protected $table='venta';
    protected $primaryKey = 'idzapato';
    protected $fillable =  array('calzado','marca', 'fcompra', 'tipopago', 'monto');
}
