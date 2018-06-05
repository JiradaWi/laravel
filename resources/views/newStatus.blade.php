<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  @include('navbar')

  @if(isset($status))
  <div class="container">
    <h1>New Status</h1>
    <form action="/updateStatus/{{$status->statusId}}">
      <p>
        Status Name:
        <input type="text" name="name" required class="form-control" value="{{$status->statusName}}">
      </p>
      <p>
        Description:
        <textarea name="description" class="form-control">  {{$status->description}}</textarea>
      </p>
      <div style="text-align:center">
        <input type="submit" class="btn btn-success">
      </div>
    </form>

  </div>
  @else
  <div class="container">
    <h1>New Status</h1>
    <form action="/createStatus">
      <p>
        Status Name:
        <input type="text" name="name" required class="form-control">
      </p>
      <p>
        Description:
        <textarea name="description" class="form-control"></textarea>
      </p>
      <div style="text-align:center">
        <input type="submit" class="btn btn-success">
      </div>
    </form>
  </div>
  @endif

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>