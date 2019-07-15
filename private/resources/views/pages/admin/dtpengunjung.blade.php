@extends('pages.admin.dashboard')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
		<div class="col-sm-9">
            <h1 class="page-header">Data Pengunjung</h1>
        </div>
    </div>
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-container">
                    <input type="text" name="cari" class="form-control" placeholder="Cari">
                </div>
            </div>

            <div class="col-xs-6 col-md-3">
                <div class="panel panel-container">
                    <select name="kategori" class="form-control">
                        <option value="0">Kategori</option>
                        <option value="1">Novel</option>
                        <option value="2">Komik</option>
                        <option value="3">Films</option>
                    </select>
                </div>
            </div>
        </div>
    </form>

<table class="table table-condensed">
    <thead>
      <tr>
        <th>No</th>
        <th>Article</th>
        <th>Category</th>
        <th>View</th>
        <th>Comment</th>
        <th>Share</th>
      </tr>
    </thead>
    <tbody>
    
      <tr>
        <td>1</td>
        <td>Kono Oto Tomare!</td>
        <td>Comic</td>
        <td>14</td>
        <td>2</td>
        <td><a href="">edit </a> <a href=""> delete</a></td>
      </tr>
    </tbody>
  </table>
</div>
@stop

@section('footer')
<div class=" footer col-sm-12">
    <p class="back-link">My <a href="https://www.medialoot.com">Blog's</a></p>
</div>
@stop