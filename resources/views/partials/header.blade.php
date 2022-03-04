
<header>
    <div class="container">
        <a class="site-logo" href="">
            <img src="{{asset('img/dc-logo.png')}}" alt="DC-logo">
        </a>
        
        <nav id='main-nav'>
            <ul>
                @foreach($links as $item)
                <li>
                    <a href="{{$item['url']}}" class="{{}}">{{$item['']}}</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

