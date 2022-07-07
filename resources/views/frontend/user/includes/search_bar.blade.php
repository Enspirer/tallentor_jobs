<div class="search-bar">
    <form action="">
        <div class="inner-wrapper">
            <div class="filter-block">
                <div class="input-wrapper">
                    <i class="bi bi-search"></i>
                    <input type="text" name="keyword" placeholder="Job Title or Keyword" class="form-control">
                </div>
                <div class="result-block"></div>
            </div>
            <div class="filter-block">
                <div class="input-wrapper">
                    <i class="bi bi-geo-alt"></i>
                    <input type="text" name="location" placeholder="Location" class="form-control">
                </div>
                <div class="result-block"></div>
            </div>
            <div class="filter-block">
                <div class="input-wrapper">
                    <i class="bi bi-briefcase"></i>
                    <input type="text" name="job_type" placeholder="Job Type" class="form-control">
                </div>
                <div class="result-block"></div>
            </div>
            <button type="submit" class="search-btn">Search</button>
        </div>
    </form>
</div>

<div class="keywords-bar">
    <div class="keywords">
        <span class="tag">UI Designer</span>
        <span class="tag">UX Designer</span>
        <span class="tag">Software Engineer</span>
        <span class="tag">Web Developer</span>
        <span class="tag">Mobile App Developer</span>
    </div>
    @if(Request::segment(1) == 'dashboard')
        <a href="#">More Jobs <i class="bi bi-box-arrow-up-right"></i></a>
    @endif
</div>