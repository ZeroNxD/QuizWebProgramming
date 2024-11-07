<div class="row align-items-center" styles="padding: 15px 30px;">
    <div class="row">
        <div class="col-sm-3">
            <img src="{{ asset('assets/LogoEF.png')}}" alt="Logo...", height = '60px', width='60px'>
        </div>

        <div class='col-9'>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-4">
                        <a href="/EduFun" class="{{request()->is('EduFun') ? 'nav-link active': 'nav-link fw-bold'}}">Home</a>
                    </li>
                    <li class="nav-item dropdown px-4">
                        <a href="/EduFun/Category" class="{{request()->is('EduFun/Category*') ? 'nav-link active dropdown-toggle': 'nav-link fw-bold dropdown-toggle' }}" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ request()->is('EduFun/Category/DataScience') ? 'active' : '' }}" href="/EduFun/Category/DataScience">Data Science</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('EduFun/Category/NetworkSecurity') ? 'active' : '' }}" href="/EduFun/Category/NetworkSecurity">Network Security</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item px-4">
                        <a href="/EduFun/Writer" class="{{request()->is('EduFun/Writer') ? 'nav-link fw-bold active': 'nav-link fw-bold'}}">Writers</a>
                    </li>
                    <li class="nav-item px-4">
                        <a href="/EduFun/AboutUs" class="{{request()->is('EduFun/AboutUs') ? 'nav-link fw-bold active': 'nav-link fw-bold'}}">About Us</a>
                    </li>
                    <li class="nav-item px-4">
                        <a href="/EduFun/Popular" class="{{request()->is('EduFun/Popular') ? 'nav-link fw-bold active': 'nav-link fw-bold'}}">Popular</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<style>
    .nav-link.active{
        color: #1F72DF !important;
        font-weight:bold !important;
    }
</style> 

