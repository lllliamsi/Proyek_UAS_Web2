@include('admin.layout.top')
@include('admin.layout.menu')
<div id="layoutSidenav_content">
    <div class="content-wrapper">
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</div>
@include('admin.layout.bottom')
