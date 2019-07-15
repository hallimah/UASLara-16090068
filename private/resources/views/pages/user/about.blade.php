@extends('pages.user.viewuser')

@section('main')
<link href="{{asset('user/plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/blog_single.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/blog_single_responsive.css')}}">

<script src="{{asset('user/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('user/js/blog_single.js')}}"></script>



<div class="blog">
		<div class="container">
			<div class="row">
			<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title"><center>My Blog's</center></div>
						
						<p>Selamat datang,</p>
						<p>

Terima kasih karena sudah berkunjung! Panggil saja aku Far. Aku memulai Far's Books Space untuk melatih kemampuan menulisku sekaligus untuk membagikan pendapatku tentang berbagai buku yang sudah aku baca kepada orang-orang. Ulasan buku dalam Far's Books Space sendiri ditulis dalam Bahasa Indonesia. Untuk ulasan dalam Bahasa Inggris, biasanya hanya tersedia untuk buku berbahasa Inggris dan akan aku bagikan di akun Goodreads & Instagram-ku.

Aku adalah tipe pembaca "omnivora" yang  menaruh minat  pada berbagai macam buku yang bisa aku baca baik fiksi maupun non-fiksi. Aku memang tidak terlalu terikat pada genre tertentu. Dalam memilih buku untuk dibaca, aku cenderung memanfaatkan instingku dan juga mempertimbangkan mood-ku saat itu. Saat ini aku juga tengah membabat tumpukan buku di rak to-be-read-ku dengan mengikuti berbagai tantangan baca.

Jangan malu dan ragu untuk berkomentar dan mengemukakan pendapatmu tentang hal-hal yang berkaitan dengan buku di blog ini! Kritik dan saran demi kebaikan blog ini juga diterima dengan tangan terbuka.

Aku dapat dihubungi lewat berbagai platform di bawah ini (Let's be friends!); 
</p>
						
						
					</div>
					
					
				</div>
				
				
					<!-- Blog Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">
			<div class="sidebar_section">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
							<div class="sidebar_section_title">Profil Penulis</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="user/images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><h5>Nur Halimatussa'diyah</h5>
										<p>hallimahnur22@gmail.com</p>
										</div>
										<div class="latest_date"><h5>Tentang</h5>
										<p>Tentangku Tentangku Tentangku Tentangku Tentangku.</p></div>
									</div>
								</div>

								</div>

							</div>
						</div>
			</div>
		
			
			</div>
			

		</div>
	</div>

@stop
@section('footer')
<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="col">
				<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
					<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All Blog's <i class="fa fa-heart-o" aria-hidden="true"></i> My <a href="https://colorlib.com" target="_blank">Blog's</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					<div class="ml-lg-auto cr_links">
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
            <br><br>
		</div>
	</footer>
</div>
@stop