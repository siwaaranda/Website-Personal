<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Supplier extends Model
{
    protected $table = "supplier";
	protected $primaryKey = 'SupplierID';
    public $timestamps = false;
}