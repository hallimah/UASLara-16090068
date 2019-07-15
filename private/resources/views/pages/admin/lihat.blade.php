@extends('pages.admin.dashboard')

@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
		<div class="col-sm-9">
            <h1 class="page-header">Semua Postingan</h1>
        </div>
    </div>
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-container">
				{!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Cari Artikel']) !!}
                </div>
            </div>
			
			<div class="col-xs-6 col-md-3">
                <div class="panel panel-container">
				{{Form::select("kategori",['novel' => 'Novel', 'komik' => 'Komik', 'film' => 'Films'], null,
                                ["class" => "form-control", "placeholder" => "--- Pilih Kategori ---"])}}
                </div>
            </div>
        </div>
    </form>
	
	
	
	<div class="row">
        <div class="col-sm-9">
			<div class="panel panel-container">
				<div class="panel-body">
				@foreach($blogs as $blog)
					<div class="article border-bottom">
						<div class="row">
						
							<div class="col-xs-10 col-md-10">
							
								<h4><a href="{{ url('list-post/view') }}/{{ $blog->id }}">{{ $blog->judul}}</a></h4>
									<p>{{ substr($blog -> isi_berita, 0, 100) }}</p>
									
									<div class="col-lg-1 no-padding">
										<div class="text-muted"><a href="{{ url('list-post/view') }}/{{ $blog->id }}"><p>View</p></a></div>
									</div>
									<div class="col-lg-1 no-padding">
										<div class="text-muted"><a href="{{ url('list-post/edit') }}/{{ $blog->id }}"><p>Edit</p></a></div>
									</div>
									<div class="col-lg-1 no-padding">
										<div class="text-muted"><a href="{{ url('list-post/delete') }}/{{ $blog->id }}"><p>Delete<p></a></div>
									</div>
							</div>
							</div>
						</div>
						@endforeach
					</div>
			
				</div>
			</div>
        </div>
	</div>

</div>
@stop

@section('footer')
<div class=" footer col-sm-12">
    <p class="back-link">My <a href="https://www.medialoot.com">Blog's</a></p>
</div>
@stop