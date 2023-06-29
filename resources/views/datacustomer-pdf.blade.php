<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Customer Teleport</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>ID Pelanggan</th>
    <th>Nama</th>
    <th>Category</th>
    <th>PIC</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th>Bandwidht</th>
    <th>BTS</th>
    <th>IP</th>
    <th>Status</th>
    <th>Tanggal Berlangganan</th>
    
  </tr>
  @php
      $no=1;
  @endphp
  @foreach ($data as $row )
  <tr>
                <td>{{$no++}}</td>
                <td> {{$row->id_customer}}</td>
                <td>{{$row->nama}}</td>
                <td>{{$row->category}}</td>
                <td>{{$row->pic}}</td>
                <td>{{$row->telepon}}</td>
                <td>{{$row->alamat}}</td>
                <td>{{$row->bandwidht}}</td>
                <td>{{$row->bts->bts_name}}</td>
                <td>{{$row->ip}}</td>
                <td>{{$row->status}}</td>
                <td>{{$row->tanggal_berlangganan}}</td>
               
  </tr>
  
  @endforeach
 
</table>

</body>
</html>


