<?php

namespace App\Http\Livewire\Product;

use App\Models\ProductSale;

use Livewire\Component;
use Illuminate\Http\Request;
use Auth;
class ProductSales extends Component
{
    // public ProductSale $productSale;
    public $showSuccesNotification  = false;

    public $showDemoNotification = false;
    public $buyer_name = '';
    public $buyer_address = '';
    public $buyer_city = '';
    public $buyer_district = '';
    public $buyer_phone = '';
    public $crop = '';
    public $crop_variety = '';
    public $crop_total_unite = '';
    public $price = '';
    public $total_price = '';
    protected $rules = [
        'buyer_name' => 'required|max:200|min:3',
        'buyer_address' => 'max:200',
        'buyer_city' => 'max:200',
        'buyer_district' => 'max:200',
        'crop' => 'required',
        'crop_variety' => 'required',
        'crop_total_unite' => 'required',
        'total_price' => 'required',
    ];

    public function mount() { 
        $this->user = auth()->user();
        // info($this->user);
    }

    public function productSale(Request $req) {
        info('This is some useful information.');
        
        if(env('IS_DEMO')) {
           $this->showDemoNotification = true;
        } else {
             $id = Auth::user()->id;
             
            $productSale = ProductSale::create([
                'buyer_name' => $this->buyer_name,
                'buyer_address' => $this->buyer_address,
                'buyer_city' => $this->buyer_city,
                'buyer_district' => $this->buyer_district,
                'buyer_phone' => $this->buyer_phone,
                'crop' => $this->crop,
                'crop_variety' => $this->crop_variety,
                'crop_total_unite' => $this->crop_total_unite,
                'price' => $this->price,
                'total_price' => $this->total_price,
                'sale_person_id' => $id
            ]);
            // info($sale);
            $this->showSuccesNotification = true;
        }
    }
    public function render()
    {
        return view('livewire.product.product-sale');
    }
}
