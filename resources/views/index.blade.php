<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <br><h2><b><center>Inventory</center></b></h2><br>
        
    <div class="container">
        <br />
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif

        <!-- for filter box -->
        <input class="form-control" id="myInput" type="text" placeholder="Filter Search From Here..."><br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Lot No</th>
                    <th>Certificate</th>
                    <th>Shape</th>
                    <th>Lab</th>
                    <th>Clr</th>
                    <th>Cla</th>
                    <th>Size</th>
                    <th>Meas 1</th>
                    <th>Meas 2</th>
                    <th>Meas 3</th>
                    <th>Status</th>
                </tr>
            </thead>

            <!-- for filter box -->
    <script>
        $(document).ready(function()
        {
            $("#myInput").on("keyup", function() 
            {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() 
                {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <?php  $count = 1; ?>
            <tbody id="myTable">

                @foreach($diamonds as $dia)
                
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td>{{$dia->diamond_lot_no}}</td>
                    <td>{{$dia->diamond_cert}}</td>
                    <td>{{$dia->shape->attribute_name}}</td>
                    <td>{{$dia->lab->attribute_name}}</td>
                    <td>{{$dia->clr->attribute_name}}</td>
                    <td>{{$dia->cla->attribute_name}}</td>
                    <td>{{$dia->diamond_size}}</td>
                    <td>{{$dia->diamond_meas1}}</td>
                    <td>{{$dia->diamond_meas2}}</td>
                    <td>{{$dia->diamond_meas3}}</td>
                    <td>{{$dia->diamond_status}}</td>  
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>