<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <title>Document</title>
</head>
<body>

<div class="row mt-4">
       <div class="col-4  d-flex justify-content-center"> 
       <img src="/images/amlac.png" class="w-25 h-15"></img>
       </div>
       <div class="col-4">
            <div class="container mt-5 text-center">
                  <h3>TVL/ Sports/ Arts and Design Track</h3>
              </div>
       </div>
       <div class="col-4 d-flex justify-content-center">
            <img src="/images/Logo-DepEd-1.png" class="w-25 h-15"></img>
       </div>

    <div class="talbe-responsive">
            <div class="container mt-5">     
            <a href="/Grading"><input type="button" value="Back" class="btn btn-warning px-4 mb-3"></a> 
                    <table class="table table-bordered table-striped table-hover table-sm" id="example">
                        <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Section</th>
                            <th>Professor</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                            <td>BSIT</td>
                            <td>SBIT1E</td>
                            <td>John </td>
                            <td><a href="">Edit</a></td>
                        </tr>
                        </tbody>
                    </table>
        </div>
    </div>

      <script>
        $(document).ready( function () {
    $('#example').DataTable();
} );
      </script>
</body>
</html>