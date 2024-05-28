<section class="section-navbar ">
        <div class="container">
            <ul>
                @foreach ($navbarFooter as $item)
                    <li>
                        <a class="d-flex align-items-center " :href="{{ $item['link'] }}">
                        <img src="{{  Vite::asset('resources' . $item['img']) }}" alt="{{ $item['name'] }}">
                            <div>{{ $item['name'] }}</div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
</section>

<section class="section-link-footer">
    <div class="container container-link-footer">
        <div>
            <div>
                <h5>dc comics</h5>
                <ul class="link-footer">
                    @foreach($navigation['dccomics'] as $item)
                        <li>
                            <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h5>shop</h5>
                <ul class="link-footer">
                    @foreach($navigation['shop'] as $item)
                        <li>
                            <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div>
            <h5>dc</h5>
            <ul class="link-footer">
                @foreach($navigation['dc'] as $item)
                    <li>
                        <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div>
            <h5>sites</h5>
            <ul class="link-footer">
                @foreach($navigation['sites'] as $item)
                    <li>
                        <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<section class="section-bottom-footer">
    <div class="container">
        <div>
            <a href="#">sign-up now!</a>
        </div>
        <div>
            <span>follow us</span>
            <img src="{{  Vite::asset('/resources/img/footer-facebook.png') }}" alt="logo-facebook">
            <img src="{{  Vite::asset('/resources/img/footer-twitter.png') }}" alt="logo-twitter">
            <img src="{{  Vite::asset('/resources/img/footer-youtube.png') }}" alt="logo-youtube">
            <img src="{{  Vite::asset('/resources/img/footer-pinterest.png') }}" alt="logo-pinterest">
            <img src="{{  Vite::asset('/resources/img/footer-periscope.png') }}" alt="logo-periscope">
        </div>
    </div>
</section>
