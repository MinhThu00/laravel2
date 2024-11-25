@extends('user.layout')

@section('content')
<body class="page home page-template-default">
    <div id="page" class="hfeed site">

        @include('user.partials.header')

        @include('user.partials.menu')

        <!-- .header-v2 -->
        <!-- ============================================================= Header End ============================================================= -->
        <div id="content" class="site-content">
            <div class="col-full">
                <div class="row">
                    <nav class="woocommerce-breadcrumb">
                        <a href="home-v1.html">Trang chủ</a>
                        <span class="delimiter">
                            <i class="tm tm-breadcrumbs-arrow-right"></i>
                        </span>
                        Các câu hỏi thường gặp
                    </nav>
                    <!-- .woocommerce-breadcrumb -->
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="type-page hentry">
                                <header class="entry-header">
                                    <div class="page-header-caption">
                                        <h1 class="entry-title">Các Câu Hỏi Thường Gặp</h1>
                                        <p class="entry-subtitle">Thỏa thuận này được cập nhật lần cuối vào ngày 18 tháng 2 năm 2016.</p>
                                    </div>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <h2 class="kc_title faq-page-title">Thông Tin Vận Chuyển</h2>
                                    <div class="row faq-first-row">
                                        <div class="col-md-6">
                                            <div class="text-block">
                                                <h3 class="faq-title">Có Những Phương Thức Vận Chuyển Nào?</h3>
                                                <div class="text-content">
                                                    <p>Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus<br>
                                                    scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit. Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col -->
                                        <div class="col-md-6">
                                            <div class="text-block">
                                                <h3 class="faq-title">Có Những Phương Thức Vận Chuyển Nào?</h3>
                                                <div class="text-content">
                                                    <p>Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus<br>
                                                    scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit. Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col -->
                                    </div>
                                    <!-- .row -->
                                    <div class="row faq-second-row">
                                        <div class="col-md-6">
                                            <div class="text-block">
                                                <h3 class="faq-title">Làm Thế Nào Để Theo Dõi Đơn Hàng?</h3>
                                                <div class="text-content">
                                                    <p>In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor pretium, in pretium risus finibus. Integer viverra pretium auctor. Aliquam eget convallis eros, varius sagittis nulla. Suspendisse potenti. Aenean consequat ex sit amet metus.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col -->
                                        <div class="col-md-6">
                                            <div class="text-block">
                                                <h3 class="faq-title">Tôi Có Cần Tài Khoản Để Đặt Hàng Không?</h3>
                                                <div class="text-content">
                                                    <p>Aenean malesuada vitae nibh id lacinia. Vestibulum imperdiet viverra lobortis. Quisque placerat sapien non placerat interdum. Nullam convallis, mauris egestas finibus tempus, lorem purus sodales nisl, in condimentum dui ante a urna.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col -->
                                    </div>
                                    <!-- .row -->
                                    <h2 class="faq-title-v2">Phiên Bản Câu Hỏi Thường Gặp Thứ Hai</h2>
                                    <div class="faq-subtitle">Thỏa thuận này được cập nhật lần cuối vào ngày 01 tháng 6 năm 2017.</div>
                                    <div id="accordion" class="faq-accordion-wrap" role="tablist" aria-multiselectable="true">
                                        <!-- Nội dung các câu hỏi dạng accordion -->
                                        <!-- Mỗi câu hỏi tương ứng với 1 thẻ card -->
                                    </div>
                                    <!-- .faq-accordion-wrap -->
                                </div>
                                <!-- .entry-content -->
                            </div>
                            <!-- .hentry -->
                        </main>
                        <!-- #main -->
                    </div>
                    <!-- #primary -->
                </div>
                <!-- .row -->
            </div>
            <!-- .col-full -->
        </div>
        
        <!-- #content -->
    
        @include('user.partials.footer')

        <!-- .site-footer -->
    </div>
    
    @include('user.partials.js')
    
</body>
@endsection