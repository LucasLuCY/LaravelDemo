<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Employee List <a href="/employees/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($employeeList as $key=>$value)
    <tr>
        <td>{{ $value['firstName'] }}</td>
        <td>{{ $value['lastName'] }}</td>
        <td>
            <span class="pull-right">
                <form method="post" action="/employees/{{ $value['id'] }}"> 
                    <a href="/employees/{{ $value['id'] }}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                </form>
            </span>
        </td>
    </tr>
    @endforeach
    
    {{-- <tr>
    <td>firstName1 {{ $value['firstName'] }}</td>
        <td>lastName1</td>
        <td>
            <span class="pull-right">
                <form method="post" action="/employees/1"> 
                    <a href="/employees/1/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                </form>
            </span>
        </td>
    </tr>

    <tr>
        <td>firstName2</td>
        <td>lastName2</td>
        <td>
            <span class="pull-right">
                <form method="post" action="/employees/2"> 
                    <a href="/employees/2/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                </form>
            </span>
        </td>
    </tr>

    <tr>
        <td>firstName3</td>
        <td>lastName3</td>
        <td>
            <span class="pull-right">
                <form method="post" action="/employees/3"> 
                    <a href="/employees/3/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                </form>
            </span>
        </td>
    </tr> --}}


    </tbody>
  </table>
</div>

</body>
</html>