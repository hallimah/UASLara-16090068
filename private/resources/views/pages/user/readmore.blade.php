@extends('pages.user.viewuser')
@section('main')
	<!-- Features -->
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
						<div class="blog_title">{{ $blog -> judul }}</div>
						<div class="blog_meta">
							<ul>
								<li>Post on <a href="#">{{ $blog->created_at }}</a></li>
								<li>By <a href="#">admin</a></li>
							</ul>
						</div>
						<div class="blog_image"><img src="{{ URL::to('/public/images/post') }}/{{ $blog->foto }}" alt=""></div>
						<p>{{ $blog->isi_berita }}</p>
					</div>
					<div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						
						<div class="blog_social ml-lg-auto">
							<span>Share: </span>
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- Comments -->
					<div class="comments_container">
						<div class="comments_title"><span>30</span> Comments</div>
						@foreach($blog as $bloge)
						<ul class="comments_list">
							<li>
								<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
									<div class="comment_image"><div><img src="images/comment_1.jpg" alt=""></div></div>
									<div class="comment_content">
										<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
											<div class="comment_author"><a href="#">{{ $bloge->nama }}</a></div>
											<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
											<div class="comment_time ml-auto">{{ $bloge->created_at }}</div>
										</div>
										<div class="comment_text">
											<p>{{ $bloge->komentar }}</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
						@endforeach
						<div class="add_comment_container">
							<div class="add_comment_title">Write a comment</div>
								<!--
{!! Form::open(array('readmore' => 'CommentController@store', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data')) !!} -->
							<form action="#" class="comment_form">
							<div class="row"><!--
							{!! Form::hidden('id', null, ['class' => 'comment_input']) !!} -->
									<div class="col-md-6 input_col">
										<div class="form_title">Name*</div><!--
										{!! Form::text('nama', null, ['class' => 'comment_input', 'placeholder' => 'Nama*']) !!} -->
									</div>
								</div>
								<div>
									<div class="form_title">Review*</div><!--
									{!! Form::textarea('komentar', '', ['class' => 'comment_input comment_textarea' . ( $errors->has('isi_berita') ? ' is-invalid' : '' ),
                   'placeholder' => 'Komentar', 'required']) !!} -->
								</div>	
								<div><!--
								{!! Form::submit('Post', ['class' => 'comment_button trans_200"']) !!} -->
								</div>
								<!--{!! Form::close() !!}-->
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