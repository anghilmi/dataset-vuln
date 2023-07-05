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
        <h1 class="text-center mb-5">Data Mahasiswa</h1>
        <a href="{{ route('resultquisioner.index') }}" class="btn btn-primary mb-2">Data Quisioner</a>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('resultquisioner.update', $result_quisioner->id ) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="hasil" class="form-label">hasil</label>
                        <input value="{{ $result_quisioner->hasil }}" type="text" name="hasil" class="form-control" id="hasil">
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">user_id</label>
                        <input value="{{ $result_quisioner->user_id }}" type="text" name="user_id" class="form-control" id="user_id">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>


</html>