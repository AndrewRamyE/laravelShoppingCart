<div class="container">
    <div class="row m-5">
        <div class="card" style="max-width: 500px">
            <img src="{{ $product->image }}" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">{{ $product->description }}</p>
              <p class="card-text">${{ $product->price }}</p>
              <button wire:click="AddToCart({{ $product->id }})" class="btn btn-primary">Add to cart</button>
            </div>
          </div>
        </div>
    </div>

</div>

