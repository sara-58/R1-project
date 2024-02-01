<div class="col-md-4 sidebar">
    <div class="sidebar-box">
        <form action="#" class="search-form">
            <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
        </form>
    </div>
    <div class="sidebar-box">
        <div class="categories">
            <h3>Categories</h3>
            @foreach($categories as $category)
            <li><a href="#">{{$category->categoryName}} <span>({{ optional($category->cars)->count() ?? 0 }})</span></a></li>
            @endforeach
        </div>
    </div>
    <div class="sidebar-box">
        <img src="{{asset('assets/images/person_1.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid mb-4 w-50 rounded-circle">
        <h3 class="text-black">About The Author</h3>
        <p>Hi there! I'm Sara Mohamed Abdelaal, a seasoned backend developer specializing in PHP and Laravel. With a solid foundation in web technologies, I bring expertise in HTML, CSS, and JavaScript to the table.</p>
        <p><a href=" {{ route('about') }}" class="btn btn-primary btn-md text-white">Read More</a></p>
    </div>

    <div class="sidebar-box">
        <h3 class="text-black">Paragraph</h3>
        <p>Beyond technical skills, I am a dedicated problem solver and a quick learner, always eager to stay updated with the latest industry trends. I believe in writing clean, efficient, and maintainable code to create optimal user experiences. Let's connect and discuss how my skills and experience can contribute to the success of your team and projects. </p>
    </div>
</div>