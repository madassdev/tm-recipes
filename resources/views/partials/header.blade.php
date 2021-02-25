<button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
    <i class="mdi mdi-menu"></i>
</button>
<a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
    <i class="full"></i>
</a>
<button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
    <i class="mdi mdi-menu"></i>
</button>


<ul class="c-header-nav d-md-down-none">
    <li class="c-header-nav-item px-3">
        <a class="c-header-nav-link" href="{{route('admin.categories.index')}}">
            <i class="mdi mdi-gauge mx-1"></i>
            Dashboard 
    </a>
    </li>
    <li class="c-header-nav-item px-3">
        <a class="c-header-nav-link" href="{{route('admin.recipes.index')}}">
            <i class="mdi mdi-food mx-1"></i>
            Recipes 
    </a>
    </li>
    <li class="c-header-nav-item px-3">
        <a class="c-header-nav-link" href="{{route('admin.categories.index')}}">
            <i class="mdi mdi-shape mx-1"></i>
            Categories 
    </a>
    </li>
    <li class="c-header-nav-item px-3">
        <a class="c-header-nav-link" href="{{route('admin.questions.index')}}">
            <i class="mdi mdi-head-question mx-1"></i>
            Questions 
    </a>
    </li>
    <li class="c-header-nav-item px-3">
        <a class="c-header-nav-link" href="{{route('admin.settings.index')}}">
            <i class="mdi mdi-cogs"></i>
            Settings 
    </a>
    </li>
</ul>