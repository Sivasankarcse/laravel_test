<div class="card">
    <div class="card-header">Sidebar</div>

    <div class="card-body">
        <h4>Welcome {{Auth::user()->name}}</h4>
        <br />
        <!-- <a href="#">Department</a> -->
        <ul>
            <li>
                <div>
                    <a href="/home">
                        <p>
                            Dashboard
                        </p>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Department
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </div>
                <ul>
                    <li>
                        <a href="/department/create">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Department</p>
                        </a>
                    </li>
                    <li>
                        <a href="/department">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Department List</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <div>
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Position
                    <i class="fas fa-angle-left right"></i>
                </p>
                </div>
                <ul>
                    <li>
                        <a href="/position/create">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Position</p>
                        </a>
                    </li>
                    <li>
                        <a href="/position">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Position List</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <div>
                    <p>
                        Qualification
                    </p>
                </div>
                <ul>
                    <li>
                        <a href="/qualification/create">
                        <p>Add Qualification</p>
                        </a>
                    </li>
                <li>
                    <a href="/qualification">
                    <p>Qualification List</p>
                    </a>
                </li>
                </ul>
            </li>
            <li>
                <div>
                    <p>
                        Employee
                    </p>
                </div>
                <ul>
                    <li>
                        <a href="/employee">
                        <p>Employee Details</p>
                        </a>
                    </li>
                    <li>
                        <a href="/employee/create">
                        <p>Add Employee</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>