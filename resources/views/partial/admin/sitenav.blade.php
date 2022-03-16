<?php
    $currentControllerName = Request::segment(2);
    $currentFullRouteName = Route::getFacadeRoot()
        ->current()
        ->uri();
?>

<aside class="sidebar">

    <button class="btn sidebar-collapse-btn">
        <span class="iconify" data-icon="icon-park-outline:menu-unfold-one" data-width="20" data-height="20"></span>

{{--        <span class="iconify" data-icon="icon-park-outline:menu-fold-one" data-width="20" data-height="20"></span>--}}

    </button>


    <div class="sidebar-logo">
        <img src="{{asset('assets/image/logo.png')}}" class="logo-lg" alt="logo.png">
    </div>

    <ul class="sidebar-nav">


        <li class="sidebar-item {{ $currentControllerName == 'dashboard' || '' ? 'active' : '' }} ">
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


        <li class="sidebar-item {{ $currentControllerName == 'attributes' || '' ? 'active' : '' }}">
            <a href="{{url('admin/attributes')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Attributes
            </a>
        </li>


        <li class="sidebar-item {{ $currentControllerName == 'brands' || '' ? 'active' : '' }}">
            <a href="{{url('admin/brands')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Brands
            </a>
        </li>

        <li class="sidebar-item {{ $currentControllerName == 'payments' || '' ? 'active' : '' }}">
            <a href="{{url('admin/payments')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Payments
            </a>
        </li>

        <li class="sidebar-item {{ $currentControllerName == 'coupons' || '' ? 'active' : '' }}">
            <a href="{{url('admin/coupons')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Coupons
            </a>
        </li>

        <li class="sidebar-item {{ $currentControllerName == 'payout-requests' || '' ? 'active' : '' }}">
            <a href="{{url('admin/payout-requests')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Payout Requests
            </a>
        </li>


        <li class="sidebar-item {{ $currentControllerName == 'help' || '' ? 'active' : '' }}">
            <a href="{{url('admin/help')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Help
            </a>
        </li>

        <li class="sidebar-item {{ $currentControllerName == 'subscriber' || '' ? 'active' : '' }}">
            <a href="{{url('admin/subscriber')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Subscriber
            </a>
        </li>


        <li class="sidebar-item {{ $currentControllerName == 'delivery-person' || '' ? 'active' : '' }}">
            <a href="{{url('admin/delivery-person')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Delivery Person
            </a>
        </li>


        <li class="sidebar-nav-heading text-uppercase ms-3 my-2" >Settings</li>


        <li class="sidebar-item {{ $currentControllerName == 'smtp' || '' ? 'active' : '' }}">
            <a href="{{url('admin/smtp')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Basic Setting
            </a>
        </li>

        <li class="sidebar-item {{ $currentControllerName == 'smtp' || '' ? 'active' : '' }}">
            <a href="{{url('admin/smtp')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                SMTP
            </a>
        </li>

    </ul>
</aside>


