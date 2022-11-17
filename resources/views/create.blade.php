<!DOCTYPE html> 
<html lang="id"> 
<head> 
<meta charset="UTF-8"> 
<title>CRUD</title> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" > 
</head> 
<body> 
<div class="container mt-2"> 
<div class="row"> 
<div class="col-lg-12 margin-tb"> 
<div class="pull-left mb-2"> 
<h2>Add Produk</h2> 
</div> 
<div class="pull-right"> 
<a class="btn btn-primary" href="{{ route('produk.index') }}"> Back</a> 
</div> 
</div> 
</div> 
@if(session('status')) 
<div class="alert alert-success mb-1 mt-1"> 
{{ session('status') }} 
</div> 
@endif 
<form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data"> 
@csrf 



<div class="row"> 
<div class="col-xs-12 col-sm-12 col-md-12"> 
<div class="form-group"> 
<strong>Nama:</strong> 
<input type="text" name="nama" class="form-control" placeholder="nama"> 
@error('nama') 
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> 
@enderror 
</div> 
</div> 

<div class="col-xs-12 col-sm-12 col-md-12"> 
<div class="form-group"> 
<strong>id:</strong> 
<input type="text" name="id" class="form-control" placeholder="id"> 
@error('id') 
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> 
@enderror 
</div> 
</div>

<div class="col-xs-12 col-sm-12 col-md-12"> 
<div class="form-group"> 
<strong>qty:</strong> 
<input type="text" name="qty" class="form-control" placeholder="qty"> 
@error('qty') 
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> 
@enderror 
</div> 
</div>


<div class="col-xs-12 col-sm-12 col-md-12"> 
<div class="form-group"> 
<strong>harga_beli:</strong> 
<input type="text" name="harga_beli" class="form-control" placeholder="harga_beli"> 
@error('harga_beli') 
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> 
@enderror 
</div> 
</div>


<div class="col-xs-12 col-sm-12 col-md-12"> 
<div class="form-group"> 
<strong>harga_jual:</strong> 
<input type="text" name="harga_jual" class="form-control" placeholder="harga_jual"> 
@error('harga_jual') 
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> 
@enderror 
</div> 
</div>

<div class="col-xs-12 col-sm-12 col-md-12"> 
<div class="form-group"> 
<strong>keterangan:</strong> 
<input type="text" name="keterangan" class="form-control" placeholder="keterangan"> 
@error('keterangan') 
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> 
@enderror 
</div> 
</div>

<button type="submit" class="btn btn-primary ml-3">Submit</button> 
</div> 
</form> 
</body> 
</html> 