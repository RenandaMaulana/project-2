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
                <th>Resi_ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Event</th>
                <th>Tanggal Acara</th>
                <th>Selesai Acara</th>
            </thead>
            @foreach ($Event as $key => $event)
                <!--$user pertama terdapat pada models, dan user kedua variabel-->
                <tbody>
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $event->resi_id }}</td>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->email }}</td>
                        <td>{{ $event->event }}</td>
                        <td>{{ $event->tanggalacara }}</td>
                        <td>{{ $event->selesaiacara }}</td>
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
