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

<h1 class="text-center"> - Usuaris - </h1> <br/>


<div class="container" style="text-align: justify">


    <div class="row">
      <div class="col-md-10 mx-auto">
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th>Nom</th>
              <th>Cognom</th>
              <th>País</th>
              <th>Ciutat</th>
              <th>Telèfon</th>
              <th>@lang ("Email")</th>
            </tr>
          </thead>
          <tbody>

            @foreach($data as $b)
                <tr>
                  <td>{{$b->name}}</td>
                  <td>{{$b->surname}}</td>
                  <td>{{$b->country}}</td>
                  <td>{{$b->city}}</td>
                  <td>{{$b->tel}}</td>
                  <td>{{$b->email}}</td>
                </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>

</div>





</body>

</html>
