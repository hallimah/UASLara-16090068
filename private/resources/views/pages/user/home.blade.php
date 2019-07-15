@extends('pages.user.viewuser')
@section('main')
	
	<!-- Home -->
	<div class="home warna">
	<br>
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(user/images/komik/fb/fb.jpg)"></div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(user/images/komik/kot/rrr.jpg)"></div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(user/images/komik/kny/kv.jpg)"></div>
				</div>
				
			</div>

			
		</div>
		

	</div>


	<!-- Popular Courses 1 -->
<hr>
	<div class="team ">
		<div class="counter_background parallax-window" data-parallax="scroll" data-image-src="user/images/courses_backgrounda.jpg" data-speed="0.8"></div>
		<center><h3 class="course_title"><a href="{{url('comics')}}">komik</a></h3></center>
			<div class="container ">
			<div class="row team_row">
				@foreach($blog as $blog)
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_body">
						<div class="course_image">
					<!--	<img src="{{ asset('public/images/post/gg.png') }}" />-->
						<img src="{{ asset('/public/images/post') }}/{{ $blog->foto }}" alt="Tidak ada gambar"></div><br>
							<div class="team_title"><a href="{{ url('list-post/view') }}/{{ $blog->id }}">{{$blog->judul}}</a></div>
							<div class="team_subtitle">
								<p>{{substr($blog -> isi_berita, 0, 100)}} <a href="{{ url('list-post/view') }}/{{ $blog->id }}">Read More</a> </p>
							</div>
							<div class="social_list">
								<ul>
									<div class="course_info">
										<i class="fa fa-eye" aria-hidden="true"><a href="">Views</a></i>
									</div>
									<div class="course_info">
										<i class="fa fa-comments" aria-hidden="true"><a href="">Comments </a></i>
									</div>
								</ul>
							</div>
						</div>
					</div>
				</div>
				@endforeach


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