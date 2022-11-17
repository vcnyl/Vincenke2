<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Contoh tutorial CRUD Laravel 9</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Data Produk</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('produk.create') }}"> Tambah Data</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>nama</th>
<th>id</th>
<th>qty</th>
<th>harga_beli</th>
<th>harga_jual</th>
<th>keterangan</th>
<th width="280px">Action</th>
</tr>
@foreach ($produk as $p)
<tr>
<td>{{ $p->nama }}</td>
<td>{{ $p->id }}</td>
<td>{{ $p->qty }}</td>
<td>{{ $p->harga_beli }}</td>
<td>{{ $p->harga_jual }}</td>
<td>{{ $p->keterangan }}</td>
<td>
<form action="{{ route('produk.destroy',$p->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('produk.edit',$p->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
</body>
</html>