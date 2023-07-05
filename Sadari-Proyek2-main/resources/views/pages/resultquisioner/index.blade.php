<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data resultquisioner</h1>
        <a href="{{ route('resultquisioner.create') }}" class="btn btn-primary mb-2">Tambah Data</a>

        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>hasil</th>
                        <th>Aksi</th>
                    </thead>

                    <tbody>
                        @foreach ($result_quisioner as $no => $hasil)
                        <tr>
                            <td>{{ $no+1 }}</td>
                            <td>{{ $hasil->hasil }}</td>
                            <td>

                                <form action="{{ route('resultquisioner.destroy', $hasil->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-success btn-sm" href="{{ route('resultquisioner.edit', $hasil->id) }}">edit</a>
                                    <button class="btn btn-danger btn-sm">delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>