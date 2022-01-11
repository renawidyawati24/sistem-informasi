<li class="nav-item">
    <a href="{{ route('pegawais.index') }}"
       class="nav-link {{ Request::is('pegawais*') ? 'active' : '' }}">
        <p>Data Pegawai</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('jabatans.index') }}"
       class="nav-link {{ Request::is('jabatans*') ? 'active' : '' }}">
        <p>Jabatan</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('laporans.index') }}"
       class="nav-link {{ Request::is('laporans*') ? 'active' : '' }}">
        <p>Laporan</p>
    </a>
</li>


