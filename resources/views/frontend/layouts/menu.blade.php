<style>
    .restbeef_header_content {
        border-bottom: none;
    }
</style>
<div class="restbeef_menu_part">
    @php
        $routes = [

        [
        "routeName" => "about",
        "label" => __("static_text.about")
        ],

        [
        "routeName" => "restaurant",
        "label" => __("static_text.restaurant")
        ],
        [
        "routeName" => "wedding",
        "label" => __("static_text.invitation")
        ],
        [
        "routeName" => "events",
        "label" => __("static_text.events")
        ],
        [
        "routeName" => "gallery",
        "label" => __("static_text.gallery")
        ],
        [
        "routeName" => "contact",
        "label" => __("static_text.contact")
        ],
        [
        "routeName" => "engagement",
        "label" => __("static_text.engagement")
        ],
        [
        "routeName" => "hennanight",
        "label" => __("static_text.hennanight")
        ],
        [
        "routeName" => "circumcision",
        "label" => __("static_text.circumcision")
        ],
        [
        "routeName" => "weddingceremony",
        "label" => __("static_text.weddingceremony")
        ],
        [
        "routeName" => "wedding",
        "label" => __("static_text.wedding")
        ],

        ];
    @endphp
    <nav class="restbeef_nav">
        <ul id="menu-main-menu" class="restbeef_menu">
            <li id="nav-menu-item-12333"
                class="menu-item {{ request()->routeIs($routes[0]["routeName"]) ? " current-menu-ancestor" : "" }}">
                <a href="{{route($routes[0]['routeName'])}}">{{$routes[0]['label']}}</a>
            </li>
            <li id="nav-menu-item-12333"
                class="menu-item {{ request()->routeIs($routes[1]["routeName"]) ? " current-menu-ancestor" : "" }}">
                <a href="{{route($routes[1]['routeName'])}}">{{$routes[1]['label']}}</a>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">{{$routes[2]['label']}}</a>
                <ul class="sub-menu">
                    <li><a href="{{route($routes[10]['routeName'])}}">{{$routes[10]['label']}}</a></li>
                    <li><a href="{{route($routes[6]['routeName'])}}">{{$routes[6]['label']}}</a></li>
                    <li><a href="{{route($routes[7]['routeName'])}}">{{$routes[7]['label']}}</a></li>
                    <li><a href="{{route($routes[8]['routeName'])}}">{{$routes[8]['label']}}</a></li>
                    <li><a href="{{route($routes[9]['routeName'])}}">{{$routes[9]['label']}}</a></li>
                </ul><!-- .sub-menu -->
            </li>
            <li id="nav-menu-item-12333"
                class="menu-item {{ request()->routeIs($routes[3]["routeName"]) ? " current-menu-ancestor" : "" }}">
                <a href="{{route($routes[3]['routeName'])}}">{{$routes[3]['label']}}</a>
            </li>
            <li id="nav-menu-item-12333"
                class="menu-item {{ request()->routeIs($routes[4]["routeName"]) ? " current-menu-ancestor" : "" }}">
                <a href="{{route($routes[4]['routeName'])}}">{{$routes[4]['label']}}</a>
            </li>

        </ul><!-- .restbeef_menu -->
        <a href="{{route($routes[5]['routeName'])}}" class="btn_restbeef btn_book_table">{{$routes[5]['label']}}</a>



    </nav><!-- .restbeef_nav -->
</div><!-- .restbeef_menu_part -->
