<?php
    $currentControllerName = Request::segment(2);
    $currentFullRouteName = Route::getFacadeRoot()
        ->current()
        ->uri();
?>
<aside class="sidebar">
    <div class="sidebar-logo">
        <img src="{{asset('assets/image/logo.png')}}" class="logo-lg" alt="logo.png">
    </div>

    <ul class="sidebar-nav">

        <li class="sidebar-item {{ $currentControllerName == 'dashboard' || '' ? 'active' : '' }}">
            <a href="{{url('admin/dashboard')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Dashboard
            </a>
        </li>

        <li class="sidebar-nav-heading text-uppercase ms-3 my-2" >Manage</li>


        <li class="sidebar-item {{ $currentControllerName == 'pos' || '' ? 'active' : '' }}">
            <a href="{{url('admin/pos')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                POS
            </a>

        </li>
        <li class="sidebar-item {{ $currentControllerName == 'pos' || '' ? 'active' : '' }}">
            <a href="{{url('admin/category')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Category
            </a>

        </li>

    </ul>
</aside>
