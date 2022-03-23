<li class="has-dropdown active">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">home</a>
    <ul class="dropdown-menu">
        <li><a href="{{ route('landingPage')}}">home search</a></li>
        <li><a href="home-map.html">home map</a></li>
        <li><a href="home-property.html">home property</a></li>
        <li><a href="home-splash.html">home splash</a></li>
    </ul>
</li>

<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Pages</a>
    <ul class="dropdown-menu">
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">agents</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{ route('agents')}}">All Agents</a>
                </li>
                <li>
                    <a href="{{ route('agentsProfile')}}">agent profile</a>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">agencies</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="agency-list.html">all agencies</a>
                </li>
                <li>
                    <a href="agency-profile.html">agency profile</a>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="blog.html">blog Grid</a>
                </li>
                <li>
                    <a href="blog-sidebar-right.html">blog Grid Right </a>
                </li>
                <li>
                    <a href="blog-sidebar-left.html">blog Grid Left </a>
                </li>
                <li>
                    <a href="blog-single.html">blog single</a>
                </li>
            </ul>
        </li>
        <li><a href="page-about.html">page about</a></li>
        <li><a href="page-contact.html">page contact</a></li>
        <li><a href="page-faq.html">page FAQ</a></li>
        <li><a href="page-404.html">page 404</a></li>
    </ul>
</li>

<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Profile</a>
    <ul class="dropdown-menu">
        <li><a href="{{route('userProfile')}}">user profile</a></li>
        <li><a href="social-profile.html">social profile</a></li>
        <li><a href="{{route('myproperties')}}">my properties</a></li>
        <li><a href="favourite-properties.html">favourite properties</a></li>
        <li><a href="#">add property</a></li>
    </ul>
</li>
<li class="has-dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Properties</a>
    <ul class="dropdown-menu">
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Properties grid</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{ route('properties')}}">properties grid</a>
                </li>
                <li>
                    <a href="properties-grid-split.html">properties grid split</a>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">properties list</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="properties-list.html">properties list</a>
                </li>
                <li>
                    <a href="properties-list-split.html">properties list split</a>
                </li>
            </ul>
        </li>
        <li class="dropdown-submenu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">properties single</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="property-single-gallery.html">single gallery</a>
                </li>
                <li>
                    <a href="property-single-slider.html">single slider</a>
                </li>
            </ul>
        </li>
    </ul>
</li>



<li><a href="{{ route('contactPage')}}">Contact Us</a></li>
