@include('layouts.partials.header')

@if (!Str::contains(\Request::route()->getName(), 'index'))
<div class="container-fluid breadcrumbs breadcrumbs-dark">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a href="index.html">
                    Anasayfa
                </a>
                <a href="javascript:void(0)">
                    <span>
                        <i class="ti-arrow-right"></i>
                    </span>
                    @yield('title')
                </a>
            </div>
        </div>
    </div>
</div>
@endif

@yield('content')

@include('layouts.partials.footer')

</html>
