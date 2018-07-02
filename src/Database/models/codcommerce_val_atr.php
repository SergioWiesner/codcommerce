<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class codcommerce_val_atr extends Model
{
    use SoftDeletes;
    protected $table = "codcommerce_val_atr";
    protected $fillable = ['codcommerce_atributos_id', 'codcommerce_producto_id', 'codcommerce_valor', 'codcommerce_stock', 'codcommerce_imagen'];