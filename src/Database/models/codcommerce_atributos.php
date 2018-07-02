<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class codcommerce_atributos extends Model
{
    use SoftDeletes;
    protected $table = "codcommerce_atributos";
    protected $fillable = ['codcommerce_atributos_nombre'];
