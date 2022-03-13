@extends('navbar')

@section('activebar')
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="bio">About</a>
        </li>
@endsection

@section('link_rel')
    <title>Bio Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bioPg.css">
@endsection

@section('content')
    <div class="tb">
    <div class="img"></div>
    <br><br><br>
    <table border="5" cellpadding="5" align="center" width="700" height="250">
        <tr>
            <td bgcolor="silver">Nama</td>
            <td>Satria Alief Pratama Sofyan</td>            
        </tr>
        <tr>
            <td bgcolor="silver">Tempat/Tangal Lahir</td>
            <td>Malang, 06-06-2002</td>
        </tr>
        <tr>
            <td bgcolor="silver">Alamat</td>
            <td>Joyogrand Merjosari</td>
        </tr>
        <tr>
            <td bgcolor="silver">Agama</td>
            <td>Islam</td>
        </tr>
        <tr>
            <td bgcolor="silver">Jenis Kelamin</td>
            <td>Laki-Laki</td>
        </tr>
        <tr>
            <td bgcolor="silver">Okupasi</td>
            <td>Mahasiswa</td>
        </tr>
        <tr>
            <td bgcolor="silver">Hobby</td>
            <td>Gunpla</td>
        </tr>
    </table>
    </div>
    <footer class="text">@Copyright SATR Digital</footer>
@endsection