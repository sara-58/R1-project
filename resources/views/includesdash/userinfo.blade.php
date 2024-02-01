                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{asset('assets/admin/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                        </div>

                        @auth
                        <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ auth()->user()->fullName }}</h2>
                        </div>
                        @endauth
                    </div>