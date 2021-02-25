{{-- Master Data / Administrator --}}
@if (auth()->user()->role == 0)
    <li class="nav-item has-treeview {{ request()->is(['dashboard/*', 'dashboard']) ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ request()->is(['dashboard/*', 'dashboard']) ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Member</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Resep</p>
                </a>
            </li>
        </ul>
    </li>
@endif

{{-- Supervisor --}}
@if (auth()->user()->role == 1 || auth()->user()->role == 0)
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Supervisor
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('supervisor.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Daftar User</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('supervisor.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrasi User</p>
                </a>
            </li>
        </ul>
    </li>
@endif

{{-- keuangan --}}
@if (auth()->user()->role == 2 || auth()->user()->role == 0)
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                Keuangan
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transaksi Kas Biaya</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transaksi Pembelian</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transaksi Tunai dan Non Tunai</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transaksi Omset</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transaksi Penjualan Sales</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transaksi Retur Pembelian</p>
                </a>
            </li>
        </ul>
    </li>
@endif

{{-- Accounting --}}
@if (auth()->user()->role == 3 || auth()->user()->role == 0)
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
                Acounting
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transaksi Internal</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lap Keuangan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inventaris</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#"" class=" nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>HPP</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jurnal</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Laporan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Proses awal dan Ahir Hari</p>
                </a>
            </li>
        </ul>
    </li>
@endif

{{-- Gudang --}}
@if (auth()->user()->role == 4 || auth()->user()->role == 0)
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
                Gudang
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item ">
                <a href="{{ route('warehouse.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Stock Bahan Baku</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Stock Produk</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pembelian</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Stock Opname</p>
                </a>
            </li>
        </ul>
    </li>
@endif

{{-- Produksi --}}
@if (auth()->user()->role == 5 || auth()->user()->role == 0)
    <li class="nav-item has-treeview {{ request()->is(['produksi/*', 'produksi']) ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ request()->is(['produksi/*', 'produksi']) ? 'active' : '' }}">
            <i class="nav-icon fas fa-table"></i>
            <p>
                Produksi
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('production.index') }}"
                    class="nav-link  {{ request()->is('produksi') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pra-Produksi</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Proses Produksi</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Laporan Produksi</p>
                </a>
            </li>
        </ul>
    </li>
@endif

{{-- Penjualan & reseller --}}
@if (auth()->user()->role == 6 || auth()->user()->role == 0)
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
                Marketing
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Reseller</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>penjualan Reseller</p>
                </a>
            </li>
        </ul>
    </li>
@endif
