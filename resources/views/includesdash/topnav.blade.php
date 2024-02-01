<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('assets/admin/images/img.jpg')}}" alt="">{{ auth()->user()->fullName }}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href=" {{ route('users') }}"> Profile</a>
                        <a class="dropdown-item" href="{{ route('cars') }}">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Settings</span>
                        </a>
                        <a class="dropdown-item" href=" {{ route('testimonials') }}">Help</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">{{ $unreadCount }}</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">

                        @foreach($messages as $message)
                        @if ($message->readed == 0)
                        <li class="nav-item">
                            <a href="{{ route('showMessage', $message->id) }}" class="dropdown-item">
                                <span class="image"><img src="{{ asset('assets/admin/images/img.jpg') }}" alt="Profile Image" /></span>
                                <span>
                                    <span>{{ $message->firstName }} {{ $message->lastName }}</span>
                                    <span class="time">{{ $message->created_at }}</span>
                                </span>
                                <span class="message">
                                    {{ $message->messageContent }}
                                </span>
                            </a>
                        </li>
                        @endif
                        @endforeach

                        <li class="nav-item">
                            <div class="text-center">
                                <a class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>