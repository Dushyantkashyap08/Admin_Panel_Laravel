<!--layouts.header starts here-->
@include('layouts.header')
<!--layouts.header ends here-->

<!--content starts here-->
<div class="content">
    <!--yield section starts here-->
    @yield('login-form')
    @yield('page-summary-section')
    @yield('add-page-section')
    @yield('category-summary-section')
    @yield('add-category-section')
    @yield('product-summary-section')
    @yield('add-product-section')
    @yield('change-password-section')
    <!--yield section ends here-->
</div>
<!--content ends here-->

<!--layouts.footer starts here-->
@include('layouts.footer')
<!--layouts.footer ends here-->