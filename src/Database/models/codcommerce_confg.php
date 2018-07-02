<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class codcommerce_confg extends Model
{
    use SoftDeletes;
    protected $table = "codcommerce_confg";
    protected $fillable = ['idcodcommerce_confg_pais', 'idcodcommerce_confg_moneda', 'idcodcommerce_confg_med'];