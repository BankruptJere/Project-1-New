<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Smartphone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
<h1 class="text-center"> Printers </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Printer Resolution</th>
            <th scope="col">Price</th>
            <th scope="col">Parts Provider</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
           @foreach($printers as $printer)
           <tr>
             <th scope="row">{{$printer->id}}</th>
             <td> {{$printer->name}} </td>
             <td> {{$printer->print_res}} </td>
             <td> {{$printer->price}} </td>
             <td> {{$printer->provider->name}} </td>
             <td> 
                <a href="{{route('printer.edit',$printer->id)}}" class="btn btn-success"> Edit </a>
                <form action="{{route('printer.delete', $printer->id)}}" method="POST"> 
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger"> Delete </button>
                </form>
             </td>
            </tr>
           @endforeach
        </tbody>
      </table>


     <br> <a href="{{route('index')}}" class="btn btn-success"> Add More </a>

</body>

</html>




