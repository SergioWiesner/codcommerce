<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class codcommerce_producto extends Model
{
    use SoftDeletes;
    protected $table = "codcommerce_producto";
    protected $fillable = ['codcommerce_producto_nombre', 'codcommerce_producto_img'];