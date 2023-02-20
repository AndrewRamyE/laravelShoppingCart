<section class="h-100 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                        <h6 class="mb-0 text-muted">{{ Cart::count() }} items</h6>
                                    </div>
                                    <hr class="my-4">
                                    @if($cartItems)
                                    @foreach ($cartItems as $item)

                                    <div wire:key="{{ $item['id'] }}" class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="{{ $item['image'] }}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-black mb-0">{{ $item['name'] }}</h6>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button class="btn  px-2"  wire:click="removeFromCart({{ $item['id'] }})">
                                                -
                                            </button>

                                            <input id="form1" min="0" name="quantity" value="{{ $item['quantity'] }}" type="number" class="form-control form-control-sm" />

                                            <button class="btn  px-2"  wire:click="AddToCart({{ $item['id'] }})">
                                                +
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0">${{$item['price'] * $item['quantity']  }}</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                        <h1>No items</h1>
                                    @endif



                                    <hr class="my-4">

                                    <div class="pt-5">
                                        <span><button class="btn btn-danger" wire:click='emptyCart'>Empty Cart</button></span>
                                        <span class="mb-0">
                                            <a href="{{ route('home') }}" class="btn btn-secondary">Back to shop</a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
