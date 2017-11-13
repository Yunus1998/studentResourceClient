<nav class = "nav-bar fixed-top nav-bar-default" role="navigation" style="">
    <div class = "container-fluid">
        <div class = "navbar-header" >
            <button style="margin-right: 30px" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsemenu" aria-expanded= "false">
                <span class="sr-only" >Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
     {{-- <img src="{{asset('promavinlogo.png')}}" style= "max-width:60px;"> --}}
            <a style="font-size: 20px;font-weight: bold;" href="" class="navbar-brand nav-link" style="">Students Resource</a>
        </div>
        <div class= "collapse navbar-collapse" id="collapsemenu">
            <ul class="nav navbar-nav navbar-right ding" style="margin-right: -30px">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item nav-change">
                    <a class="nav-link" href="{{route('students')}}">View Students</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('student.create')}}">Add Students</a>
                </li>
               
            </ul>
        </div>
    </div>
</nav>




