<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Edit Data Post - SantriKoding.com</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head> 
<body style="background: lightgray">  
    <div class="container mt-5 mb-5"> 
        <div class="row"> 
            <div class="col-md-12"> 
                <div class="card border-0 shadow rounded"> 
                    <div class="card-body"> 
                        <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data"> 
                            @csrf 
                            @method('PUT')  
                            <div class="form-group"> 
                                <label class="font-weight-bold">Nama</label> 
                                <input type="text" class="form-control" name="nama" value="{{ old('nama', $produk->nama) }}"> 
                            </div>  

                            <div class="form-group"> 
                                <label class="font-weight-bold">id</label> 
                                <input name="harga" type="text" class="form-control" placeholder="id" value="{{ old('id', $produk->id) }}">  
                            </div>  

                            <div class="form-group"> 
                                <label class="font-weight-bold">qty</label> 
                                <input name="qty" type="text" class="form-control" placeholder="qty" value="{{ old('qty', $produk->qty) }}">  
                            </div> 

                            <div class="form-group"> 
                                <label class="font-weight-bold">harga_beli</label> 
                                <input name="harga_beli" type="text" class="form-control" placeholder="harga_beli" value="{{ old('harga_beli', $produk->harga_beli) }}">  
                            </div> 

                            <div class="form-group"> 
                                <label class="font-weight-bold">harga_jual</label> 
                                <input name="harga_jual" type="text" class="form-control" placeholder="harga_jual" value="{{ old('harga_jual', $produk->harga_jual) }}">  
                            </div> 

                            <div class="form-group"> 
                                <label class="font-weight-bold">keterangan</label> 
                                <input name="keterangan" type="text" class="form-control" placeholder="keterangan" value="{{ old('keterangan', $produk->keterangan) }}">  
                            </div> 
                           
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button> 
                            <button type="reset" class="btn btn-md btn-warning">RESET</button> 
                            </form>  
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body> 
</html>