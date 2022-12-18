@include('partials.head')
<div class="container">
    <aside>
        <div class="top">
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">
                    arrow_back
                    </span>
            </div> 
            <div class="logo">   
                    <div class="amlac">
                        <img src="/images/logo.png" alt=""> 
                    </div>
                    <h2>AM<span class="danger">LAC</span></h2>
                    <p>Senior High School</p>                
            </div>
           
        </div>
        <div class="sidebar" id="myDiv">

            <a href="{{'/Dashboard'}}" class="btn">
                <span class="material-icons-sharp">dashboard</span>
                <h3>Dashboard</h3>
            </a>
            <a href="{{'/Class'}}" class="btn">
                <span class="material-icons-sharp">class</span>
                <h3>Classes</h3>
            </a>
            <a href="{{'/Course'}}" class="btn">
                <span class="material-icons-sharp">school</span>
                <h3>Subject</h3>
            </a>
            <a href="{{'/Professor'}}" class="btn">
                <span class="material-icons-sharp">person_pin</span>
                <h3>Professor</h3>
            </a>

            <a href="{{ '/Student' }}" class="btn active">
                <span class="material-icons-sharp">people</span>
                <h3>Students</h3>
            </a>



            <a href="{{'/Grading'}}" class="btn"">
                <span class="material-icons-sharp">insights</span>
                <h3>Grading</h3>
            </a>
            <a href="{{'/Setting'}}" class="btn">
                <span class="material-icons-sharp">settings</span>
                <h3>Settings</h3>
            </a>

                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn">
                        <span class="material-icons-sharp">logout</span>
                        <h3>Logout</h3>
                    </button>
                </form>
        </div>
    </aside>
    <!-- END OF THE ASIDE  -->


<main>
    <h1>Student</h1>

    <div class="content">
       <div class="create-student">
<!-- Trigger/Open The Modal -->
<button id="myBtn" class="btn-create"> <span class="material-icons-sharp">add_circle_outline</span>
    <span class="t">New Student</pan></button>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="closes">&times;</span>

    <h1 class="title-stud">Create Student</h1>

<div class="create-stud">
<form action="/Student/create" method="POST">
    @csrf
    <label for="stud_no">Student Number</label>
    <input class="input-form" type="text" id="stud_no" name="student_no" placeholder="Your Student number.." required>

    <label for="fname">First Name</label>
    <input class="input-form" type="text" id="fname" name="first_name" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input class="input-form" type="text" id="lname" name="last_name" placeholder="Your last name.." required>
    <label for="age">Age</label>
    <input class="input-form" type="number" id="age" name="age" placeholder="Your age.." required>

    <label for="gender">Gender</label>
    <select id="gender" name="gender" required>
      <option value="" selected disabled>Select Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>

    <label for="email">Email</label>
    <input class="input-form" type="email" id="email" name="email" placeholder="Your email.." required>

    <label for="contact_no">Contact Number</label>
    <input class="input-form" type="text" id="contact_no" name="contact_no" placeholder="Your contact number.." required>

    <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
        add
        </span>Add Student</button>
  </form>
</div>

</div>


</div>
</div>

    <div class="recent-orders">
        <h2>Student List</h2>

        <table class="table tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="primary">{{ $student->id }}</td>
                    <td class="primary">{{ $student->student_no }}</td>
                    <td class="primary">{{ $student->first_name }}</td>
                    <td class="primary">{{ $student->last_name }}</td>
                    <td class="primary">{{ $student->age }}</td>
                    <td class="primary">{{ $student->gender }}</td>
                    <td class="primary">{{ $student->email }}</td>
                    <td class="primary">{{ $student->contact_no }}</td>
                    <td class="warning"><a href="/stud/{{ $student->id }}" class="btn-warning">Edit</a></td>
                </tr>
                @endforeach
            </tbody>

        </table>


        <ul class="page">
            <li>{{ $students->links('pagination::bootstrap-4') }}</li>
        </ul>


    </div>
</main>

<div class="right">
    <div class="top">
        <button id="menu-btn">
            <span class="material-icons-sharp">menu</span>
        </button>

        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>

        <div class="profile">
            <div class="info">
                <p>hey, <b>{{ Auth::user()->firstname }}</b></p>
                <small class="text-muted">Admin</small>
            </div>

            <div class="profile-photo">
                <img src="/images/caloocan.jpeg">
            </div>
        </div>
    </div>


@include('partials.foot')
