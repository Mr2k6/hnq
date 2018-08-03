@extends('layouts.master')
@section('title',  $head->title )
@section('content')
<main class="clearfix">
    <div class="center-noleftright">
        <div class='Module'>
            <div class='ModuleContent'>
                <div class="container">
                    <section class="mobile-category clearfix d-xl-none">
                        <div class="mobile-title">
                            <h2 class="title">Ngành hàng</h2>
                        </div>
                        <div class="mobile-cate-list">
                            <ul>
                                <li>
                                    <a class="cate-col" href="#" target="_self">
                                        <div class="icon"><img src="assets/img/smartwatch.svg" alt="Thiết bị đeo tay"></div>
                                        <div class="name">Thiết bị đeo tay</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="cate-col" href="#" target="_self">
                                        <div class="icon"><img src="assets/img/home-theatre.svg" alt="Home theater"></div>
                                        <div class="name">Home theater</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="cate-col" href="#" target="_self">
                                        <div class="icon"><img src="assets/img/am-thanh.svg" alt="Âm thanh"></div>
                                        <div class="name">Âm thanh</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="cate-col" href="#" target="_self">
                                        <div class="icon"><img src="assets/img/may-tinh.svg" alt="Máy tính"></div>
                                        <div class="name">Máy tính</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="cate-col" href="#" target="_self">
                                        <div class="icon"><img src="assets/img/gaming.svg" alt="Gaming Gear"></div>
                                        <div class="name">Gaming Gear</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="cate-col" href="#" target="_self">
                                        <div class="icon"><img src="assets/img/camera.svg" alt="Camera"></div>
                                        <div class="name">Camera</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="cate-col" href="#" target="_self">
                                        <div class="icon"><img src="assets/img/phu-kien.svg" alt="Phụ kiện"></div>
                                        <div class="name">Phụ kiện</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="cate-col" href="#" target="_self">
                                        <div class="icon"><img src="assets/img/2nd.svg" alt="Hàng 2nd"></div>
                                        <div class="name">Hàng 2nd</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class='Module'>
            <div class='ModuleContent'>
                <div class="container">
                    <section class="home-category clearfix">
                        <div class="row">
                            <article class="col-12 col-lg-4">
                                <div class="cate-card">
                                    <figure>
                                        <a class="cate-img" href="#" target="_self"><img src="temp/thiebideotay.jpg" alt="Thiết bị đeo tay"></a>
                                        <figcaption>
                                            <h3 class="cate-name"><a href="#" target="_self">Thiết bị đeo tay</a></h3>
                                        </figcaption>
                                    </figure>
                                </div>
                            </article>
                            <article class="col-12 col-lg-4">
                                <div class="cate-card">
                                    <figure>
                                        <a class="cate-img" href="#" target="_self"><img src="temp/laptop2.jpg" alt="Máy tính"></a>
                                        <figcaption>
                                            <h3 class="cate-name"><a href="#" target="_self">Máy tính</a></h3>
                                        </figcaption>
                                    </figure>
                                </div>
                            </article>
                            <article class="col-12 col-lg-4">
                                <div class="cate-card">
                                    <figure>
                                        <a class="cate-img" href="#" target="_self"><img src="temp/gaminggear.jpg" alt="Gaming Gear"></a>
                                        <figcaption>
                                            <h3 class="cate-name"><a href="#" target="_self">Gaming Gear</a></h3>
                                        </figcaption>
                                    </figure>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class='Module'>
            <div class='ModuleContent'>
                <section class="home-newproduct clearfix">
                    <div class="container">
                        <nav id="tabMain" role="tablist" class="nav nav-tabs">
                            <li class="nav-item">
                                <a data-id="1" data-toggle="tab" data-href="#" href="#" class="ajaxproductlink nav-item nav-link active">Sản phẩm mới</a>
                            </li>
                            <li class="nav-item">
                                <a data-id="2" data-toggle="tab" data-href="#" href="#" class="ajaxproductlink nav-item nav-link">Bán chạy</a>
                            </li>
                            <li class="nav-item">
                                <a data-id="3" data-href="#" data-toggle="tab" href="#" class="ajaxproductlink nav-item nav-link">Khuyến mãi</a>
                            </li>
                        </nav>
                        <div id="tabMainContent" class="tab-content product-list ajaxproductresponse">
                            <div role="tabpanel" class="tab-pane fade show active">
                                <div class="newproduct-slide slick-carousel slick-carousel-6">
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">1.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">2.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">3.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">4.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">5.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">6.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">7.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">8.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">9.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">10.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">11.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">12.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">13.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">14.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">15.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">16.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">17.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-col" href="#" target="_self" title="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                            <figure>
                                                <div class="product-img">
                                                    <picture>
                                                        <source media="(max-width: 576px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 768px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <source media="(max-width: 992px)" srcset="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg">
                                                        </source>
                                                        <img src="temp/320xtechzones-michael-kors-access-touch-screen-stainless-steel-bradshaw-99.jpg" alt="Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%">
                                                    </picture>
                                                </div>
                                                <figcaption>
                                                    <h2 class="product-name">18.Michael Kors Access Touch Screen Stainless Steel Bradshaw - 99%</h2>
                                                    <div class="product-price">
                                                        <div class="new">5.900.000 ₫</div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="view-all btn-viewmore" href="#">Xem tất cả</a>
                    </div>
                </section>
            </div>
        </div>
        <div class='Module'>
            <div class='ModuleContent'>
                <section class="home-brand clearfix d-xl-none">
                    <div class="techzones-logo">
                        <a href="#" title="">
                            <img src="temp/1techzones1.png" alt="">
                        </a>
                    </div>
                </section>
            </div>
        </div>
        <div class='container Module'>
            <div class='ModuleContent'>
                <div class="home-qc clearfix">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <a class="banner-qc" href="#" title="MSI">
                                <img src="temp/ssd-m2.png" alt="MSI">
                            </a>
                        </div>
                        <div class="col-12 col-lg-6">
                            <a class="banner-qc" href="#" title="Techzones Studio">
                                <img src="temp/youtube.png" alt="Techzones Studio">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='Module'>
            <div class='ModuleContent'>
                <div class="container">
                    <section class="hot-product clearfix">
                        <div class="small-title">Sản phẩm đặc biệt</div>
                        <div class="product-list">
                            <div class="row no-gutters">
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-12 col-sm-8 col-md-6 col-lg-4">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/techzones-acer-swift-5-air-edition.png">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/techzones-acer-swift-5-air-edition.png">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/techzones-acer-swift-5-air-edition.png">
                                                    </source>
                                                    <img src="temp/techzones-acer-swift-5-air-edition.png" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-12 col-sm-8 col-md-6 col-lg-4">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/techzones-acer-swift-5-air-edition.png">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/techzones-acer-swift-5-air-edition.png">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/techzones-acer-swift-5-air-edition.png">
                                                    </source>
                                                    <img src="temp/techzones-acer-swift-5-air-edition.png" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-12 col-sm-8 col-md-6 col-lg-4">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/techzones-acer-swift-5-air-edition.png">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/techzones-acer-swift-5-air-edition.png">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/techzones-acer-swift-5-air-edition.png">
                                                    </source>
                                                    <img src="temp/techzones-acer-swift-5-air-edition.png" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                                <article class="col-6 col-sm-4 col-md-3 col-lg-2">
                                    <a class="product-col" href="#" target="_self">
                                        <figure>
                                            <div class="product-img">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 768px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <source media="(max-width: 992px)" srcset="temp/320xtechzones-apple-homepod.jpg">
                                                    </source>
                                                    <img src="temp/320xtechzones-apple-homepod.jpg" alt="Apple HomePod">
                                                </picture>
                                            </div>
                                            <figcaption>
                                                <h2 class="product-name">Apple HomePod</h2>
                                                <div class="product-price">
                                                    <div class="new">9.990.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </article>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class='Module'>
            <div class='ModuleContent'>
                <div class="container">
                    <section class="home-newproduct clearfix d-xl-none">
                        <div class="mobile-title">
                            <h3 class="title">Lựa chọn cho bạn</h3>
                        </div>
                        <div class="category-wrap">
                            <div class="category-nav">
                                <div class="item">
                                    <div class="category-name">Thiết bị đeo tay</div>
                                </div>
                                <div class="item">
                                    <div class="category-name">Home theater</div>
                                </div>
                                <div class="item">
                                    <div class="category-name">Âm thanh</div>
                                </div>
                                <div class="item">
                                    <div class="category-name">Máy tính</div>
                                </div>
                                <div class="item">
                                    <div class="category-name">Gaming Gear</div>
                                </div>
                                <div class="item">
                                    <div class="category-name">Camera</div>
                                </div>
                                <div class="item">
                                    <div class="category-name">Phụ kiện</div>
                                </div>
                            </div>
                            <div class="category-slide">
                                <div class="item">
                                    <div class="product-list">
                                        <div class="row">
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                        </div>
                                    </div>
                                    <a class="btn-viewmore" href="#" target="_self">Xem thêm</a>
                                </div>
                                <div class="item">
                                    <div class="product-list">
                                        <div class="row">
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                        </div>
                                    </div>
                                    <a class="btn-viewmore" href="#" target="_self">Xem thêm</a>
                                </div>
                                <div class="item">
                                    <div class="product-list">
                                        <div class="row">
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                        </div>
                                    </div>
                                    <a class="btn-viewmore" href="#" target="_self">Xem thêm</a>
                                </div>
                                <div class="item">
                                    <div class="product-list">
                                        <div class="row">
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>

                                        </div>
                                    </div>
                                    <a class="btn-viewmore" href="#" target="_self">Xem thêm</a>
                                </div>
                                <div class="item">
                                    <div class="product-list">
                                        <div class="row">
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                        </div>
                                    </div>
                                    <a class="btn-viewmore" href="#" target="_self">Xem thêm</a>
                                </div>
                                <div class="item">
                                    <div class="product-list">
                                        <div class="row">
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>

                                        </div>
                                    </div>
                                    <a class="btn-viewmore" href="#" target="_self">Xem thêm</a>
                                </div>
                                <div class="item">
                                    <div class="product-list">
                                        <div class="row">
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                            <article class="col-6 col-sm-4 col-md-3">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </article>
                                        </div>
                                    </div>
                                    <a class="btn-viewmore" href="#" target="_self">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class='Module'>
            <div class='ModuleContent'>
                <div class="container">
                    <section class="home-product clearfix">
                        <h2 class="product-cate">
                            <a href="#" target="_self">Thiết bị đeo tay</a>
                        </h2>
                        <nav class="cate-list">
                            <ul>
                                <li>
                                    <a href="#" target="_self">Smartwatch</a>
                                </li>
                                <li>
                                    <a href="#" target="_self">Vòng đeo tay</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <div class="product-banner">
                                    <div class="item">
                                        <a href="#" target="_self" title="Garmin Vívosmart 3">
                                            <img src="temp/vivosmart3lf.jpg" alt="Garmin Vívosmart 3">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" target="_self" title="FR935">
                                            <img src="temp/fr935.jpg" alt="FR935">
                                        </a>
                                    </div>
                                </div>
                                <ul id="tabByCat" role="tablist" class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a id="home-tab" href="#" data-id="8" class="ajaxproductlink ajaxproductlink-4 nav-link active" data-zoneid="334">
                                            Sản phẩm nổi bật
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="profile-tab" href="#" data-id="-10" class="ajaxproductlink ajaxproductlink-4 nav-link" data-zoneid="334">
                                            Khuyến mãi
                                        </a>
                                    </li>
                                </ul>
                                <div id="tabByCatContent" class="tab-content ajaxproductresponse">
                                    <div role="tabpanel" class="tab-pane fade show active">
                                        <div class="home-product-slide product-list slick-carousel slick-carousel-4">
                                            <div class="item">
                                                <a class="product-col" href="#" target="_self" title="Nokia Steel HR">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <source media="(max-width: 768px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <source media="(max-width: 992px)" srcset="temp/320xtechzones-nokia-steel-hr-1.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-nokia-steel-hr-1.jpg" alt="Nokia Steel HR">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Nokia Steel HR</h2>
                                                            <div class="product-price">
                                                                <div class="new">5.390.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="product-col" href="#" target="_self" title="Diesel Full Guard">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-diesel-full-guard.jpg">
                                                                </source>
                                                                <source media="(max-width: 768px)" srcset="temp/320xtechzones-diesel-full-guard.jpg">
                                                                </source>
                                                                <source media="(max-width: 992px)" srcset="temp/320xtechzones-diesel-full-guard.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-diesel-full-guard.jpg" alt="Diesel Full Guard">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Diesel Full Guard</h2>
                                                            <div class="product-price">
                                                                <div class="new">9.490.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="product-col" href="#" target="_self" title="Diesel Full Guard">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-diesel-full-guard.jpg">
                                                                </source>
                                                                <source media="(max-width: 768px)" srcset="temp/320xtechzones-diesel-full-guard.jpg">
                                                                </source>
                                                                <source media="(max-width: 992px)" srcset="temp/320xtechzones-diesel-full-guard.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-diesel-full-guard.jpg" alt="Diesel Full Guard">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Diesel Full Guard</h2>
                                                            <div class="product-price">
                                                                <div class="new">9.490.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a class="product-col" href="#" target="_self" title="Diesel Full Guard">
                                                    <figure>
                                                        <div class="product-img">
                                                            <picture>
                                                                <source media="(max-width: 576px)" srcset="temp/320xtechzones-diesel-full-guard.jpg">
                                                                </source>
                                                                <source media="(max-width: 768px)" srcset="temp/320xtechzones-diesel-full-guard.jpg">
                                                                </source>
                                                                <source media="(max-width: 992px)" srcset="temp/320xtechzones-diesel-full-guard.jpg">
                                                                </source>
                                                                <img src="temp/320xtechzones-diesel-full-guard.jpg" alt="Diesel Full Guard">
                                                            </picture>
                                                        </div>
                                                        <figcaption>
                                                            <h2 class="product-name">Diesel Full Guard</h2>
                                                            <div class="product-price">
                                                                <div class="new">9.490.000 ₫</div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="product-brand">
                                    <div class="title">Thương hiệu</div>
                                    <div class="brand-list">
                                        <div class="brand">
                                            <a href="#" title="Apple">
                                                <img src="temp/apple-logo-black.png" alt="Apple">
                                            </a>
                                        </div>
                                        <div class="brand">
                                            <a href="#" title="Asus">
                                                <img src="temp/techzones-asus.jpg" alt="Asus">
                                            </a>
                                        </div>
                                        <div class="brand">
                                            <a href="#" title="Emporio Armani">
                                                <img src="temp/emperor-armani.jpg" alt="Emporio Armani">
                                            </a>
                                        </div>
                                        <div class="brand">
                                            <a href="#" title="Fitbit">
                                                <img src="temp/techzones-fitbit.jpg" alt="Fitbit">
                                            </a>
                                        </div>
                                        <div class="brand">
                                            <a href="#" title="Fossil">
                                                <img src="temp/fossil.jpg" alt="Fossil">
                                            </a>
                                        </div>
                                        <div class="brand">
                                            <a href="#" title="Garmin">
                                                <img src="temp/techzones-garmin-logo.png" alt="Garmin">
                                            </a>
                                        </div>
                                        <div class="brand">
                                            <a href="#" title="Huawei">
                                                <img src="temp/techzones-huawei.jpg" alt="Huawei">
                                            </a>
                                        </div>
                                        <div class="brand">
                                            <a href="#" rel="nofollow" class="btn-viewmore">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-suggest">
                                    <div class="title">Lựa chọn cho bạn</div>
                                    <div class="product">
                                        <figure>
                                            <a class="product-img" href="#" target="_self" title="Vòng đeo sức khỏe Misfit Shine 2 - 2017">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/techzones-ticwatch.jpg">
                                                    </source>
                                                    <img src="temp/techzones-ticwatch.jpg" alt="Vòng đeo sức khỏe Misfit Shine 2 - 2017">
                                                </picture>
                                            </a>
                                            <figcaption>
                                                <h3 class="product-name">
                                                    <a href="#" title="Vòng đeo sức khỏe Misfit Shine 2 - 2017">Vòng đeo sức khỏe Misfit Shine 2 - 2017</a>
                                                </h3>
                                                <div class="product-price">
                                                    <div class="new">2.880.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="product">
                                        <figure>
                                            <a class="product-img" href="#" target="_self" title="Vòng đeo sức khỏe Misfit Shine 2 - 2017">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/techzones-ticwatch.jpg">
                                                    </source>
                                                    <img src="temp/techzones-ticwatch.jpg" alt="Vòng đeo sức khỏe Misfit Shine 2 - 2017">
                                                </picture>
                                            </a>
                                            <figcaption>
                                                <h3 class="product-name">
                                                    <a href="#" title="Vòng đeo sức khỏe Misfit Shine 2 - 2017">Vòng đeo sức khỏe Misfit Shine 2 - 2017</a>
                                                </h3>
                                                <div class="product-price">
                                                    <div class="new">2.880.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="product">
                                        <figure>
                                            <a class="product-img" href="#" target="_self" title="Vòng đeo sức khỏe Misfit Shine 2 - 2017">
                                                <picture>
                                                    <source media="(max-width: 576px)" srcset="temp/techzones-ticwatch.jpg">
                                                    </source>
                                                    <img src="temp/techzones-ticwatch.jpg" alt="Vòng đeo sức khỏe Misfit Shine 2 - 2017">
                                                </picture>
                                            </a>
                                            <figcaption>
                                                <h3 class="product-name">
                                                    <a href="#" title="Vòng đeo sức khỏe Misfit Shine 2 - 2017">Vòng đeo sức khỏe Misfit Shine 2 - 2017</a>
                                                </h3>
                                                <div class="product-price">
                                                    <div class="new">2.880.000 ₫</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="btn-wrap">
                                        <a class="btn-viewmore" href="#" target="_self">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class='Module'>
            <div class='ModuleContent'>
                <section class="home-news clearfix">
                    <div class="container">
                        <div class="mobile-title">
                            <div class="title">Tin tức mới nhất</div>
                            <a href="/tin-tuc" class="btn-viewmore">Xem thêm</a>
                        </div>
                        <div class="news-list clearfix">
                            <div class="item">
                                <div class="news-col">
                                    <figure>
                                        <figcaption>
                                            <time>30/03/2018</time>
                                            <h3 class="news-name">
                                                <a target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường</a>
                                            </h3>
                                        </figcaption>
                                        <a class="news-img" target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            <picture>
                                                <source media="(max-width: 992px)" srcset="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg">
                                                </source>
                                                <img src="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg" alt="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            </picture>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="item">
                                <div class="news-col">
                                    <figure>
                                        <figcaption>
                                            <time>30/03/2018</time>
                                            <h3 class="news-name">
                                                <a target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường</a>
                                            </h3>
                                        </figcaption>
                                        <a class="news-img" target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            <picture>
                                                <source media="(max-width: 992px)" srcset="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg">
                                                </source>
                                                <img src="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg" alt="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            </picture>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="item">
                                <div class="news-col">
                                    <figure>
                                        <figcaption>
                                            <time>30/03/2018</time>
                                            <h3 class="news-name">
                                                <a target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường</a>
                                            </h3>
                                        </figcaption>
                                        <a class="news-img" target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            <picture>
                                                <source media="(max-width: 992px)" srcset="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg">
                                                </source>
                                                <img src="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg" alt="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            </picture>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="item">
                                <div class="news-col">
                                    <figure>
                                        <figcaption>
                                            <time>30/03/2018</time>
                                            <h3 class="news-name">
                                                <a target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường</a>
                                            </h3>
                                        </figcaption>
                                        <a class="news-img" target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            <picture>
                                                <source media="(max-width: 992px)" srcset="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg">
                                                </source>
                                                <img src="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg" alt="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            </picture>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="item">
                                <div class="news-col">
                                    <figure>
                                        <figcaption>
                                            <time>30/03/2018</time>
                                            <h3 class="news-name">
                                                <a target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường</a>
                                            </h3>
                                        </figcaption>
                                        <a class="news-img" target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            <picture>
                                                <source media="(max-width: 992px)" srcset="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg">
                                                </source>
                                                <img src="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg" alt="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            </picture>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div class="item">
                                <div class="news-col">
                                    <figure>
                                        <figcaption>
                                            <time>30/03/2018</time>
                                            <h3 class="news-name">
                                                <a target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường</a>
                                            </h3>
                                        </figcaption>
                                        <a class="news-img" target="_self" href="#" title="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            <picture>
                                                <source media="(max-width: 992px)" srcset="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg">
                                                </source>
                                                <img src="temp/450xtechzones-usb-type-c-la-gi-nhung-uu-diem-cua-usb-type-c-so-voi-loai-usb-thong-thuong-3.jpg" alt="USB Type C là gì? Những ưu điểm của USB Type C so với loại USB thông thường">
                                            </picture>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class='home-news clearfix Module '>
            <div class='ModuleContent'>
                <div class="feed-wrap"></div>
            </div>
        </div>
    </div>
</main>
@endsection