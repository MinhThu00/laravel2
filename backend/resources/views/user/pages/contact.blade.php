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
                        <a href="{{ route('users.index') }}">Trang chủ</a>
                        <span class="delimiter">
                            <i class="tm tm-breadcrumbs-arrow-right"></i>
                        </span>
                        Liên hệ
                    </nav>
                    <!-- .woocommerce-breadcrumb -->
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="type-page hentry">
                                <div class="entry-content">
                                    <div class="stretch-full-width-map">
                                        <iframe height="514" allowfullscreen="" style="border:0" 
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.593303940039!2d-0.15470444843858283!3d51.53901886611164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ae62edd5771%3A0x27f2d823e2be0249!2sPrincess+Rd%2C+London+NW1+8JR%2C+UK!5e0!3m2!1sen!2s!4v1458827996435">
                                        </iframe>
                                    </div>
                                    <!-- .stretch-full-width-map -->
        
                                    <div class="row contact-info">
                                        <div class="col-md-9 left-col">
                                            <div class="text-block">
                                                <h2 class="contact-page-title">Gửi tin nhắn cho chúng tôi</h2>
                                                <p>Chúng tôi sẽ phản hồi sớm nhất có thể!</p>
                                            </div>
                                            <div class="contact-form">
                                                @if(session('success'))
                                                    <div class="alert alert-success">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif
                                                <form action="{{ route('contact.submit') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <div class="col-xs-12 col-md-6">
                                                            <label>Họ tên
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                                            @error('name')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-xs-12 col-md-6">
                                                            <label>Email
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                                            @error('email')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tiêu đề</label>
                                                        <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
                                                        @error('subject')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tin nhắn</label>
                                                        <textarea class="form-control" rows="5" name="message">{{ old('message') }}</textarea>
                                                        @error('message')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <button type="submit" class="btn btn-primary">Gửi tin nhắn</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-3 store-info">
                                            <div class="text-block">
                                                <h2 class="contact-page-title">Thông tin Website</h2>
                                                <address>
                                                    Techshop
                                                </address>
                                                <h3>Giờ hoạt động</h3>
                                                <ul class="list-unstyled operation-hours">
                                                    <li><span>Thứ 2 - Thứ 6:</span> <span>8:00 - 17:00</span></li>
                                                    <li><span>Thứ 7:</span> <span>8:00 - 11:30</span></li>
                                                    <li><span>Chủ Nhật:</span> <span>Đóng cửa</span></li>
                                                </ul>
                                                <h3>Liên hệ</h3>
                                                <p>Email: <a href="mailto:contact@yourstore.com">techshop014@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .contact-info -->
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- #content -->
    
        @include('user.partials.footer')

        <!-- .site-footer -->
    </div>
    
    @include('user.partials.js')
    
</body>
@endsection