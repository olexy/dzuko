 @extends('layouts.front')

 @section('content')

 <!-- =====  BANNER STRAT  ===== -->
 <div class="banner">
    <div class="main-banner owl-carousel">
        <div class="item"><a href="#"><img src="{{ asset('template/images/NG_W21_S3_BestOfTheRest_Phones-min-2-min.jpg') }}" alt="Main Banner" class="img-responsive" /></a></div>
        <div class="item"><a href="#"><img src="{{ asset('template/images/TV-Mania_desktop-min-2-min.jpg') }}" alt="Main Banner" class="img-responsive" /></a></div>
    </div>
</div>
    <!-- =====  BANNER END  ===== -->
    <!-- =====  SUB BANNER  STRAT ===== -->
    <div class="row">
        <div class="cms_banner mt_10">
            @foreach ($features as $feature )
                <div class="col-xs-6 col-sm-12 col-md-4 mt_20">
                    <div id="subbanner1" class="sub-hover"> <a href="#"><img src="{{ asset($feature->image) }}" alt="Sub Banner1" class="img-responsive img-thumbnail" style="width:50%; height: auto"></a>
                        <div class="bannertext">
                        {{ $feature->name }}
                        <p class="mt_10">Featured Product</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

        <!-- =====  SUB BANNER END  ===== -->
        <!-- =====  PRODUCT TAB  ===== -->
        <div id="product-tab" class="mt_40">
        <div class="heading-part mb_20 ">
            <h2 class="main_title">Home Electronics</h2>
        </div>
        <ul class="nav text-right">
            <li class="active"> <a href="#nArrivals" data-toggle="tab">New Arrivals</a> </li>
            <li><a href="#Bestsellers" data-toggle="tab">Bestsellers</a> </li>
            <li><a href="#Featured" data-toggle="tab">Featured</a> </li>
        </ul>
