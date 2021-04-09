<footer id="footer">
    <div class="footer_top">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer_widget wow fadeInLeftBig">
                    @guest
                        <h2>Inloggen</h2>
                    @endguest
                    @auth
                        <h2>Uitloggen</h2>
                    @endauth
                    <ul class="tag_nav">
                        @guest
                            <li><a href="/login">Login hier!</a></li>
                        @endguest
                        @auth
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Uitloggen') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer_widget wow fadeInDown">
                    <h2>Specifiek nieuws</h2>
                    <ul class="tag_nav">
                        <li><a href="/binnenland">Binnenland</a></li>
                        <li><a href="/economie">Economie</a></li>
                        <li><a href="/sport">Sport</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer_widget wow fadeInRightBig">
                    <a href=""></a><h2>Contact</h2>
                    <p>
                        <ul>
                            <li>Redactie Diquet</li>
                            <li>Postbus 146, 4530AC Terneuzen</li>
                            <li>E-mail: redactie@diquet.com</li>
                            <li>Tel. 0617346981</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <p class="copyright">Copyright &copy; 2021 <a href="/">DIQUET</a></p>
    </div>
</footer>
