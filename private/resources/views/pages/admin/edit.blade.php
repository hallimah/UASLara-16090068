@extends('pages.admin.dashboard')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
{!! Form::model($blogs, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['list-post.update', $blogs->id]]) !!}
    <div class="row">
		<div class="col-sm-9">
            <h1 class="page-header">Edit Article</h1>
        </div>
        <div class="col-xs-6 col-md-3">
        {!! Form::submit('Edit', ['class' => 'page-header btn btn-lg btn-primary']) !!}
        {!! Form::submit('Batal', ['class' => 'page-header btn btn-lg btn-danger']) !!}
        </div>
    </div>
    
  <!-- <form action="" method="post"> -->
	
        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-container">
                {!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Tulis Judul Artikel!']) !!}
                </div>
                <div class="panel panel-container">
				{!! Form::textarea('isi_berita', null, ['class' => 'form-control', 'placeholder' => 'Isi Artikel']) !!}
                </div>
            </div>

            <div class="col-xs-6 col-md-3">
                <div class="panel panel-container">
				{{Form::select("kategori",['novel' => 'Novel', 'komik' => 'Komik', 'film' => 'Films'], null,
                                ["class" => "form-control", "placeholder" => "--- Pilih Kategori ---"])}}

                                {!! Form::hidden('foto', null, ['class' => 'form-control']) !!}
                            {!! Form::hidden('id', null, ['class' => 'form-control']) !!}
					{!! Form::file('foto', ['class' => '', 'onchange'=>'readURL(this);']) !!}
                    <img id="blah" src='http://placehold.it/180' alt="your image" /> 
                    
                </div>
            </div>
        </div>
		{!! Form::close() !!}
 <!--</form> -->
</div>
@stop

@section('footer')
<div class=" footer col-sm-12">
    <p class="back-link">My <a href="https://www.medialoot.com">Blog's</a></p>
</div>
@stop

