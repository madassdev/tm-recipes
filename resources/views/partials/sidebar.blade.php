<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <h3>{{strtoupper(config('app.name'))}}</h3>
    </div>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-title">
            <a class="c-sidebar-nav-label c-active" href="{{route('admin.index')}}">
                <i class="mdi mdi-apps c-sidebar-nav-icon"></i>
                Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-title">
            <i class="cil cil-graph h5 mr-2"></i>
            System
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-label" href="{{route('admin.meal.index')}}">
                <i class="mdi mdi-food text-danger c-sidebar-nav-icon"></i>
                All recipes
            </a>
        </li>
        <!-- <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-label" href="{{route('admin.recipes.create')}}">
                <i class="mdi mdi-noodles text-info c-sidebar-nav-icon"></i>
                Create recipe
            </a>
        </li> -->

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-label" href="{{route('admin.categories.index')}}">
                <i class="mdi mdi-shape text-warning c-sidebar-nav-icon"></i>
                Categories
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-label" href="{{route('admin.questions.index')}}">
                <i class="mdi mdi-head-question text-success c-sidebar-nav-icon"></i>
                Questions
            </a>
        </li>
        <li class="c-sidebar-nav-title">
            System
        </li>
        
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-label" href="{{route('admin.settings.index')}}">
                <i class="mdi mdi-cogs text-warning c-sidebar-nav-icon"></i>
                Settings
            </a>
        </li>

        <!-- <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-label" href="#"> 
                <i class="cil-list-rich text-success c-sidebar-nav-icon"></i>
                Site details
            </a>
        </li> -->

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-label" href="{{route('logout')}}">
                <i class="mdi mdi-logout text-danger c-sidebar-nav-icon"></i>
                Logout
            </a>
        </li>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 780px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 469px;"></div>
        </div>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
</div>