@extends('layouts.front')

@section('content')

<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
        <!-- =====  BANNER STRAT  ===== -->
        <div class="breadcrumb ptb_20">
          <h1>New LCDScreen...</h1>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="category_page.html">Products</a></li>
            <li class="active">New LCDS...</li>
          </ul>
        </div>
        <!-- =====  BREADCRUMB END===== -->
        <div class="row mt_10 ">
          <div class="col-md-6">
            <div><a class="thumbnails"> <img data-name="product_image" src="{{ asset($product->image) }}" alt="" /></a></div>
            <div id="product-thumbnail" class="owl-carousel">
              <div class="item">
                <div class="image-additional"><a class="thumbnail" href="{{ asset($product->image) }}" data-fancybox="group1"> <img src="{{ asset($product->image) }}" alt="" /></a></div>
              </div>
              <div class="item">
                <div class="image-additional"><a class="thumbnail" href="images/product/product2.jpg" data-fancybox="group1"> <img src="{{ asset($product->image) }}" alt="" /></a></div>
              </div>
              <div class="item">
                <div class="image-additional"><a class="thumbnail" href="{{ asset($product->image) }}" data-fancybox="group1"> <img src="{{ asset($product->image) }}" alt="" /></a></div>
              </div>
              <div class="item">
                <div class="image-additional"><a class="thumbnail" href="{{ asset($product->image) }}" data-fancybox="group1"> <img src="{{ asset($product->image) }}" alt="" /></a></div>
              </div>
              <div class="item">
                <div class="image-additional"><a class="thumbnail" href="{{ asset($product->image) }}" data-fancybox="group1"> <img src="{{ asset($product->image) }}" alt="" /></a></div>
              </div>
              <div class="item">
                <div class="image-additional"><a class="thumbnail" href="{{ asset($product->image) }}" data-fancybox="group1"> <img src="{{ asset($product->image) }}" alt="" /></a></div>
              </div>
              <div class="item">
                <div class="image-additional"><a class="thumbnail" href="{{ asset($product->image) }}" data-fancybox="group1"> <img src="{{ asset($product->image) }}" alt="" /></a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 prodetail caption product-thumb">
            <h4 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{ $product->name }}</a></h4>
            <div class="rating">
              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
            </div>
            <span class="price mb_20"><span class="amount"><span class="currencySymbol">$</span>{{ $product->price}}</span>
            </span>
            <hr>
            <ul class="list-unstyled product_info mtb_20">
              <li>
                <label>Brand:</label>
                <span> <a href="#">Apple</a></span></li>
              <li>
                <label>Product Code:</label>
                <span> product 20</span></li>
              <li>
                <label>Availability:</label>
                <span> In Stock</span></li>
            </ul>
            <hr>
            <p class="product-desc mtb_30"> {{ $product->description }}</p>
            <div id="product">
              <div class="form-group">
                <div class="row">
                  <div class="Sort-by col-md-6">
                    <label>Sort by</label>
                    <select name="product_size" id="select-by-size" class="selectpicker form-control">
                      <option>Small</option>
                      <option>Medium</option>
                      <option>Large</option>
                    </select>
                  </div>
                  <div class="Color col-md-6">
                    <label>Color</label>
                    <select name="product_color" id="select-by-color" class="selectpicker form-control">
                      <option>Blue</option>
                      <option>Green</option>
                      <option>Orange</option>
                      <option>White</option>
                    </select>
                  </div>
                </div>
              </div>
             <form action="{{ route('cart.add') }}" method="POST">
                {{ csrf_field() }}

                <div class="qty mt_30 form-group2">
                    <label>Qty</label>
                    <input name="qty" min="1" type="number">
                    <input name="prod_id" value={{ $product->id }} type="hidden">
                </div>
                <div class="button-group mt_30">
                    <div class="add-to-cart">
                        <button type="submit">
                            <span>Add to cart</span>
                        </button>
                    </div>
            </form>
                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="exTab5" class="mtb_30">
              <ul class="nav nav-tabs">
                <li class="active"> <a href="#1c" data-toggle="tab">Overview</a> </li>
                <li><a href="#2c" data-toggle="tab">Reviews (1)</a> </li>
                <li><a href="#3c" data-toggle="tab">Solution</a> </li>
              </ul>
              <div class="tab-content mt_20">
                <div class="tab-pane active" id="1c">
                  <p>CLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.</p>
                </div>
                <div class="tab-pane" id="2c">
                  <form class="form-horizontal">
                    <div id="review"></div>
                    <h4 class="mt_20 mb_30">Write a review</h4>
                    <div class="form-group required">
                      <div class="col-sm-12">
                        <label class="control-label" for="input-name">Your Name</label>
                        <input name="name" value="" id="input-name" class="form-control" type="text">
                      </div>
                    </div>
                    <div class="form-group required">
                      <div class="col-sm-12">
                        <label class="control-label" for="input-review">Your Review</label>
                        <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                        <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                      </div>
                    </div>
                    <div class="form-group required">
                      <div class="col-md-6">
                        <label class="control-label">Rating</label>
                        <div class="rates"><span>Bad</span>
                          <input name="rating" value="1" type="radio">
                          <input name="rating" value="2" type="radio">
                          <input name="rating" value="3" type="radio">
                          <input name="rating" value="4" type="radio">
                          <input name="rating" value="5" type="radio">
                          <span>Good</span></div>
                      </div>
                      <div class="col-md-6">
                        <div class="buttons pull-right">
                          <button class="btn btn-md btn-link">Continue</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" id="3c">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.applied clearfix to the tab-content to rid of the gap between the tab and the content</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="heading-part text-center">
              <h2 class="main_title mt_50">Related Products</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="product-layout  product-grid related-pro  owl-carousel mb_50">
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-left">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                  <div class="rating">
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                  </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                  </span>
                  <div class="button-group text-center">
                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-left">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                  <div class="rating">
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                  </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                  </span>
                  <div class="button-group text-center">
                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product4-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-left">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                  <div class="rating">
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                  </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                  </span>
                  <div class="button-group text-center">
                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-left">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                  <div class="rating">
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                  </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                  </span>
                  <div class="button-group text-center">
                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product7-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-left">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                  <div class="rating">
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                  </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                  </span>
                  <div class="button-group text-center">
                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-left">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                  <div class="rating">
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                  </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                  </span>
                  <div class="button-group text-center">
                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="brand_carouse" class="ptb_30 text-center">
      <div class="type-01">
        <div class="heading-part mb_20 ">
          <h2 class="main_title">Brand Logo</h2>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="brand owl-carousel ptb_20">
              <div class="item text-center"> <a href="#"><img src="images/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
              <div class="item text-center"> <a href="#"><img src="images/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
              <div class="item text-center"> <a href="#"><img src="images/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
              <div class="item text-center"> <a href="#"><img src="images/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
              <div class="item text-center"> <a href="#"><img src="images/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
              <div class="item text-center"> <a href="#"><img src="images/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
              <div class="item text-center"> <a href="#"><img src="images/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
              <div class="item text-center"> <a href="#"><img src="images/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
              <div class="item text-center"> <a href="#"><img src="images/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- =====  CONTAINER END  ===== -->

@endsection
