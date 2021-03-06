<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Tagihan CV.Dzaki Usaha Mandiri</title>
    
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
        }


    </style>

</head>

<body> 
    
    <table align="center" style="margin-top: 30px;">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align: center;">
                                            <br>
                                            CV.DZAKI USAHA MANDIRI
                                            <br>
                                            <br>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="background-color: #ff7c7c;" colspan="2">Nomor Dokumen : {{ $tagihan -> nomor_dokumen }}</td>
                                            <td style="background-color: #ff7c7c;" colspan="2">Periode : {{ $tagihan -> periode_tagihan }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <br>
                                                Perusahaan : CV.Dzaki Usaha Mandiri <br>
                                                Alamat : Jalan Taruna Praja RT.004 RW.001 <br>
                                                Kel. Sungai Sipai Kec. Martapura <br>
                                                Kab. Banjar <br>
                                                081311125617 <br>
                                                Email : cv.dzaki@gmail.com
                                                <br>
                                                <br>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="background-color: #ff7c7c;" colspan="1">Total Item</td>
                                            <td  colspan="3">{{ $item }}</td>
                                        </tr>
                                        <tr>
                                            <td style="background-color: #ff7c7c;" colspan="1">Total Tagihan</td>
                                            <td colspan="3">Rp {{number_format ($data, 2, ',', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <br>
                                                <p style="margin-left: 450px">
                                                    Banjarbaru, {{ $tgl }}
                                                </p>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <p style="margin-left: 450px">Oktar Sulhan</p>
                                                <p style="margin-left: 450px">Direktur Utama</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                                <h3 style="margin-top: 5%">Rincian Item</h3>

                                <table>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Dokumen</th>
                                            <th>Nomor Asset</th>
                                            <th>Tipe Pekerjaan</th>
                                            <th>Biaya Perbaikan</th>
                                            <th>Tanggal Perbaikan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;?>
                                        @foreach ($tagihan->perbaikan as $perbaikan)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $perbaikan -> nomor_dokumen_perbaikan }}</td>
                                            <td>{{ $perbaikan -> kulkas -> nomor_asset  }}</td>
                                            <td>{{ $perbaikan -> tipepekerjaan -> kode_tipe_pekerjaan }}</td>
                                            <td>Rp {{ number_format ($perbaikan -> biaya_perbaikan, 2, ',', '.') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($perbaikan -> tanggal_perbaikan)->format('d/m/Y')}}</td>
                                        </tr>

                                       @endforeach
                                    </tbody>
                                </table>
    
</body>
</html>
