<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class codcommerce_tipo_prod extends Model
{
    use SoftDeletes;
    protected $table = "codcommerce_tipo_prod";
    protected $fillable = ['codcommerce_tipo_prod_nombre', 'codcommerce_product_id'];