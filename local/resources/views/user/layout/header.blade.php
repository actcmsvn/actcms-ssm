<a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>
<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("shwTime").innerHTML = d.toLocaleTimeString();
}
</script>
    <nav class=" mr-auto my-auto">
        <ul class="nav align-items-center">

            <li class="nav-item">
                <p style="font-size: 22px;margin-left: 20px">Chào mừng <b>{{ Auth::user()->name }}</b></p>
            </li>

             <li class="nav-item">
                
            @if(Auth::user()->open == 0)

            <a href="{{ Asset('close') }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn m-b-15 ml-2 mr-2 btn-outline-danger">Đóng cửa ngay</button></a>


            @else

           <a href="{{ Asset('close') }}" onclick="return confirm('Are you sure?')"><button type="button" class="btn m-b-15 ml-2 mr-2 btn-outline-success">Mở cửa ngay</button></a>

            @endif

            </li>
        </ul>
    </nav>
<nav class=" ml-auto">
        <ul class="nav align-items-center">
<li style="font-size: 25px">&nbsp;&nbsp;&nbsp;<i class="mdi mdi-calendar-clock"></i> <span id="shwTime"></span></li>
        
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <span class="avatar-title rounded-circle bg-dark">V</span>

                    </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right"   >
                    <a class="dropdown-item" href="{{ Asset(env('user').'/home') }}">  Tổng quan </a><hr>
                    <a class="dropdown-item" href="{{ Asset(env('user').'/setting') }}">  Cài đặt tài khoản </a><hr>
                    <a class="dropdown-item" href="{{ Asset(env('user').'/logout') }}">  Thoát </a>
                    
                </div>
            </li>

        </ul>

    </nav>