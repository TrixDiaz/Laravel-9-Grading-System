@include('partials.head')

<x-side/>

        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">

                <div class="sales">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Title here</h3>
                            <h1>00</h1>
                        </div>

                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Title here</small>
                </div>

                <!-- END OF SALE  -->

                <div class="expenses">
                    <span class="material-icons-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Title here</h3>
                            <h1>00</h1>
                        </div>

                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Title here</small>
                </div>

                <!-- END OF EXPENSES  -->

                  <div class="income">
                    <span class="material-icons-sharp">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Title here</h3>
                            <h1>00</h1>
                        </div>

                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Title here</small>
                </div>

                <!-- END OF INCOME  -->
            </div>

                <!-- END OF DASHBOARD INSIGHTS  -->

                <div class="recent-orders">
                    <h2>Student List</h2>

                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                               
                                <th>Gender</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->first_name }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td class="warning">{{ $student->age }}</td>
                                <td class="primary">{{ $student->gender }}</td>
                                <td class="primary">{{ $student->email }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $students->links() }}

                    <a href="#">Show All</a>
                </div>

        </main>

        <!------------------------- END OF MAIN  ----------------------->

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
            <!-- END OF TOP  -->
                <!-- END OF RECEENT UPDATES  -->

                <div class="sales-analytics">
                    <h2>Title here</h2>
                    <div class="item online">
                        <div class="icon">
                            <span class="material-icons-sharp">person_pin</span>
                        </div>

                        <div class="right">
                            <div class="info">
                                <h3>Title here</h3>
                                <small class="text-muted">Title here</small>
                            </div>
                            <h5 class="success">00</h5>
                            <h3>000</h3>
                        </div>
                    </div>

                    <div class="item offline">
                        <div class="icon">
                            <span class="material-icons-sharp">people</span> 
                        </div>

                        <div class="right">
                            <div class="info">
                                <h3>Title here</h3>
                                <small class="text-muted">Title here</small>
                            </div>
                            <h5 class="danger">00</h5>
                            <h3>000</h3>
                        </div>
                    </div>

                    <div class="item customers">
                        <div class="icon">
                            <span class="material-icons-sharp">school</span>
                        </div>

                        <div class="right">
                            <div class="info">
                                <h3>Title here</h3>
                                <small class="text-muted">Title here</small>
                            </div>
                            <h5 class="success">00</h5>
                            <h3>000</h3>
                        </div>
                    </div>

                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>Add Student</h3>
                        </div>
                    </div>

                </div>
                <!-- END OF SALES ANALYTICS  -->

        </div>


    </div>
@include('partials.foot')