@section('navigation_bar')
<div class="pcoded-navigatio-lavel">Menu principal</div>
<ul class="pcoded-item">
    <li class="{{ (\Request::route()->getName() == 'home') ? 'active' : '' }}">
        <a href="{{ route('home') }}">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Home</span>
        </a>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-user"></i></span>
            <span class="pcoded-mtext">Profile Settings</span>
        </a>
        <ul class="pcoded-submenu">
            <li class="{{ (\Request::route()->getName() == 'user-profile') ? 'active' : '' }}">
                <a href="/user_profile">
                    <span class="pcoded-mtext">My profile</span>
                </a>
            </li>
            {{-- <li class=" ">
                <a href="notifications_v">
                    <span class="pcoded-mtext">Notifications</span>
                    <span class="pcoded-badge label label-danger">NOUVEAU</span>
                </a>
            </li> --}}

        </ul>
    </li>
</ul>
<div class="pcoded-navigatio-lavel">Table Managment</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu {{ (\Request::route()->getName() == 'appointments-list') ? 'pcoded-trigger' : '' }}">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="icofont icofont-users "></i></span>
            <span class="pcoded-mtext">Appointments</span>
        </a>
        <ul class="pcoded-submenu">

            <li class="{{ (\Request::route()->getName() == 'appointment-list') ? 'active' : '' }}">
                <a href="/appointments_list">
                    <span class="pcoded-mtext">Appointment Table</span>
                </a>
            </li>

        </ul>
    </li>
    {{-- <li class="pcoded-hasmenu {{ (\Request::route()->getName() == 'users-list' || \Request::route()->getName() == 'create-user' ) ? 'pcoded-trigger' : '' }}">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="fa fa-users"></i></span>
            <span class="pcoded-mtext">Utilisateur</span>
        </a>
        <ul class="pcoded-submenu">
            <li class="{{ (\Request::route()->getName() == 'create-user') ? 'active' : '' }}">
                <a href="/create_user">
                    <span class="pcoded-mtext">Ajouter un utilisateur</span>
                </a>
            </li>
            <li class="{{ (\Request::route()->getName() == 'users-list') ? 'active' : '' }}">
                <a href="/users_list">
                    <span class="pcoded-mtext">Liste des utilisateurs</span>
                </a>
            </li>
        </ul>
    </li> --}}
</ul>
@endsection