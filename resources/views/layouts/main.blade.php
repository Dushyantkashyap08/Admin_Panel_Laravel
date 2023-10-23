@include('layouts.header')
<div class="content">
    @yield('login-form')
    @yield('page-summary-section')
    @yield('add-page-section')
    @yield('category-summary-section')
    @yield('add-category-section')
    @yield('product-summary-section')
    @yield('add-product-section')
    @yield('change-password-section')
</div>
@include('layouts.footer')