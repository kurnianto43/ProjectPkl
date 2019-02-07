<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Teknisi Cv.Dzaki Usaha Mandiri</title>
    
      <style>
        body 
        {
            font-family: sans-serif;
            font-size: 15px;

        }
        table
        {
            width: 100%;
        }

        table, th, td
        {
            border : 1px solid black;
            border-collapse: collapse;
            opacity: 0.95;

        }

        th, td
        {
            padding: 10px;
            text-align: center;
        }


    </style>

</head>

<body>
        <h3 align="center" class="grid-item" style="margin-bottom: 30px;">CV.Dzaki Usaha Mandiri</h3>
        <h4>Data Teknisi</h4>  
    
    <table align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Teknisi</th>
                <th>Nama Teknisi</th>
                <th>Alamat</th>
                <th>Nomor Hp</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;?>
            @foreach ($teknisis as $teknisi)
            <?php $no++ ;?>
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $teknisi -> kode_teknisi }}</td>
                <td>{{ $teknisi -> nama_teknisi }}</td>
                <td>{{ $teknisi -> alamat_teknisi}}</td>
                <td>{{ $teknisi -> nomor_hp}}</td>
            </tr>
            @endforeach                           
        </tbody>
    </table>
    
</body>
</html>
