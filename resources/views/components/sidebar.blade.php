<aside class="control-sidebar control-sidebar-dark">
    <div class="card bg-dark">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/profile/user.png') }}"
                    alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{ userNameFull() }}</h3>

            @auth
            <p class="text-muted text-center">Software Engineer</p>

            <ul class="list-group bg-dark mb-3">
                <li class="list-group-item">
                    <a class="d-flex align-items-center"> <i class="fa fa-lock pr-2"></i> <b>Senha</b> </a>
                </li>
                <li class="list-group-item">
                    <a class="d-flex align-items-center"> <i class="fa fa-user pr-2"></i> <b>Configurações</b> </a>
                </li>
            </ul>

            <a href="javascript:void()" class="btn btn-primary btn-block" onclick="$('#logout-form').submit();"><b>Desconectar</b></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
            @else
            <a href="{{ route('login') }}" class="btn btn-primary btn-block"><b>Conectar</b></a>
            @endauth
        </div>
        <!-- /.card-body -->
    </div>
</aside>
