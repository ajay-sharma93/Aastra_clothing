@extends('Frontend_folder.app')
@section('content')
    <!-- menu -->
    <section id="menu">
        <div class="container">
            <div class="menu-area">
                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- / menu -->

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        {{-- <img src="assets/img/fashion/fashion-header-bg-8.jpg" alt="fashion img"> --}}
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Wishlist Page</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Wishlist</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="cart-view">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cart-view-area">
                        <div class="cart-view-table aa-wishlist-table">
                            <form action="">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Image of the Product</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Stock Status</th>
                                                <th>Cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>
                                                <td><a class="remove" href="#">
                                                        <fa class="fa fa-close"></fa>
                                                    </a></td>
                                                <td><a href="#"><img src="img/man/polo-shirt-1.png"
                                                            alt="img"></a></td>
                                                <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                                                <td>$250</td>
                                                <td>In Stock</td>
                                                <td><a href="#" class="aa-add-to-cart-btn">Add To Cart</a></td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->
@endsection
