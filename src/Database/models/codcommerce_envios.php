<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class codcommerce_envios extends Model
{
    use SoftDeletes;
    protected $table = "codcommerce_envios";
    protected $fillable = ['codcommerce_envios_cod_pais', 'codcommerce_envios_pais', 'codcommerce_envios_valor_env', 'codcommerce_envios_empresatrans'];