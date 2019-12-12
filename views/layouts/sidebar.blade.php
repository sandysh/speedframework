<div class="sidebar" data-color="purple" data-background-color="white">
    <div class="logo">

        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Grab Infotech Pvt Ltd
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{active('dashboard')}}">
                <a class="nav-link" href="/dashboard">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{active('punch')}}">
                <a class="nav-link" href="/punch">
                    <i class="material-icons">gavel</i>
                    <p>Punch In / Punch Out</p>
                </a>
            </li>
            <li class="nav-item {{active('leave')}}">
                <a class="nav-link" href="/leave">
                    <i class="material-icons">dashboard</i>
                    <p>Leave</p>
                </a>
            </li>
            <li class="nav-item {{active('tasks')}}">
                <a class="nav-link" href="/tasks">
                    <i class="material-icons">check_box</i>
                    <p>Tasks</p>
                </a>
            </li>
            <!-- your sidebar here -->
        </ul>
    </div>
</div>

<?php 
// $e = new Exception;
// var_dump($e->getTraceAsString())
?>