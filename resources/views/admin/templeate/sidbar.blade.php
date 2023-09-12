<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Interface</div>
            {{-- list of side bar start --}}
            <ul class="list-group">
                {{-- Add instructors --}}
                <li class="list-group-item">
                    <a href="{{ route('instructors.index') }}">Instructors</a>
                </li>
                {{-- Add Courses --}}
                <li class="list-group-item">
                    <a href="{{ route('courses.index') }}">Courses</a>
                </li>
                
                {{-- Add Events --}}
                <li class="list-group-item">
                    <a href="{{ route('events.index') }}">Events</a>
                </li>
                {{-- Add Announcements --}}
                <li class="list-group-item">
                    <a href="{{ route('announcements.index') }}">Announcements</a>
                </li>
            </ul>

        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>
