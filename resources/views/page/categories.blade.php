@extends('master')
@section('content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-4">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Men</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accessories</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="boxed-slider owl-carousel owl-carousel-lazy owl-theme owl-theme-light mb-2">
                    <div class="category-slide">
                        <div class="slide-bg owl-lazy"  data-src="assets/images/page-header-bg-2.jpg"></div><!-- End .slide-bg -->
                        <div class="boxed-category-banner mb-0 align-items-center">
                            <h1>Fashion</h1>
                            <img src="assets/images/page-header-img.png" alt="image">
                        </div><!-- End .page-header -->
                    </div><!-- End .home-slide -->

                    <div class="category-slide">
                        <div class="slide-bg owl-lazy"  data-src="assets/images/page-header-bg-2.jpg"></div><!-- End .slide-bg -->
                        <div class="boxed-category-banner mb-0 align-items-center">
                            <h1>Fashion</h1>
                            <img src="assets/images/page-header-img.png" alt="image">
                        </div><!-- End .page-header -->
                    </div><!-- End .home-slide -->
                </div><!-- End .home-slider -->

                <nav class="toolbox">
                    <div class="toolbox-left">
                        <div class="toolbox-item toolbox-sort">
                            <label>Sort By:</label>

                            <div class="select-custom">
                                <select name="orderby" class="form-control">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div><!-- End .select-custom -->

                            <a href="#" class="sorter-btn" title="Set Ascending Direction"><span class="sr-only">Set Ascending Direction</span></a>
                        </div><!-- End .toolbox-item -->
                    </div><!-- End .toolbox-left -->

                    <div class="toolbox-item toolbox-show">
                        <label>Show:</label>

                        <div class="select-custom">
                            <select name="count" class="form-control">
                                <option value="9">9 Products</option>
                                <option value="18">18 Products</option>
                                <option value="27">27 Products</option>
                            </select>
                        </div><!-- End .select-custom -->
                    </div><!-- End .toolbox-item -->

                    <div class="layout-modes">
                        <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                            <i class="icon-mode-grid"></i>
                        </a>
                        <a href="category-list.html" class="layout-btn btn-list" title="List">
                            <i class="icon-mode-list"></i>
                        </a>
                    </div><!-- End .layout-modes -->
                </nav>

                <div class="row row-sm">
                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/product-1.jpg" alt="product">
                                    <img src="assets/images/products/product-1-2.jpg" class="hover-image" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                                <span class="product-label label-sale">-20%</span>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Fleece Jacket</a>
                                </h2>
                                <div class="price-box">
                                    <span class="old-price">$90</span>
                                    <span class="product-price">$70</span>
                                </div><!-- End .price-box -->

                                <div class="product-details-inner">
                                    <div class="product-action">
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details-inner -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/product-2.jpg" alt="product">
                                    <img src="assets/images/products/product-2-2.jpg" class="hover-image" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Ray Ban 5228</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$33.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-details-inner">
                                    <div class="product-action">
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details-inner -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/product-3.jpg" alt="product">
                                    <img src="assets/images/products/product-3-2.jpg" class="hover-image" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                                <span class="product-label label-hot">Hot</span>
                                <span class="product-label label-sale">-20%</span>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Woman Highheels</a>
                                </h2>
                                <div class="price-box">
                                    <span class="old-price">$50.00</span>
                                    <span class="product-price">$45.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-details-inner">
                                    <div class="product-action">
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details-inner -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/product-4.jpg" alt="product">
                                    <img src="assets/images/products/product-4-2.jpg" class="hover-image" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                                <span class="product-label label-sale">-20%</span>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Training Shoes</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$70</span>
                                </div><!-- End .price-box -->

                                <div class="product-details-inner">
                                    <div class="product-action">
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details-inner -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/product-5.jpg" alt="product">
                                    <img src="assets/images/products/product-5-2.jpg" class="hover-image" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">EyeGlasses</a>
                                </h2>
                                <div class="price-box">
                                    <span class="old-price">$75.00</span>
                                    <span class="product-price">$55.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-details-inner">
                                    <div class="product-action">
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details-inner -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/product-6.jpg" alt="product">
                                    <img src="assets/images/products/product-6-2.jpg" class="hover-image" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                                <span class="product-label label-sale">-30%</span>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Men Glasses</a>
                                </h2>
                                <div class="price-box">
                                    <span class="old-price">$35.00</span>
                                    <span class="product-price">$25.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-details-inner">
                                    <div class="product-action">
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details-inner -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/product-7.jpg" alt="product">
                                    <img src="assets/images/products/product-7-2.jpg" class="hover-image" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Prescription Glasses</a>
                                </h2>
                                <div class="price-box">
                                    <span class="old-price">$90</span>
                                    <span class="product-price">$70</span>
                                </div><!-- End .price-box -->

                                <div class="product-details-inner">
                                    <div class="product-action">
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details-inner -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/product-8.jpg" alt="product">
                                    <img src="assets/images/products/product-8-2.jpg" class="hover-image" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                                <span class="product-label label-hot">Hot</span>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Leather Jacket</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$45.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-details-inner">
                                    <div class="product-action">
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details-inner -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="assets/images/products/product-9.jpg" alt="product">
                                    <img src="assets/images/products/product-9-2.jpg" class="hover-image" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><span>Quick View</span></a>
                                <span class="product-label label-sale">-20%</span>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">Ruffle Gown</a>
                                </h2>
                                <div class="price-box">
                                    <span class="old-price">$50.00</span>
                                    <span class="product-price">$45.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-details-inner">
                                    <div class="product-action">
                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details-inner -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->

                <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label>Show:</label>

                        <div class="select-custom">
                            <select name="count" class="form-control">
                                <option value="9">9 Products</option>
                                <option value="18">18 Products</option>
                                <option value="27">27 Products</option>
                            </select>
                        </div><!-- End .select-custom -->
                    </div><!-- End .toolbox-item -->

                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .col-lg-9 -->

            <aside class="sidebar-shop col-lg-3 order-lg-first">
                <div class="sidebar-wrapper">
                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-1" role="button" aria-expanded="true" aria-controls="widget-body-1">Fashion</a>
                        </h3>

                        <div class="collapse show" id="widget-body-1">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Men</a></li>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Price</a>
                        </h3>

                        <div class="collapse show" id="widget-body-2">
                            <div class="widget-body">
                                <form action="#">
                                    <div class="price-slider-wrapper">
                                        <div id="price-slider"></div><!-- End #price-slider -->
                                    </div><!-- End .price-slider-wrapper -->

                                    <div class="filter-price-action">
                                        <button type="submit" class="btn btn-primary">Filter</button>

                                        <div class="filter-price-text">
                                            Price:
                                            <span id="filter-price-range"></span>
                                        </div><!-- End .filter-price-text -->
                                    </div><!-- End .filter-price-action -->
                                </form>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Size</a>
                        </h3>

                        <div class="collapse show" id="widget-body-3">
                            <div class="widget-body">
                                <ul class="config-size-list">
                                    <li class="active"><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">2XL</a></li>
                                    <li><a href="#">3XL</a></li>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Brand</a>
                        </h3>

                        <div class="collapse show" id="widget-body-4">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li><a href="#">Adidas <span>18</span></a></li>
                                    <li><a href="#">Camel <span>22</span></a></li>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true" aria-controls="widget-body-6">Color</a>
                        </h3>

                        <div class="collapse show" id="widget-body-6">
                            <div class="widget-body">
                                <ul class="config-swatch-list">
                                    <li>
                                        <a href="#" style="background-color: #4090d5;"></a>
                                    </li>
                                    <li class="active">
                                        <a href="#" style="background-color: #f5494a;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #fca309;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #11426b;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #f0f0f0;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #3fd5c9;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #979c1c;"></a>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #7d5a3c;"></a>
                                    </li>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->

                    <div class="widget widget-featured">
                        <h3 class="widget-title">Featured Proucts</h3>

                        <div class="widget-body">
                            <div class="owl-carousel widget-featured-products">
                                <div class="featured-col">
                                    <div class="product product-sm">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/product-10.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">Papell Gown</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">$45.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div><!-- End .product -->

                                    <div class="product product-sm">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/product-11.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">Masrinna Ankle</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$60.00</span>
                                                <span class="product-price">$45.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div><!-- End .product -->

                                    <div class="product product-sm">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/product-12.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">Crown Vintage</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">$50.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div><!-- End .product -->
                                </div><!-- End .featured-col -->

                                <div class="featured-col">
                                    <div class="product product-sm">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/product-4.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">Training Shoes</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$50.00</span>
                                                <span class="product-price">$35.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div><!-- End .product -->

                                    <div class="product product-sm">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/product-5.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">EyeGlasses</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">$29.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div><!-- End .product -->

                                    <div class="product product-sm">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/product-3.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">Woman Highheels</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">$40.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div><!-- End .product -->
                                </div><!-- End .featured-col -->
                            </div><!-- End .widget-featured-slider -->
                        </div><!-- End .widget-body -->
                    </div><!-- End .widget -->

                    <div class="widget widget-block">
                        <h3 class="widget-title">Custom HTML Block</h3>
                        <h5>This is a custom sub-title.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi. </p>
                    </div><!-- End .widget -->
                </div><!-- End .sidebar-wrapper -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- margin -->
</main><!-- End .main -->
@endsection
