<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProductSale extends Model
{
    protected $fillable = ['buyer_name','buyer_address','buyer_city','buyer_district','buyer_phone','crop','crop_variety','crop_total_unite','price','total_price','sale_person_id'];
     protected $table = 'product_sales';
    use HasFactory, Notifiable;
}
