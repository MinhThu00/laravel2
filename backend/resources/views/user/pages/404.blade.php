@extends('user.layout')

@section('content')
<body class="page-template-default error-page">
    <div id="page" class="hfeed site">

        @include('user.partials.header')

        @include('user.partials.menu')

        <!-- .header-v2 -->
        <!-- ============================================================= Header End ============================================================= -->
        <div id="content" class="site-content">
            <div class="col-full">
                <div class="row">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('users.index') }}">Trang chủ</a>
                        <span class="delimiter">
                            <i class="tm tm-breadcrumbs-arrow-right"></i>
                        </span>Lỗi 404
                    </nav>
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="error404">
                                <div class="info-404">
                                    <h2 class="title">404!</h2>
                                    <p class="lead error-text">Rất tiếc! Không thể tìm thấy trang này.</p>
                                    <p class="lead">Không tìm thấy nội dung nào tại vị trí này. Hãy thử tìm kiếm hoặc xem các liên kết bên dưới.</p>
                                    <div class="sub-form-row">
                                        <div class="widget woocommerce widget_product_search">
                                            <form class="search-form">
                                                <input type="text" placeholder="Search products...">
                                                <button class="button" type="button">Tìm kiếm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- .sub-form-row -->
                            </div>
                            <!-- .error404 -->
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