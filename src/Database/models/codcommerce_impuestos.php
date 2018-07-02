<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class codcommerce_impuestos extends Model
{
    use SoftDeletes;
    protected $table = "codcommerce_impuestos";
    protected $fillable = ['codcommerce_impuestos_nombre', 'codcommerce_impuestos_valor'];