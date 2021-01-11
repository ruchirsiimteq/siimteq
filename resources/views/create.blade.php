<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Create Data</h2>
      <form method="post" action="{{route('diamonds.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Certi:</label>
            <input type="text" class="form-control" name="diamond_cert">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Diamond Type:</label>
              <input type="text" class="form-control" name="diamond_type">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Branch:</label>
              <input type="text" class="form-control" name="branch">
            </div>
          </div>
    
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
            <input type="submit" class="btn btn-success" value="Back" />
          </div>
        </div>
      </form>
      <form action="{{url('post')}}">
        
    </form>
    </div>
  </body>
</html>