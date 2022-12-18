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
    
            <a href="{{'/Dashboard'}}" class="btn active">
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
    <h1>Dashboard</h1>

    <div class="date">
        <input type="date">
    </div>

    <div class="insights">

        <div class="sales">
         <a href="/Student">
            <span class="material-icons-sharp">school</span>
            <div class="middle">
                <div class="left">
                    <h3>NUMBER OF STUDENTS</h3>
                    <h1></h1>
                </div>

                <div class="progress">
                    <svg>
                        <circle cx='40' cy='40' r='36'></circle>
                    </svg>
                    <div class="number">
                       <p>{{ $students->count() }}</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Amlac Senior High School Students</small>
         </a>
        </div>

        <!-- END OF SALE  -->

        <div class="expenses">
            <a href="/Professor">
                <span class="material-icons-sharp">person</span>
            <div class="middle">
                <div class="left">
                    <h3>NUMBER OF PROFESSORS</h3>
                    <h1></h1>
                </div>

                <div class="progress">
                    <svg>
                        <circle cx='40' cy='40' r='36'></circle>
                    </svg>
                    <div class="number">
                        <p>{{ $prof->count() }}</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Amlac Senior High School Professors</small>
            </a>
        </div>

        <!-- END OF EXPENSES  -->

          <div class="income">
           <a href="/Course">
            <span class="material-icons-sharp">stacked_line_chart</span>
            <div class="middle">
                <div class="left">
                    <h3>NUMBER OF SUBJECTS</h3>
                    <h1></h1>
                </div>

                <div class="progress">
                    <svg>
                        <circle cx='40' cy='40' r='36'></circle>
                    </svg>
                    <div class="number">
                        <p>{{ $subj->count() }}</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Amlac Senior High School Course</small></a>
        </div>

        <!-- END OF INCOME  -->
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