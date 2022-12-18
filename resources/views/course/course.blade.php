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
            <a href="{{'/Course'}}" class="btn active">
                <span class="material-icons-sharp">school</span>
                <h3>Subject</h3>
            </a>
            <a href="{{'/Professor'}}" class="btn">
                <span class="material-icons-sharp">person_pin</span>
                <h3>Professor</h3>
            </a>

            <a href="{{ '/Student' }}" class="btn">
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
        <h1>Subject</h1>

        <div class="content">
           <div class="create-student">
    <!-- Trigger/Open The Modal -->
    <button id="myBtn" class="btn-create"> <span class="material-icons-sharp">add_circle_outline</span>
        <span class="t">New Subject</pan></button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="closes">&times;</span>

        <h1 class="title-stud">Create Subject</h1>

    <div class="create-stud">
      <form action="/Course/add" method="post">
        @csrf
        <label for="subj_name">Subject Name</label>
        <input class="input-form" type="text" id="subj_name" name="subj_name" placeholder="" required>

        <label for="subj_code">Subject Code</label>
        <input class="input-form" type="text" id="subj_code" name="subj_code" placeholder="" required>

        <label for="subj_unit">Subject Unit</label>
        <input class="input-form" type="number" id="subj_unit" name="subj_unit" placeholder="" required>


        <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
            add
            </span>Add Subject</button>
      </form>
    </div>

    </div>


    </div>
    </div>

        <div class="recent-orders">
            <h2>Subject List</h2>

            <table class="table tabla">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subject Name</th>
                        <th>Subject Name</th>
                        <th>Subject Name</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ( $subject as $row)
                    <tr>
                        <td class="primary">{{ $row ->id }}</td>
                        <td class="primary">{{ $row ->subj_name}}</td>
                        <td class="primary">{{ $row ->subj_code }}</td>
                        <td class="primary">{{ $row ->subj_unit }}</td>
                        <td class="warning"><a href="/course/{{ $row->id }}" class="btn-warning">Edit</a></td>
                    </tr>
                    @endforeach
                    

                </tbody>

            </table>


            <ul class="page">
                <li></li>
            </ul>


        </div>
    </main>

    <x-profile/>


    @include('partials.foot')

