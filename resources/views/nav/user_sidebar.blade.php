<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <div class="sidebar-heading">
        <a href="{{route('index')}}"><img src="{{asset('admin/img/Group2.png')}}" class="img-fluid" style="margin: 1em;"></a>
    </div>
    <hr class="sidebar-divider my-0">
    <li class="nav-item @if($pages=='dash') active @endif"><a class="nav-link" href="{{route('user')}}"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a></li>
    <li class="nav-item @if($pages=='mreq') active @endif"><a class="nav-link" href="{{ route('request.index') }}"><i class="fas fa-fw fa-comments-dollar"></i><span>My Meet Request</span></a></li>
    <li class="nav-item @if($pages=='proj') active @endif"><a class="nav-link" href="{{ route('project.index') }}"><i class="fas fa-fw fa-history"></i><span>History Order</span></a></li>
    <li class="nav-item @if($pages=='faq') active @endif"><a class="nav-link" href="{{ route('faq.index') }}"><i class="fas fa-fw fa-question-circle"></i><span>FAQ</span></a></li>
</ul>