<aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">
        <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
                <!-- .menu -->
                <ul class="menu">
                    <!-- .menu-item -->
                    <li class="menu-item has-active">
                        <a href="{{ route('dashboard') }}" class="menu-link"><span class="menu-icon fas fa-home"></span>
                            <span class="menu-text">Dashboard</span></a>
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon far fa-file"></span> <span
                                class="menu-text">Users</span></a>
                        <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="{{ route('user.index') }}" class="menu-link">show all users</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('user.create') }} " class="menu-link">Create User</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link"><span class="menu-icon far fa-file"></span> <span
                                class="menu-text">Schedules</span></a>
                        <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="{{ route('appointment.index') }}" class="menu-link">show Schedules</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('appointment.create') }}" class="menu-link">Create Schedule</a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </nav>
        </div>
        <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span
                    class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
        </footer>
    </div>
</aside>
