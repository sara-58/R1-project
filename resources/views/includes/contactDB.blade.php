<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-7 text-center mb-5">
                <h2>Contact Us Or Use This Form To Rent A Car</h2>
                <p>
                    Let's connect and discuss how my skills and experience can contribute to the success of your team and projects. I'm excited about the opportunity to bring my passion for backend development to a new and challenging role.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-5">
                <form action="{{route('sendEmail')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                            <input type="text" class="form-control" placeholder="First name" name="firstName">
                        </div>
                        <div class=" col-md-6">
                            <input type="text" class="form-control" placeholder="Last name" name="lastName">
                        </div>
                    </div>

                    <div class=" form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Email address" name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea id="" class="form-control" placeholder="Write your message." cols="30" rows="10" name="messageContent"></textarea>
                        </div>
                    </div>
                    <div class=" form-group row">
                        <div class="col-md-6 mr-auto">
                            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 ml-auto">
                <div class="bg-white p-3 p-md-5">
                    <h3 class="text-black mb-4">Contact Info</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block mb-3">
                            <span class="d-block text-black">Address:</span>
                            <span>
                                I am currently based in Jehan St., Mansoura, Egypt, and I can work remotly .
                            </span>
                        </li>
                        <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+2 01062244496</span></li>
                        <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>sm.abdelaal.cs@gmail.com</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>