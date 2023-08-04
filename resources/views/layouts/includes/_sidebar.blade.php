<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						@if(auth()->user()->role == 'puslib')
						<li><a href="/dashboard" class=" {{ Request::is('dashboard') ? 'active' :''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/pengajuan" class="{{ Request::is('pengajuan') ? 'active' :''}}"><i class="lnr lnr-rocket"></i> <span>Verifikasi</span></a></li>
						<li><a href="/datapublikasi" class="{{ Request::is('datapublikasi') ? 'active' :''}}"><i class="lnr lnr-cart"></i> <span>Link Pengajuan </span></a></li>
						<li><a href="/publikasi/lengkap" class="{{ Request::is('publikasi/lengkap') ? 'active' :''}}"><i class="fa fa-thumbs-up"></i> <span>Publikasi </span></a></li>
						@endif

						@if(auth()->user()->role == 'admin')
						<li><a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' :''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/user" class="{{ Request::is('user') ? 'active' :''}}"><i class="lnr lnr-user"></i> <span>User</span></a></li>
						<li><a href="/datapublikasi" class="{{ Request::is('datapublikasi') ? 'active' :''}}"><i class="lnr lnr-cart"></i> <span>Link Pengajuan</span></a></li>
						<li><a href="/publikasi/lengkap" class="{{ Request::is('publikasi/lengkap') ? 'active' :''}}"><i class="fa fa-thumbs-up"></i> <span>Publikasi Fix</span></a></li>
						@endif

						@if(auth()->user()->role == 'dosen')
						<li><a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' :''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/publikasi" class="{{ Request::is('publikasi') ? 'active' :''}}"><i class="lnr lnr-rocket"></i> <span>Publikasi</span></a></li><li><a href="/publikasi/ditolak" class="{{ Request::is('publikasi/ditolak') ? 'active' :''}}"><i class="lnr lnr-pencil"></i> <span>Ditolak</span></a></li>
						
						
						@endif

						@if(auth()->user()->role == 'wd2')
						<li><a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' :''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						
						<li><a href="/publikasi/diperiksa" class="{{ Request::is('publikasi/diperiksa') ? 'active' :''}}"><i class="fa fa-thumbs-up"></i> <span>Diperiksa</span></a></li>
						
						@endif

						@if(auth()->user()->role == 'direktur')
						<li><a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' :''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						
						<li><a href="/publikasi/diketahui" class="{{ Request::is('publikasi/diketahui') ? 'active' :''}}"><i class="fa fa-thumbs-up"></i> <span>Diketahui</span></a></li>
						<li><a href="/publikasi/lengkap" class="{{ Request::is('publikasi/lengkap') ? 'active' :''}}"><i class="fa fa-thumbs-up"></i> <span>Publikasi Fix</span></a></li>
						
						@endif
						@if(auth()->user()->role == 'keuangan')
						<li><a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' :''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						
						<li><a href="/publikasi/lengkap" class="{{ Request::is('publikasi/lengkap') ? 'active' :''}}"><i class="fa fa-thumbs-up"></i> <span>Publikasi </span></a></li>
						
						@endif



					</ul>
				</nav>
			</div>
		</div>