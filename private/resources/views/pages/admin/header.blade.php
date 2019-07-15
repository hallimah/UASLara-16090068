<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>My</span>Blog's</a>
				</div>
		</div><!-- /.container-fluid -->
	</nav>
	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Halimah</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li> <a href="{{url('/')}}"><em class="fa fa-dashboard">&nbsp;</em>Dashboard</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Postingan <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="{{url('post')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Buat
					</a></li>
					<li><a class="" href="{{url('list-post')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Semua Postingan
					</a></li>
				</ul>
			</li>
			<li><a href="{{url('dtpengunjung')}}"><em class="fa fa-bar-chart">&nbsp;</em> Jumlah Pengunjung</a></li>
			<li><a href="{{url('profil')}}"><em class="fa fa-user">&nbsp;</em>Profil</a></li>
			<li><a href="{{url('login')}}"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
			
		</ul>
	</div><!--/.sidebar-->