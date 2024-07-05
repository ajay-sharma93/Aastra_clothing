@extends('Frontend_folder.app')
@section('content')
    <!-- catg header banner section -->

    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                    <div class="aa-product-catg-content">
                        <div class="aa-product-catg-head">
                            <div class="aa-product-catg-head-left">
                                <form action="" class="aa-sort-form">
                                    <label for="">Sort by</label>
                                    <select name="">
                                        <option value="1" selected="Default">Default</option>
                                        <option value="2">Name</option>
                                        <option value="3">Price</option>
                                        <option value="4">Date</option>
                                    </select>
                                </form>
                                <form action="" class="aa-show-form">
                                    <label for="">Show</label>
                                    <select name="">
                                        <option value="1" selected="12">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </form>
                            </div>
                            <div class="aa-product-catg-head-right">
                                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>


                        <div class="aa-product-catg-body">
                            @foreach ($product as $product)
                                <ul class="aa-product-catg">
                                    <!-- start single product item -->
                                    <li>

                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="{{ $product->Image }}"></a>
                                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add
                                                To
                                                Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a
                                                        href="#">{{ $product->ProductName }}</a></h4>
                                                <span class="aa-product-price">{{ $product->price }}</span>
                                                <p class="aa-product-descrip">{{ $product->Description }}</p>
                                            </figcaption>
                                        </figure>

                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Compare"><span class="fa fa-exchange"></span></a>
                                            <a href="{{ route('product') }}">

                                                <span class="fa fa-search">
                                                    <a href="{{ route('product') }}">

                                                </span>
                                            </a>
                                        </div>


                                    </li>
                                </ul>
                            @endforeach

                        </div>


                        <div class="aa-product-catg-pagination">
                            <nav>
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                    <aside class="aa-sidebar">
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Category</h3>
                            <ul class="aa-catg-nav">
                                <li><a href="{{ route('product') }}">Product</a></li>
                                <li><a href="">Women</a></li>
                                <li><a href="">Kids</a></li>
                                <li><a href="">Electornics</a></li>
                                <li><a href="">Sports</a></li>
                            </ul>
                        </div>
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Tags</h3>
                            <div class="tag-cloud">
                                <a href="#">Fashion</a>
                                <a href="#">Ecommerce</a>
                                <a href="#">Shop</a>
                                <a href="#">Hand Bag</a>
                                <a href="#">Laptop</a>
                                <a href="#">Head Phone</a>
                                <a href="#">Pen Drive</a>
                            </div>
                        </div>
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Shop By Price</h3>
                            <!-- price range -->
                            <div class="aa-sidebar-price-range">
                                <form action="">
                                    <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                    <span id="skip-value-lower" class="example-val">30.00</span>
                                    <span id="skip-value-upper" class="example-val">100.00</span>
                                    <button class="aa-filter-btn" type="submit">Filter</button>
                                </form>
                            </div>

                        </div>
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Shop By Color</h3>
                            <div class="aa-color-tag">
                                <a class="aa-color-green" href="#"></a>
                                <a class="aa-color-yellow" href="#"></a>
                                <a class="aa-color-pink" href="#"></a>
                                <a class="aa-color-purple" href="#"></a>
                                <a class="aa-color-blue" href="#"></a>
                                <a class="aa-color-orange" href="#"></a>
                                <a class="aa-color-gray" href="#"></a>
                                <a class="aa-color-black" href="#"></a>
                                <a class="aa-color-white" href="#"></a>
                                <a class="aa-color-cyan" href="#"></a>
                                <a class="aa-color-olive" href="#"></a>
                                <a class="aa-color-orchid" href="#"></a>
                            </div>
                        </div>
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Recently Views</h3>
                            <div class="aa-recently-views">
                                <ul>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="assets/img/woman-small-2.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="assets/img/woman-small-1.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="assets/img/woman-small-2.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Top Rated Products</h3>
                            <div class="aa-recently-views">
                                <ul>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="assets/img/woman-small-2.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="assets/img/woman-small-1.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="assets/img/woman-small-2.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </section>
    <!-- / product category -->
@endsection
