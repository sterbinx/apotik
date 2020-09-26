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
                    <a href="{{ url('transaksi') }}">
                        <i class="fas fa-money-bill-wave"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#maps">
                        <i class="fas fa-building"></i>
                        <p>Master</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ url('master/obat') }}">
                                    <span class="sub-item">Obat</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('master/user') }}">
                                    <span class="sub-item">User</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('master/kategori') }}">
                                    <span class="sub-item">Kategori</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{--@if (Auth::user()->roleid == 1)--}}
                {{--@endif--}}
            </ul>
        </div>
    </div>
</div>