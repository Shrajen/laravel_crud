<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <table class="table">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach($customer as $data)
              <tr>
                  <td scope="row">{{$data->name}}</td>
                  <td>{{$data->email}}</td>
                  <td>{{$data->password}}</td>
                  <td><a href="{{url('/delete')}}/{{$data->customer_id}}"><button type:submit class="btn btn-warning">Delete</button></a></td>
                  <td><a href="{{url('/edit')}}/{{$data->customer_id}}"><button type:submit class="btn btn-info">Edit</button></a></td>
              </tr>
              @endforeach
          </tbody>
      </table>
   
  </body>
</html>