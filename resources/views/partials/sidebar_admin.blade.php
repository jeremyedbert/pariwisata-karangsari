<div class="sidebar">
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            {{-- <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src={{ url('assets/admin/img/profile.jpg') }} alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <ul class="nav">
                <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Halaman Utama</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/blog*') ? 'active' : '' }}">
                    <a href="{{ route('admin.blog') }}">
                        <i class="fas fa-pencil-alt"></i>
                        <p>Blog</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/tour*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tour') }}">
                        <i class="fas fa-cog"></i>
                        <p>Wisata</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/setting*') ? 'active' : '' }}">
                    <a href="{{ route('admin.setting') }}">
                        <i class="fas fa-user"></i>
                        <p>Admin</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
