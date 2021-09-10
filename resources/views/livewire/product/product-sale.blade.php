<div>
    <div class="container-fluid">
        <div class="page-header min-height-100 border-radius-xl mt-4"
            style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/bruce-mars.jpg" alt="..." class="w-100 border-radius-lg shadow-sm">
                        
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ __('Product Sale') }}
                        </h5>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Product Information') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">

                @if ($showDemoNotification)
                    <div wire:model="showDemoNotification" class="mt-3  alert alert-primary alert-dismissible fade show"
                        role="alert">
                        <span class="alert-text text-white">
                            {{ __('You are in a demo version, you can\'t update the profile.') }}</span>
                        <button wire:click="$set('showDemoNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                @if ($showSuccesNotification)
                    <div wire:model="showSuccesNotification"
                        class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span
                            class="alert-text text-white">{{ __('Your profile information have been successfuly saved!') }}</span>
                        <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                <form wire:submit.prevent="productSale" action="#" method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="buyer_name" class="form-control-label">{{ __('Full Name') }}</label>
                                <div class="@error('buyer_name')border border-danger rounded-3 @enderror">
                                    <input wire:model="buyer_name" class="form-control" type="text" placeholder="Name"
                                        id="buyer_name">
                                </div>
                                @error('buyer_name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="buyer_address" class="form-control-label">{{ __('Address') }}</label>
                                <div class="@error('buyer_address')border border-danger rounded-3 @enderror">
                                    <input wire:model="buyer_address" class="form-control" type="text"
                                        placeholder="Address" id="buyer_address">
                                </div>
                                @error('buyer_address') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="buyer_city" class="form-control-label">{{ __('City') }}</label>
                                <div class="@error('buyer_city')border border-danger rounded-3 @enderror">
                                    <input wire:model="buyer_city" class="form-control" type="text"
                                        placeholder="City" id="buyer_city">
                                </div>
                                @error('buyer_city') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="buyer_district" class="form-control-label">{{ __('District') }}</label>
                                <div class="@error('buyer_district') border border-danger rounded-3 @enderror">
                                    <input wire:model="buyer_district" class="form-control" type="text"
                                        placeholder="District" id="buyer_district">
                                </div>
                                @error('buyer_district') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="buyer_phone" class="form-control-label">{{ __('Phone') }}</label>
                                <div class="@error('buyer_phone')border border-danger rounded-3 @enderror">
                                    <input wire:model="buyer_phone" class="form-control" type="number"
                                        placeholder="03123456" id="buyer_phone">
                                </div>
                                @error('buyer_phone') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark mt-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="crop" class="form-control-label">{{ __('Crop') }}</label>
                                <div class="@error('crop')border border-danger rounded-3 @enderror">
                                    <input wire:model="crop" class="form-control" type="text"
                                        placeholder="Crop" id="crop">
                                </div>
                                @error('crop') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="crop_variety" class="form-control-label">{{ __('Variety') }}</label>
                                <div class="@error('crop_variety') border border-danger rounded-3 @enderror">
                                    <input wire:model="crop_variety" class="form-control" type="text"
                                        placeholder="Variety" id="crop_variety">
                                </div>
                                @error('crop_variety') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="crop_total_unite" class="form-control-label">{{ __('Total Unite') }}</label>
                                <div class="@error('crop_total_unite')border border-danger rounded-3 @enderror">
                                    <input wire:model="crop_total_unite" class="form-control" type="number"
                                        placeholder="Unite" id="crop_total_unite">
                                </div>
                                @error('crop_total_unite') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price" class="form-control-label">{{ __('Price(Per Unite)') }}</label>
                                <div class="@error('price') border border-danger rounded-3 @enderror">
                                    <input wire:model="price" class="form-control" type="number"
                                        placeholder="Price" id="price">
                                </div>
                                @error('price') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="total_price" class="form-control-label">{{ __('Total Price') }}</label>
                                <div class="@error('total_price')border border-danger rounded-3 @enderror">
                                    <input wire:model="total_price" class="form-control" type="number"
                                        placeholder="Total Price" id="total_price">
                                </div>
                                @error('total_price') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
