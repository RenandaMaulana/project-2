<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Event</title>
</head>

<body>
    <div class="table-responsive">
        <table border="1" cellpadding="2">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>jumlah pembayaran</th>
                <th>Metode Pembayaran</th>
                <th>dibuat</th>
                <th>update</th>
            </thead>
            @foreach ($Kas as $key => $kas)
                <!--$user pertama terdapat pada models, dan user kedua variabel-->
                <tbody>
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $kas->name }}</td>
                        <td>{{ $kas->email }}</td>
                        <td>{{ $kas->jumlah_pembayaran }}</td>
                        <td>{{ $kas->metode_pembayaran }}</td>
                        <td>{{ $kas->created_at }}</td>
                        <td>{{ $kas->updated_at }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <script type="text/javascript">
            window.print();
        </script>
    </div>

</body>

</html>
