<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Shop with cyrpto</title>
</head>

<body>

    <div class="container mt-3">
        <div class="card" style="width: 18rem;">
            <img src="https://i.ibb.co/kcsyPTV/wireless.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Mouser Wireless</h5>
                <p class="card-text"> <img src="https://i.ibb.co/CbWBKKZ/bitcoin.png" width="25px"> <b>BTC 0.00048</b>  </p>
    
                  <form action="{{route('ProsesBeli')}}" method="post">
                    @csrf
                    <input type="text" name="asalaja" class="form-control" value="blankaja" hidden>
                    <button type="submit" class="btn btn-primary">Buy</button>
                  </form>

            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
