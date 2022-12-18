<!DOCTYPE html>
<html lang="en">
<head>
  <title>TVL Grading</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

</head>
<body>
  
   <div class="row mt-4">
       <div class="col-4  d-flex justify-content-center"> 
       <img src="/images/amlac.png" class="w-25 h-15"></img>
       </div>
       <div class="col-4">
            <div class="container mt-5 text-center">
                  <h3>Academic Track (Except Immersion)</h3>
              </div>
       </div>
       <div class="col-4 d-flex justify-content-center">
            <img src="/images/Logo-DepEd-1.png" class="w-25 h-15"></img>
       </div>

   </div>
          
       <div class="container mt-5">
          
               <div class="table-responsive">
               <a href="/Grading"><input type="button" value="Back" class="btn btn-warning px-4 mb-3"></a> 
                      <table class="table table-bordered table-striped table-hover table-sm">
                                <thead class="">
                                <tr>
                                    <th class="text-center" rowspan="2" colspan="5">FIRST QUARTER</th>
                                    <th class="" rowspan="2" colspan="13">Grade & Section: </th>
                                    <th colspan="13">TEACHER:</th>
                                    <th colspan="5">SUBJECT:</th>
                                    <tr>
                                        <th colspan="13">SEMESTER:</th>
                                        <th colspan="5">TRACK:</th>
                                    </tr>
                                </tr>
                                <tr>
                                        <th rowspan="2" colspan="5">LEARNER'S NAMES</th>
                                        <th colspan="13" class="text-center">WRITTEN WORK (25%)</th>
                                        <th colspan="13" class="text-center">PERFORMANCE TASK (50%)</th>
                                        <th colspan="3">QUARTERLY ASSESMENT (25%)</th>
                                        <th rowspan="3">INITIAL GRADE</th>
                                        <th rowspan="3">QUARTERLY GRADE</th>
                                </tr>
                                <tr class="text-center">
                                        <!--Written Task  -->
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                        <th>TOTAL</th>
                                        <th>PS</td>
                                        <th>WS</th>
                                        <!-- performance task -->
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                        <th>TOTAL</th>
                                        <th>PS</td>
                                        <th>WS</th>
                                        <!-- Quarterly Assesment  -->
                                        <th>1</th>
                                        <th>PS</th>
                                        <th>WS</th>
                                </tr>
                                <tr class="text-center">
                                        <th colspan="5">HPG</th>
                                        <!--Written Task  -->
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th name="wtotal" id="wtotal"></th>
                                        <th value="100" id="wps" name="wps">100</th>
                                        <th value="25%" id="wws" name="wws">50%</th>
                                        <!-- performance task -->
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th name="ptotal" id="ptotal"></th>
                                        <th value="100" id="pps" name="pps">100</th>
                                        <th value="50%" id="pws" name="pws">50%</th>
                                        <!-- Quarterly Assesment  -->
                                        <th><input type="text" style="width:35px"; min="1" max="1000"></th>
                                        <th></th>
                                        <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <!-- Written Task -->
                                    <td colspan="5">Darlucio, John</td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <!-- Performance Task -->
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <!-- Quarterly -->
                                    <td><input type="text" style="width:35px"; min="1" max="1000" class=""></td>
                                    <td></td>
                                    <td></td>
                                    <!-- Initial Grade -->
                                    <td></td>
                                    <!-- Quarterly Grade -->
                                    <td></td>
                                </tr>

                                
                                
                                </tbody>
                            </table>
              </div>
    </div>

                </div>
            </div>
      

       </div>
       <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
       <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
       <script>
          $(document).ready( function () {
            $('#myTable').DataTable();
                } );
       </script>
     
</body>
</html>
