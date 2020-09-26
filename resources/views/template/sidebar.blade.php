<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
                    <h4 class="text-section">Menu</h4>
                </li>
                <li class="nav-item">
                    <a href="{{ url('data/warga') }}">
                        <i class="fas fa-users"></i>
                        <p>Warga</p>
                    </a>
                </li>
                @if (Auth::user()->roleid == 1)
                <li class="nav-item">
                    <a data-toggle="collapse" href="#submenu">
                        <i class="fas fa-database"></i>
                        <p>Master</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('master/user') }}">
                                    <span class="sub-item">User</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('master/type') }}">
                                    <span class="sub-item">Type</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('master/category') }}">
                                    <span class="sub-item">Category</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>