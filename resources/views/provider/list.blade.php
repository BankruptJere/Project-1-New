<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Parts Providers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
<h1 class="text-center"> Providers </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
           @foreach($provider as $provider)
           <tr>
             <th scope="row">{{$provider->id}}</th>
             <td> {{$provider->name}} </td>
             <td> {{$provider->address}} </td>
            </tr>
           @endforeach
        </tbody>
      </table>


     <br> <a href="{{route('provider.create')}}" class="btn btn-success"> Add More </a>

</body>

</html>




