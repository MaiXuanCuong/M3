@extends('app')

 

@section('content')

   <h3 class="h3">Product List</h3>

   <div class="row">

       @forelse($products as $product)

           <div class="col-md-3 col-sm-6">

               <div class="product-grid">

                   <div class="product-image">

                       <a href="#">

                           <img class="pic-1" src="{{ asset('storage/' . $product->image) }}">

                       </a>

                       <ul class="social">

                           <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>

                           <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>

                           <li><a href="{{ route('add-to-cart', $product->id) }}" data-tip="Add to Cart"><i

                                       class="fa fa-shopping-cart"></i></a></li>

                       </ul>

                       <span class="product-new-label">Sale</span>

                       <span class="product-discount-label">20%</span>

                   </div>

                   <ul class="rating">

                       <li class="fa fa-star"></li>

                       <li class="fa fa-star"></li>

                       <li class="fa fa-star"></li>

                       <li class="fa fa-star"></li>

                       <li class="fa fa-star disable"></li>

                   </ul>

                   <div class="product-content">

                       <h3 class="title"><a href="#">{{ $product->name }}</a></h3>

                       <div class="price">$16.00

                           <span>$20.00</span>

                       </div>

                       {{-- <a class="add-to-cart" href="{{ route('cart.addToCart', $product->id) }}">+ Add To Cart</a> --}}
                       <a class="add-to-cart" href="{{ route('add-to-cart', $product->id) }}">+ Add To Cart</a>

                   </div>

               </div>

           </div>

       @empty

           <p>{{ "Không có sản phẩm nào" }}</p>

       @endforelse

   </div>

 

@endsection