<div class="tab-content clearfix box">
    <div class="tab-pane active" id="nArrivals">
        <div class="nArrivals owl-carousel">
            @foreach ($products as $product)
                <div class="product-grid">
                    <div class="item">
                        <div class="product-thumb">
                            <div class="image product-imageblock"> <a href="{{ route('product.detail', $product->id) }}"> <img data-name="product_image" src="{{ asset($product->image) }}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{ asset($product->image) }}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                            <div class="caption product-detail text-left">
                                <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">{{ $product->name }}</a></h6>
                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                <span class="price"><span class="amount"><span class="currencySymbol">$</span>{{ $product->price }}</span>
                                </span>
                                <div class="button-group text-center">
                                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                                    <div class="add-to-cart"><a href="{{ route('quick-cart.add', $product->id)}}"><span>Add to cart</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
        </div>
        </div>
        <!-- =====  PRODUCT TAB  END ===== -->
        <!-- =====  SUB BANNER  STRAT ===== -->
        <div class="row">
        <div class="cms_banner mt_40 mb_50">
            <div class="col-xs-12">
            <div id="subbanner3" class="banner sub-hover"> <a href="#"><img src="{{ asset('template/images/sub3.jpg') }}" alt="Sub Banner3" class="img-responsive"></a> </div>
            </div>
        </div>
        </div>
        <!-- =====  SUB BANNER END  ===== -->
        <!-- =====  sale product  ===== -->
        <div id="sale-product">
        <div class="heading-part mb_20 ">
            <h2 class="main_title">Home Electronics</h2>
        </div>
        <div class="Specials owl-carousel">
            <div class="item product-layout product-list">
            <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{ asset('template/images/product/product8.jpg') }}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{ asset('template/images/product/product8.jpg') }}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-left">
                <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                </span>
                <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                <div class="timer mt_80">
                    <div class="days"></div>
                    <div class="hours"></div>
                    <div class="minutes"></div>
                    <div class="seconds"></div>
                </div>
                <div class="button-group text-center">
                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                </div>
                </div>
            </div>
            </div>
            <div class="item product-layout product-list">
            <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{ asset('template/images/product/product7.jpg') }}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{ asset('template/images/product/product7-1.jpg') }}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-left">
                <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                </span>
                <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                <div class="timer mt_80">
                    <div class="days"></div>
                    <div class="hours"></div>
                    <div class="minutes"></div>
                    <div class="seconds"></div>
                </div>
                <div class="button-group text-center">
                    <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                    <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                    <div class="compare"><a href="#"><span>Compare</span></a></div>
                    <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                </div>
                </div>
            </div>
            </div>
            <div class="item product-layout product-list">
            <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{ asset('template/images/product/product6.jpg') }}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{ asset('template/images/product/product6-1.jpg') }}" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-left">
                <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                </span>
                <p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                <div class="timer mt_80">
                    <div class="days"></div>
                    <div class="hours"></div>
                    <div class="minutes"></div>
                    <div class="seconds"></div>
                </div>
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
        <!-- =====  sale product end ===== -->
        <!-- =====  SUB BANNER  STRAT ===== -->
        <div class="row">
        <div class="cms_banner mt_60 mb_50">
            <div class="col-xs-12">
            <div id="subbanner4" class="banner sub-hover"> <a href="#"><img src="{{ asset('template/images/sub4.jpg') }}" alt="Sub Banner4" class="img-responsive"></a>
                <div class="bannertext"> </div>
            </div>
            </div>
        </div>
        </div>
        <!-- =====  SUB BANNER END  ===== -->
        <!-- =====  product ===== -->
        <div class="row">
        <div class="col-md-4">
            <div class="heading-part mb_20 ">
            <h2 class="main_title">Featured</h2>
            </div>
            <div id="featu-pro" class="owl-carousel">
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product5.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product5-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product1.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product1-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product3.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product3-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product4.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product4-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product5.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product5-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product6.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product6-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product7.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product7-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product8.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product8-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product8.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product8-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product9.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product9-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product10.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product10-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product1.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product1-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="heading-part mb_20 ">
            <h2 class="main_title">Bestseller</h2>
            </div>
            <div id="bests-pro" class="owl-carousel">
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product2.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product2-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product3.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product3-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product4.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product4-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product4.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product4-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product5.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product5-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product7.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product7-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product8.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product8-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product10.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product10-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product1.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product1-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product2.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="images/product/product2-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product2.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product2-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product3.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product3-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="heading-part mb_20 ">
            <h2 class="main_title">New Item’s</h2>
            </div>
            <div id="new-pro" class="owl-carousel">
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product4.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product4-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product5.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product5-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product6.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product6-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product7.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product7-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product8.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product8-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product9.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/') }}images/product/product9-1.jpg"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product10.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product10-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product1.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product1-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product2.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product2-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            <ul class="row ">
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product3.jpg') }}"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product3-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/mages/product/product4.jpg') }}i"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product4-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
                <li class="item product-layout-left mb_20">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                    <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/') }}images/product/product5.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('template/images/product/product5-1.jpg') }}"> </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                    <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                    </div>
                </div>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <!-- =====  product end  ===== -->
        <!-- =====  Blog ===== -->
        <div id="Blog" class="mt_40">
        <div class="heading-part mb_20 ">
            <h2 class="main_title">Latest from the Blog</h2>
        </div>
        <div class="blog-contain box">
            <div class="blog owl-carousel ">
            <div class="item">
                <div class="box-holder">
                <div class="thumb post-img"><a href="#"> <img src="{{ asset('template/images/blog/blog_img_01.jpg') }}" alt="HealthCare"> </a> </div>
                <div class="post-info mtb_20 ">
                    <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Unknown printer took a galley book.</a> </h6>
                    <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                    <div class="date-time">
                    <div class="day"> 11</div>
                    <div class="month">Aug</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="box-holder">
                <div class="thumb post-img"><a href="#"> <img src="{{ asset('template/images/blog/blog_img_02.jpg') }}" alt="HealthCare"> </a></div>
                <div class="post-info mtb_20 ">
                    <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Unknown printer took a galley book.</a> </h6>
                    <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                    <div class="date-time">
                    <div class="day"> 11</div>
                    <div class="month">Aug</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="box-holder">
                <div class="thumb post-img"><a href="#"> <img src="{{ asset('template/images/blog/blog_img_03.jpg') }}" alt="HealthCare"> </a></div>
                <div class="post-info mtb_20 ">
                    <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Unknown printer took a galley book.</a> </h6>
                    <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                    <div class="date-time">
                    <div class="day"> 11</div>
                    <div class="month">Aug</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="box-holder">
                <div class="thumb post-img"><a href="#"> <img src="{{ asset('template/images/blog/blog_img_04.jpg') }}" alt="HealthCare"> </a></div>
                <div class="post-info mtb_20 ">
                    <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Unknown printer took a galley book.</a> </h6>
                    <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                    <div class="date-time">
                    <div class="day"> 11</div>
                    <div class="month">Aug</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="box-holder">
                <div class="thumb post-img"><a href="#"> <img src="{{ asset('template/images/blog/blog_img_05.jpg') }}" alt="HealthCare"> </a></div>
                <div class="post-info mtb_20 ">
                    <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Unknown printer took a galley book.</a> </h6>
                    <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                    <div class="date-time">
                    <div class="day"> 11</div>
                    <div class="month">Aug</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <div class="box-holder">
                <div class="thumb post-img"><a href="#"> <img src="{{ asset('template/') }}images/blog/blog_img_06.jpg" alt="HealthCare"> </a></div>
                <div class="post-info mtb_20 ">
                    <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Unknown printer took a galley book.</a> </h6>
                    <p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
                    <div class="date-time">
                    <div class="day"> 11</div>
                    <div class="month">Aug</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- =====  Blog end ===== -->
        </div>
    </div>
    </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->

 @endsection
