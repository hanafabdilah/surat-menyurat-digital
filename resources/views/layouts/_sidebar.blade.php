<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#" class="text-center">
            <h3 class="title-2">PENGELOLA SURAT</h3>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>                    
                </li>
                <li  class="{{ request()->is('transaksisurat') ? 'active' : '' }}{{ request()->is('transaksisurat/*') ? 'active' : '' }}">
                    <a  href="{{ route('transaksisurat.index') }}">
                        <i class="zmdi zmdi-email"></i>Transaksi Surat</a>                        
                </li>
                <li class="{{ request()->is('klasifikasi') ? 'active' : '' }}{{ request()->is('klasifikasi/*') ? 'active' : '' }}">
                    <a href="{{ route('klasifikasi.index') }}">
                        <i class="fas fa-user"></i>Klasifikasi</a>
                </li>
                <li class="{{ request()->is('sifatsurat') ? 'active' : '' }}{{ request()->is('sifatsurat/*') ? 'active' : '' }}">
                    <a href="{{ route('sifatsurat.index') }}">
                    <i class="fa fa-book"></i>Sifat Surat</a>
                </li>
                @if(Auth::user()->role == 'admin')
                <li class="{{ request()->is('user') ? 'active' : '' }}{{ request()->is('user/*') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}">
                    <i class="fa fa-users"></i>User</a>
                </li>
<<<<<<< HEAD
                <li class="{{ request()->is('sifatsurat') ? 'active' : '' }}{{ request()->is('sifatsurat/*') ? 'active' : '' }}">
                    <a href="{{ route('sifatsurat.index') }}">
                    <i class="fa fa-envelope"></i>Sifat Surat</a>
                </li>
                
=======
                @endif
>>>>>>> d57ed3c7df1fa94309d484f01e392016f464ed3e
            </ul>
        </nav>
    </div>
</aside>