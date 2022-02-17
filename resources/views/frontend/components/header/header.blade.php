<header id="header" class="fixed-top">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <a class="navbar-brand" href="{{url('/feed')}}">Angoo</a>
            <div class="d-flex align-middle form-width text-center">
                <form class="d-flex w-100">
                    <input type="search" class="form-control me-2" placeholder="Angoo Search" />
                </form>
            </div>
            <div class="d-flex align-middle">
                <ul class="menu">
                    <li>
                        <a href="{{url('messenger')}}">
                            <i class="fa fa-inbox align-middle"></i>
                            <span id="inbox-count" class="count display-none"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <i class="fa fa-bell align-middle"></i>
                            <span id="notifications-count" class="count">23</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('settings')}}">
                            <i class="fa fa-cogs align-middle"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void()" class="dropdown-menu-list">
                            <img src="{{asset('storage/users-avatar/'.auth()->user()->avatar)}}" class="img-thumbnail" />
                        </a>
                        <div class="dropdown-list">
                            <ul>
                                <li>
                                    <a href="{{url(auth()->user()->username)}}">
                                         <i class="fa fa-user align-middle"></i>
                                         Profile
                                    </a>
                                 </li>
                                <li>
                                   <a href="{{url('settings')}}">
                                        <i class="fa fa-user align-middle"></i>
                                        Settings
                                   </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                         <i class="fas fa-sign-out-alt align-middle"></i>
                                         Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                 </li>
                            </ul>
                        </div>
                    </li>
                    <li class="d-md-none">
                        <a>
                            <i class="fa fa-ellipsis-h align-middle"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>