@extends('templates.app')
@section('title')
    @yield('admin_title')@แอดมิน
@endsection
@section('header')
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
        <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
            <a class="uk-navbar-item uk-logo" href="#">EZBooks</a>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#">เครื่องมือ</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">เข้าสู่ระบบ</a></li>
                                <li><a href="#">ออกจากระบบ</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
@endsection
@section('content')
    @yield('admin_content')
@endsection
@section('footer')
    @yield('admin_footer')
@endsection
@section('script')
    @yield('admin_script')
@endsection