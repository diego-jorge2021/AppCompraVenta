<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);">
                        <i class="ficon fas fa-bars"></i></a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto class-navbar">
            <li class="nav-item dropdown dropdown-notification mr-25">
                <input type="checkbox" id="dropdown-notificaciones">
                <label id="label-notificaciones" for="dropdown-notificaciones">
                    <i class="far fa-bell" style="transform: scale(1.8)"></i>
                    <span class="badge badge-pill badge-danger" style="transform: scale(1.05)">5</span>
                </label>
                <ul class="dropdown-menu dropdown-notificaciones-list dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                            <div class="badge badge-pill badge-light-primary">6 New</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img
                                            src="dashboard/app-assets/images/portrait/small/avatar-s-15.jpg"
                                            alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam
                                            🎉</span>winner!</p><small class="notification-text"> Won the monthly best
                                        seller badge.</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img
                                            src="dashboard/app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar"
                                            width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">New
                                            message</span>&nbsp;received</p><small class="notification-text"> You have
                                        10 unread messages</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content">MD</div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Revised Order
                                            👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order
                                        updated</small>
                                </div>
                            </div>
                        </a>
                        <div class="media d-flex align-items-center">
                            <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                            <div class="custom-control custom-control-primary custom-switch">
                                <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                                <label class="custom-control-label" for="systemNotification"></label>
                            </div>
                        </div><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Server
                                            down</span>&nbsp;registered</p><small class="notification-text"> USA Server
                                        is down due to hight CPU usage</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-success">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Sales
                                            report</span>&nbsp;generated</p><small class="notification-text"> Last month
                                        sales report generated</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-warning">
                                        <div class="avatar-content"><i class="avatar-icon"
                                                data-feather="alert-triangle"></i></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">High
                                            memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server
                                        using high memory</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read
                            all notifications</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-user">
                <input type="checkbox" id="dropdown-perfil">
                <label id="label-perfil" for="dropdown-perfil">
                    <i class="fas fa-angle-double-down" style="transform: scale(2.1, 1.9);"></i>
                </label>
                <ul class="dropdown-menu dropdown-perfil-list dropdown-menu-right" aria-labelledby="dropdown-user">
                    <li>
                        <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name font-weight-bolder">Usuario X{{-- {{ Auth::user()->nombre_usuario }} --}}</span>
                                <span class="user-status">Rol X
                                    {{-- @if (Auth::user()->id_rol == 3)
                                        Cliente
                                    @else
                                        @if (Auth::user()->id_rol == 2)
                                            Vendedor
                                        @else
                                            @if (Auth::user()->id_rol == 1)
                                                Administrador
                                            @endif
                                        @endif
                                    @endif --}}
                                </span>
                            </div>
                            <span class="avatar">
                                <img class="round" src="dashboard/app-assets/images/portrait/small/avatar-s-11.jpg"
                                    alt="avatar" height="40" width="40">
                            </span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            <i class="mr-50" data-feather="power"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
