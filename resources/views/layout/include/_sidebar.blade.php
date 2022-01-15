<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="/supervisor" class="active"><i class="lnr lnr-home"></i> <span>Supervisor</span></a></li>
				@if(auth()->user()->role == 'kurikulum')
				<li><a href="/kurikulum/dashboard" class="active"><i class="lnr lnr-pencil"></i> <span>Kurikulum</span></a></li>
				<li><a href="/kepsek/dashboard" class="active"><i class="lnr lnr-pencil"></i> <span>Kepala Sekolah</span></a></li>
				<li><a href="/guru/dashboard" class="active"><i class="lnr lnr-pencil"></i> <span>Guru</span></a></li>
				@endif
				@if(auth()->user()->role == 'kepsek')
				<li><a href="/laporansupervisi" class=""><i class="lnr lnr-pencil"></i> <span>Laporan Supervisi</span></a></li>
				@endif
				@if(auth()->user()->role == 'guru')
				<li><a href="/lihatlaporanpenilaiandancatatansupervisor" class=""><i class="lnr lnr-pencil"></i> <span>Lihat laporan penilaian dan Catatan dari supervisor</span></a></li>
				@endif

			</ul>
		</nav>
	</div>
</div>