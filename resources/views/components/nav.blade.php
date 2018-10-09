<!-- desktop nav bar -->
<nav class="level navigation-bar mobile-hidden">
    <p class="level-item has-text-centered">
        <a href="http://imm.med.ncku.edu.tw/imm_activity/public/" class="link is-info">首頁</a>
    </p>
    <p class="level-item has-text-centered">
        <a href="{{ route('frontend.news.index') }}" class="link is-info">最新消息</a>
    </p>
    <p class="level-item has-text-centered">
        <img src="{{ asset('images/logo.png') }}" alt="" style="height: 80px;">
    </p>
    <p class="level-item has-text-centered">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeojv2Yq7ftLObakQsmYkhhtYhBQ54AmRpHZfNYJNXXuNnvkQ/viewform" class="link is-info" target="_blank">活動報名</a>
    </p>
    <p class="level-item has-text-centered">
        <a href="{{ route('frontend.contact-us.index') }}" class="link is-info">聯絡我們</a>
    </p>
</nav>


<!-- mobile nav bar -->
<nav class="navbar desktop-hidden" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="http://imm.med.ncku.edu.tw/imm_activity/public/">
        <img src="{{ asset('images/2018.png') }}">
        <strong>
            年分子醫學新境界研討會暨20週年所慶校友會娘家
        </strong>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a href="http://imm.med.ncku.edu.tw/imm_activity/public/" class="navbar-item">首頁</a>

            <a href="{{ route('frontend.news.index') }}" class="navbar-item">最新消息</a>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeojv2Yq7ftLObakQsmYkhhtYhBQ54AmRpHZfNYJNXXuNnvkQ/viewform" class="navbar-item">活動報名</a>
            <a href="{{ route('frontend.contact-us.index') }}" class="navbar-item">聯絡我們</a>
        </div>


    </div>
</nav>

