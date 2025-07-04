<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block">{{ $webset->website_name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <x-single-sidebar routes="viewDashboard" label="Dashboard" icon="fas fa-tachometer-alt" />
                {{-- <li class="nav-header">Master Data</li> --}}
                <x-single-sidebar routes="viewWebSetting" label="Website Settings" icon="fas fa-cogs" />
            </ul>
        </nav>
    </div>
</aside>
