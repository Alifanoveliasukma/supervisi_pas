<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login Aplikasi Supervisi</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- ')}}FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- ')}}GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
	</h')}}ead>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{asset('admin/assets/img/logo-dark.png')}}" alt="Klorofil Logo"></div>
								<p class="lead">Login</p>
							</div>
							<form class="form-auth-small" action="/dashboard" method="POST">
								@csrf
								
								<div class="form-group">
                                    
									<input name="nip" type="number" class="form-control" id="signin-email" placeholder="NIP">
								</div>
								<div class="form-group">

									<input name="password" type="password" class="form-control" id="signin-password" value="alifacantik" placeholder="Password">
								</div>
								@foreach($users as $u)
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Masuk sebagai</label>
                                    <select name="role" class="form-control" id="exampleFormControlSelect1">
                                        <option>Pilih</option>
                                        <option value="kepsek" @if($u->role == 'kepsek') selected @endif>Kepala Sekolah</option>
									    <option value="kurikulum" @if($u->role == 'kurikulum') selected @endif>kurikulum</option>
                                        <option value="guru" @if($u->role == 'guru') selected @endif>Guru</option>
                                    </select>
                                </div>
								<div class="form-group clearfix">

								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>

							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Aplikasi Supervisi</h1>
							<p>by Alifa Novelia Sukma </p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	<!-- END WRAPPER -->
</body>

</html>