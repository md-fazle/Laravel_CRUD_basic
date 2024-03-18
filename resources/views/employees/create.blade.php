<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Employee Create Form</title>
</head>
<body>
    <div  class="container-fluid col-sm-6">
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul> 

            @endif
        </div>
        <div class="container">
            <h1 class="text-center mb-4">Create Employees</h1>
            
            <form action="{{route('employees.store')}}" method="POST">
              @csrf
              @method('post')
          
              <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" placeholder="name">
              </div>
          
              <div class="form-group">
                <label>Dept:</label>
                <input type="text" class="form-control" name="Dept" placeholder="Dept">
              </div>
          
              <div class="form-group">
                <label>Code:</label>
                <input type="text" class="form-control"  name="code" placeholder="code">
              </div>
          
              <div class="form-group">
                <label>Description:</label>
                <input type="text" class="form-control"  name="description" placeholder="description">
              </div>
          
              <div class="form-group">
                <label>Salary:</label>
                <input type="text" class="form-control" name="salary" placeholder="Salary">
              </div>
          
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          

    </div>
    
</body>
</html>