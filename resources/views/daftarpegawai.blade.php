@extends('layout.header')
@section('content')
<!DOCTYPE html>

<style>
    div .table-pelanggan {
    border-radius: 10px;
    box-shadow: 3px 3px 0 rgba(0,0,0,0.1);
    max-width: calc(100% - 2em);
    margin: 1em auto;
    overflow: hidden;
    width: 800px;
    border: none; 
    box-shadow: none;
    overflow: visible;
 }
 .header {
       background-color: transparent;
       color: white;
       font-size: 2em;
       font-weight: 700;
       padding: 0;
       text-shadow: 2px 2px 0 rgba(0,0,0,0.1);
       background-color: #0CC;
       color: white;
       font-size: 1.5em;
       padding: 1rem;
       text-align: center;
       text-transform: uppercase;
       border-radius: 10px 10px 0 0;  
    }
 #main_table {
     font-family: Arial, Helvetica, sans-serif;
     border-collapse: collapse;
     width: 100%;
   }
   #main_table tr th{
    text-align: center;
   }
   
   #main_table td, #main_table th {
     border: 1px solid #ddd;
     padding: 8px;
     text-align: center;
   }
   
   #main_table tr:nth-child(even){background-color: #f2f2f2;}
   
   #main_table tr:hover {background-color: #ddd;}
   
   #main_table th {
     padding-top: 12px;
     padding-bottom: 12px;
     text-align: left;
     background-color: #ddd;
     opacity: 0.4;
     color: black;
   }
   #main_table .gambarproduk{
    border-radius: 50%;
    height: 60px;
    width: 60px;
    border: 3px solid;
    border-color: transparent;
    margin: 0.5rem 0;
   }
    </style>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>            
            <div class="row tm-row">
                <div class="table-barang">
                    <div class="header">Daftar Pegawai</div>
                <table id="main_table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th>No Hp</th>
                            <th>Alamat Pegawai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no =1; @endphp
                        @foreach($data as $d)
                        <tr>
                        <td>{{$no}}</td>
                        <td>{{$d->nama_pegawai}}</td>
                        <td>{{$d->jabatan}}</td>
                        <td>{{$d->no_hp_pegawai}}</td>
                        <td>{{$d->alamat_pegawai}}</td>
                        </tr>
                        @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
                </div>
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    
                </div>             
            </div>            
            
@endsection