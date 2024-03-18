<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Employee table</title>
</head>
<body>
    <div class="container col-sm-8">
        <h1>This my Employee file</h1>
          <table class="table">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Dept</th>
                  <th scope="col">Code</th>
                  <th scope="col">Description</th>
                  <th scope="col">Salary</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              @foreach($employees as $employee)
                <tbody>  
                    <tr>
                      <td>{{$employee->id}}</td>
                      <td>{{$employee->name}}</td>
                      <td>{{$employee->Dept}}</td>
                      <td>{{$employee->code}}</td>
                      <td>{{$employee->description}}</td>
                      <td>{{$employee->salary}}</td>
                      <td>
                        <a href="{{route('employees.edit',['employee'=>$employee])}}">Edit</a>
                      </td>
                      <td>
                        <form method="POST" action="{{route('employees.destroy',['employee'=>$employee])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                          </form>
                      </td>
                    </tr>
                </tbody>
              @endforeach
          </table>
          <div>
            <a class="btn btn-primary" href="{{route('employees.create')}}" role="button">Create</a>
        </div>
    </div>
    <div class="container col-md-5">
           @if(session()-> has('success'))
              <div>
                   {{session('success')}}
              </div>
           @endif
    </div>
</body>
</html>