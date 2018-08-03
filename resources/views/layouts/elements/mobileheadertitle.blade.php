<?php
/**
 * Created by PhpStorm.
 * User: HuyNQ
 * Date: 4/13/2018
 * Time: 4:15 PM
 */
?>
<header class="mobile-header clearfix">
    <div class="container">
        <a href="#" class="btn-backpage"><i class="material-icons">arrow_back</i></a>
        <div class="btn-showmenu"><i class="material-icons">menu</i></div>
        <div class="overlay hidden"></div>
        <div class="overlay-popup hidden"></div>
        <div class='sitelogo Module'><a href="/"><img alt="Techzones" src="assets/img/logor.png" /></a></div>
        <div class="colright clearfix">
            <div class="hotline">
                <div class='Module Module-336'>
                    <div class='ModuleContent'><a href="tel:0938875806"><em class="material-icons">phone</em></a></div>
                </div>
            </div>
            <div class="searchtoggle"><i class="material-icons">search</i></div>
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
            <div class="minimenu dropdown">
                <a href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="material-icons">more_vert</i></a>
                <div aria-labelledby="dropdownMenuLink" class="dropdown-menu dropdown-menu-righ">
                    <div class='Module Module-337'>
                        <div class='ModuleContent'>
                            <ul class="menulink">
                                <li><a href="/"><em class="material-icons">home</em> Trang chủ</a></li>
                                <li><a href="#"><em class="material-icons">view_list</em> Danh sách ngành hàng</a></li>
                                <li><a href="#"><em class="material-icons">account_circle</em> Quản lý tài khoản</a></li>
                                <li><a href="#"><em class="material-icons">help</em> Trung tâm hỗ trợ</a></li>
                                <li><a href="tel:0938875806"><em class="material-icons">phone</em> Hotline: 0938.875.806</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="mobile-search">
            <div class="search-header">
                <div class="container">
                    <div class="search-header-wrap">
                        <div class="btn-closesearch"><i class="material-icons">arrow_back</i></div>
                        <div class="searchbox">
                            <div class='searchwrap Module Module-137'>
                                <div class='productsearchbox searchbox clearfix'>
                                    <input type="text" title="Tìm kiếm" class="searchinput" autocomplete="off" placeholder="Nhập từ khóa tìm kiếm..." />
                                    <button class="searchbutton">
                                        <i class="material-icons">search</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="moblie-searchresult clearfix"></div>
        </section>
    </div>
</header>
