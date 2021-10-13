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
        "routeName" => "table_rezervations",
        "label" => __("static_text.reservations")
        ],
        ];
    @endphp
    <nav class="restbeef_nav">
        <ul id="menu-main-menu" class="restbeef_menu">
            @foreach ($routes as $key => $route)

                @if($route['routeName']!="table_rezervations")

                    <li id="nav-menu-item-12333"
                        class="menu-item menu-item-has-children{{ request()->routeIs($route["routeName"]) ? " current-menu-ancestor" : "" }}">
                        <a href="{{route($route['routeName'])}}">{{$route['label']}}</a>
                    </li>
                    @endif
            @endforeach

        </ul><!-- .restbeef_menu -->
        <a href="{{route($route['routeName'])}}" class="btn_restbeef btn_book_table">{{$route['label']}}</a>



    </nav><!-- .restbeef_nav -->
</div><!-- .restbeef_menu_part -->
