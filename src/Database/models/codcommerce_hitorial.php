<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class codcommerce_hitorial extends Model
{
    use SoftDeletes;
    protected $table = "codcommerce_hitorial";
    protected $fillable = ['codcommerce_hitorial_id_user', 'codcommerce_hitorial_direccion', 'codcommerce_hitorial_valor_total', 'codcommerce_hitorial_envios', 'codcommerce_hitoria_emprea_env'];