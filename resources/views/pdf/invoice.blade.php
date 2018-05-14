<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>

<!-- Mostrar els usuaris ordenats alfabèticament. -->

<h1 class="text-center"> - Usuaris - </h1> <br/>

<div class="container">

    <div class="row">
        <table class="table table-striped">

          <thead>
            <tr>
              <th>DNI</th>
              <th>Nom</th>
              <th>Cognom</th>
              <th>Telèfon</th>
              <th>Ciutat</th>
            </tr>
          </thead>
          <tbody>

              @foreach($data as $a)

                <tr>

                  <td>{{$a->dni}}</td>

                  <td>{{$a->name}}</td>

                  <td>{{$a->surname}}</td>

                  <td>{{$a->tel}}</td>

                  <td>{{$a->city}}</td>
                </tr>

              @endforeach

          </tbody>
        </table>
    </div>

</div>

</body>

</html>
