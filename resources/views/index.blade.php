<table border=1>
    <th>nama</th>
    <th>id_kategori</th>
    <th>qty</th>
    <th>harga_beli</th>
    <th>harga_jual</th>
    <th>keterangan</th>
        @foreach($produk as $p)
        <tr><td>{{ $p->nama }}</td>
        <td>{{ $p->id }}</td> 
        <td>{{ $p->qty }}</td>
        <td>{{ $p->harga_beli }}</td>
        <td>{{ $p->harga_jual }}</td>
        <td>{{ $p->keterangan }}</td>
    </tr>@endforeach 
    </table>