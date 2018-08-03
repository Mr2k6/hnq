<?php
/**
 * Created by PhpStorm.
 * User: HuyNQ
 * Date: 4/13/2018
 * Time: 4:17 PM
 */
?>
<header>
    <section class="header-top clearfix">
        <div class="container">
            <div class='hotline Module'>
                <div class='ModuleContent'>HOTLINE: <a href="tel:{{ $head->tel }}">0{{  number_format($head->tel,0,"",".") }}</a></div>
            </div>
            <div class="colright clearfix">
                <div class='check-tool Module'>
                    <div class='ModuleContent'>
                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <em class="material-icons">assignment</em> Kiểm tra đơn hàng</a>
                            <div aria-labelledby="dropdownMenuLink" class="dropdown-menu check-form">
                                <div class="form-group">
                                    <label>Mã đơn hàng</label>
                                    <input type="text" placeholder="Nhập mã đơn hàng" class="check-order-input" autocomplete="off" />
                                </div>
                                <div class="frm-btn">
                                    <input type="submit" value="Kiểm tra đơn hàng" class="btn-check check-order-button" />
                                    <a href="#" class="hidden check-order-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='check-tool Module'>
                    <div class='ModuleContent'>
                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                <i class="material-icons">event_available</i> Kiểm tra bảo hành</a>
                            <div aria-labelledby="dropdownMenuLink" class="dropdown-menu check-form">
                                <div class="form-group">
                                    <label>Mã IMEI</label>
                                    <input name="" type="text" placeholder="Nhập Imei" autocomplete="off" />
                                </div>
                                <div class="frm-btn">
                                    <input type="submit" name="" value="Xác nhận" class="btn-check" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header-main clearfix">
        <div class="container">
            <div class='sitelogo Module'><a href="/"><img alt="{{ $head->title }}" src="{{ $head->logo }}" /></a></div>
            <div class="search">
                <div class="searchwrap">
                    <div class='searchwrap Module'>
                        <form action="/tim-kiem.html" method="get">
                        <div class='productsearchbox searchbox clearfix'>
                            <input name="key" type="text" title="Tìm kiếm" class="searchinput" autocomplete="off" placeholder="Nhập từ khóa tìm kiếm..." />
                            <button class="searchbutton"><i class="material-icons">search</i></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="colright clearfix">
                <div class='pull-left Module'>
                    <div class='ModuleContent'>
                        <div class="sitefeature">
                            <div class="feature">
                                <figure>
                                    <div class="icon"><img alt="" src="assets/img/tra-gop.svg" /></div>
                                    <figcaption>
                                        <div class="des">Trả góp lãi xuất 0%</div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="feature">
                                <figure>
                                    <div class="icon"><img alt="" src="assets/img/giao-hang.svg" /></div>
                                    <figcaption>
                                        <div class="des">Miễn phí vận chuyển</div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="feature">
                                <figure>
                                    <div class="icon"><img alt="" src="assets/img/15-ngay.svg" /></div>
                                    <figcaption>
                                        <div class="des">Đổi trả trong 15 ngày</div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="login">
                    <ul>
                        <li class=""><a class="/dang-ky.html" rel="nofollow" href="#">Đăng k&#253;</a></li>
                        <li class=""><a class="/dang-nhap.html" rel="nofollow" href="#">Đăng nhập</a></li>
                    </ul>
                </div>
                <div class="cart">
                    <div class="cart-toggle">
                        <i class="material-icons">shopping_cart</i>
                        <div class="cart-amount"><a href="#">Giỏ hàng <span class="amount">0</span></a></div><a class="hidden checkout-url" data-checkouturl=""></a>
                    </div>
                    <div class="popup-addtocart">
                        <div class="addtocart-success">
                            <i class="material-icons">check_circle</i>Thêm vào giỏ hàng thành công
                        </div>
                        <div class="btn-hidepopup">
                            <i class="material-icons">close</i> Đóng
                        </div>
                        <div class="product"></div>
                        <div class="popup-btnwrap"><a class="btn-gotocart" href="#">Xem giỏ hàng</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header-menu clearfix">
        <div class='container Module'>
            <div class='ModuleContent'>
                <nav class="menu clearfix">
                    <ul class="menulink">
                        @foreach ($menu as $key => $node)
                            <li>
                                <a href="{{ $node['url'] . '-cat'. $node['id'] }}.html" target="_self">
                                    <div class="icon">
                                        <img src="file/menus/{{ $node['image'] }}" alt="{{ $node['name'] }}">
                                    </div>
                                    <div class="text">{{ $node['name'] }}</div>
                                </a>
                            </li>
                        @endforeach
                        <li class="">
                            <a class="" rel="nofollow" href="#">
                                <div class="icon">
                                    <img src="file/menus/user.png" alt="Đăng ký">
                                </div>
                                <div class="text">Đăng k&#253;</div>
                            </a>
                        </li>
                        <li class="">
                            <a class="" rel="nofollow" href="#">
                                <div class="icon">
                                    <img src="file/icon/login.png" alt="Đăng nhập">
                                </div>
                                <div class="text">Đăng nhập</div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</header>
