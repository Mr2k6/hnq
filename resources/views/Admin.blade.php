@extends('admin.master')
@section('title',  "huynq" )
@section('content')
    <!--Page main section start-->
    <section id="min-wrapper" class="active"> <!--- Put active class in here fom minimize left bar at default---->
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Top header start-->
                        <h3 class="ls-top-header">Chào mừng bạn đến với trang quản trị CMS</h3>
                        <!--Top header end -->

                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-home"></i></a></li>
                            <li>Admin</li>
                            <li class="active">index</li>
                        </ol>
                        <!--Top breadcrumb end -->
                    </div>
                </div>
                <!-- Main Content Element  Start-->
                <div class="demo-blockquote">
                    <blockquote class="styles">
                        <p>Tất cả mọi thứ chỉ quý giá tại 2 thời điểm: Trước khi có được và sau khi mất đi.</p>
                        <footer>Khuyết danh</footer>
                    </blockquote>
                </div>

                <!-- Main Content Element  End-->

            </div>
        </div>



    </section>
    <!--Page main section end -->
@endsection