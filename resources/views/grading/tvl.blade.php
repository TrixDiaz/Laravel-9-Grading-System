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
    <script src="https://kit.fontawesome.com/99c966d584.js" crossorigin="anonymous"></script>
    <title>TVL Grading</title>
     <style>
        @media print {
            /*  Hide every other elemet  */
            body * {
                visibility: hidden;
            }

            /* Then displaying print container elements */
            .print-container, .print-container * {
                border: 0px;
                background-color: white;
                height: 100%;
                width: 100%;
                position:relative;
                top: 0;
                left: 0px;
                margin: 0px;
                padding: 0px;
                font-size: 15px;
                visibility: visible;
            }
           
            .print-logo, .print-logo * {
                visibility: visible;
            }
        }
     </style>
</head>
<body>
    <div class="row print-logo mt-4">
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
    </div>

    <div class="table-responsive">
            <div class="container mt-5">  
                <div class="row mb-3">
                        <div class="col-md-1">
                           <a href="/Grading"><input type="button" value="Back" class="btn btn-warning px-4 mb-3"></a> 
                        </div>
                        <div class="col-md-3">
                            <form action="{{ url('grading.tvl') }}" method="GET">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <select name="sections" class="form-control select mx-4">
                                                <option value="" class="text-center">Select Section & Subject</option>
                                                @foreach ( $section as $sec )
                                                  <option value="{{ $sec->class_sec }}" class="text-center">{{ $sec->class_sec }} {{ $sec->class_subj }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="submit" class="btn filter btn-primary px-4" value="Filter">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-2">
                         
                        </div>
                        <div class="col-md-3">
                            <input type="button" class="btn save btn-info px-4 mx-1" value="Save" id="save">
                            <input type="button" class="btn save btn-success px-4 mx-1" value="excel" id="excel">
                            <input type="button" class="btn print btn-danger px-4 mx-1" value="Print" id="print">
                        </div>
                           
                </div>
            
                    <table class="table print-container table-bordered table-striped table-hover table-sm" id="example1">
                        <thead>
                        <tr>
                            <th>Student Number</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Gender</th>
                            <th>Section</th>
                            <th>Subject</th>
                            <th>1st</th>
                            <th>2nd</th>
                            <th>3rd</th>
                            <th>4th</th>
                            <th>Final</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ( $list as $sec )
                             <tr>
                                    <td class="text-center">{{ $sec->student_no }}</td>
                                    <td>{{ $sec->first_name }}</td>
                                    <td>{{ $sec->last_name }}</td>
                                    <td>{{ $sec->gender }}</td>
                                    <td>{{ $sec->class_sec }}</td>
                                    <td>{{ $sec->class_subj }}</td>
                                    <td id="1st" name="1st" value="" placeholder=""></td>
                                    <td id="2nd" name="2nd" value="" placeholder=""></td>
                                    <td id="3rd" name="3rd" value="" placeholder=""></td>
                                    <td id="4th" name="4th" value="" placeholder=""></td>
                                    <td id="final" name="final" value="" placeholder=""></td>
                                    <td class="text-center"><a href="/editTvl/{{ $sec->id }}" class="" p-0><i class="fa-solid fa-pen-to-square"></i></a></td>
                                </tr>
                        @empty
                          <h4 class="text-center">No Section and Subject Selected </h4>  
                        @endforelse   
                        </tbody>
                    </table>
        </div>
    </div>
    
      <script>
        $(document).ready( function () {
             $('#example1').DataTable();
                } );
      </script>

    <script>
        let printBtn = document.querySelector("#print");
        let saveBtn = document.querySelector("#save");

        printBtn.addEventListener("click", function () {
            window.print();
        });
    </script>

    
</body>
</html>