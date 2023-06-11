<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary " style="min-height: 100vh;">
    <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto ">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard/gudangs">
                        <i class="bi bi-inbox-fill" style="color:rgb(0, 0, 0);"></i>
                        Gudang
                    </a>
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard/bags">
                        <i class="bi bi-bag-fill" style="color:rgb(0, 0, 0);"></i>
                        Barang yang Dipinjam
                    </a>
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard/dataPeminjaman">
                        <i class="bi bi-card-text" style="color:rgb(0, 0, 0);"></i>
                        Riwayat Peminjaman
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column mb-auto">

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">


                        <form class="bi"action="/logout" method="post">
                            @csrf
                            <button type="submit"
                                style="border: none;margin:auto;margin-left:0;padding:0;width:71px;background-color:transparent;font-weight:500;color:rgb(68, 102, 255);"><i
                                    class="bi bi-box-arrow-right"
                                    style="padding-right:22px;color:rgb(0, 0, 0);"></i>Logout</button>
                        </form>
                    </a>
                </li>
            </ul>
            @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
                    <span>Admin</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                            href="/dashboard/categories">

                            <i class="bi bi-grid-fill" style="color: black"></i>

                            Post Categories
                        </a>
                    </li>
                </ul>
            @endcan
        </div>
    </div>
</div>
