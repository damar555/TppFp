<?php
$id = $_GET['id_kategori'];
$query = mysqli_query($koneksi, " SELECT * FROM kategori where id_kategori = $id");
$res = mysqli_fetch_array($query);
$namaKat = $res['nama_kategori'];
?>
<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.html">
                        <img src="assetuser/img/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="user">
                    <a href="wishlist.html" class="btn wishlist">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="cart.html" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bottom Bar End -->

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active">Produk Berdasarkan Kategori <?php echo $namaKat; ?></li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product List Start -->
<div class="product-view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-view-top">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="product-search">
                                        <input type="email" value="Search">
                                        <button><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product-short">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle" data-toggle="dropdown">Product short by</div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">Newest</a>
                                                <a href="#" class="dropdown-item">Popular</a>
                                                <a href="#" class="dropdown-item">Most sale</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="product-price-range">
                                        <div class="dropdown">
                                            <div class="dropdown-toggle" data-toggle="dropdown">Product price range</div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">$0 to $50</a>
                                                <a href="#" class="dropdown-item">$51 to $100</a>
                                                <a href="#" class="dropdown-item">$101 to $150</a>
                                                <a href="#" class="dropdown-item">$151 to $200</a>
                                                <a href="#" class="dropdown-item">$201 to $250</a>
                                                <a href="#" class="dropdown-item">$251 to $300</a>
                                                <a href="#" class="dropdown-item">$301 to $350</a>
                                                <a href="#" class="dropdown-item">$351 to $400</a>
                                                <a href="#" class="dropdown-item">$401 to $450</a>
                                                <a href="#" class="dropdown-item">$451 to $500</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php

                    $q = mysqli_query($koneksi, "select * from produk where id_kategori = $id");
                    while ($r = mysqli_fetch_array($q)) {
                    ?>
                        <div class="col-md-4">
                            <div class="product-item">

                                <div class="product-title">
                                    <a><?php echo $r['nama_produk'] ?></a>
                                </div>
                                <div class="product-image">
                                    <a href="product-detail.html">
                                        <img src="upload/<?php echo $r['gambar'] ?> " alt="" style="height: 400px;" />
                                    </a>
                                    <div class="product-action">
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h3><span>Rp.</span><?php echo number_format($r['harga']) ?></h3>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <!-- Pagination Start -->
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination Start -->
            </div>

            <!-- Side Bar Start -->
            <div class="col-lg-4 sidebar">
                <div class="sidebar-widget category">
                    <h2 class="title">Category</h2>
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                            <?php
                            $q = mysqli_query($koneksi, "select * from kategori");
                            while ($r = mysqli_fetch_array($q)) {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="produk_by_kategori.php?id_kategori=<?php echo $r['id_kategori'] ?>"><i class="fa fa-shopping-bag"></i><?php echo $r['nama_kategori'] ?></href=></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>

                <div class="sidebar-widget widget-slider">
                    <div class="sidebar-slider normal-slider">
                        <?php
                        $q = mysqli_query($koneksi, "select * from produk ");
                        while ($r = mysqli_fetch_array($q)) {
                        ?>
                            <div class="product-item">
                                <div class="product-title">
                                    <a><?php echo $r['nama_produk'] ?></a>
                                </div>
                                <div class="product-image">
                                    <a href="product-detail.html">
                                        <img src="upload/<?php echo $r['gambar'] ?> " alt="" style="height: 500px; " />
                                    </a>
                                    <div class="product-action">
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h3><span>Rp.</span><?php echo number_format($r['harga']) ?></h3>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="sidebar-widget brands">
                    <h2 class="title">Our Brands</h2>
                    <ul>
                        <li><a href="#">Nulla </a><span>(45)</span></li>
                        <li><a href="#">Curabitur </a><span>(34)</span></li>
                        <li><a href="#">Nunc </a><span>(67)</span></li>
                        <li><a href="#">Ullamcorper</a><span>(74)</span></li>
                        <li><a href="#">Fusce </a><span>(89)</span></li>
                        <li><a href="#">Sagittis</a><span>(28)</span></li>
                    </ul>
                </div>

                <div class="sidebar-widget tag">
                    <h2 class="title">Tags Cloud</h2>
                    <a href="#">Lorem ipsum</a>
                    <a href="#">Vivamus</a>
                    <a href="#">Phasellus</a>
                    <a href="#">pulvinar</a>
                    <a href="#">Curabitur</a>
                    <a href="#">Fusce</a>
                    <a href="#">Sem quis</a>
                    <a href="#">Mollis metus</a>
                    <a href="#">Sit amet</a>
                    <a href="#">Vel posuere</a>
                    <a href="#">orci luctus</a>
                    <a href="#">Nam lorem</a>
                </div>
            </div>
            <!-- Side Bar End -->
        </div>
    </div>
</div>
<!-- Product List End -->