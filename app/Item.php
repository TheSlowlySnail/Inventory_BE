<?php
/**
 * Created by PhpStorm.
 * User: Helge
 * Date: 22.04.2018
 * Time: 14:03
 */


namespace App;
use Illuminate\Database\Eloquent\Model;
class Item extends Model
{
    public $table = "items";
    public $primaryKey="barcode";
}