<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Pembelian extends Model
{
    protected $table = "pembelian";
	protected $primaryKey = 'PembelianID';
    public $timestamps = false;
}