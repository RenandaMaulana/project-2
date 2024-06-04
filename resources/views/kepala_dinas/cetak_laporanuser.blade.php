<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cetak laporan User</title>
</head>

<body>
    <div class="table-responsive">
        <table border="1" cellpadding="2">
            <thead>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>dibuat</th>
            </thead>
            @foreach ($User as $key => $user)
                <!--$user pertama terdapat pada models, dan user kedua variabel-->
                <tbody>
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <script type="text/javascript">
            window.print();
        </script>

        <div>
</body>

</html>
