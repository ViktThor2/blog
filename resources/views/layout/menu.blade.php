<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <!-- Container wrapper -->
  <div class="container-fluid">

    <!--LEFT Collapsible wrapper -->
    <div class="collapse navbar-collapse">

      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page"
             href="{{route('index')}}">Kezdőlap
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page"
             href="{{route('note')}}">Bejegyzések
          </a>
        </li>

      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->


    <!--RIGHT Collapsible wrapper -->
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <!-- Dropdown If loign -->
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" role="button"
                      data-mdb-toggle="dropdown" aria-expanded="true">
                @if( \Auth::guard('customer')->check() )
                   {{ \Auth::guard('customer')->user()->name }}
                @else Saját fiók
                @endif
                <i class="fas fa-user-alt"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-lg-end">

              @if( \Auth::guard('customer')->check() )

                <li><a class="dropdown-item btn btn-light"
                  href="\profil\{{ \Auth::guard('customer')->user()->id }}\modosit" >
                  Profil</a>
                </li>
{{--
                <li><a class="dropdown-item btn btn-light"
                  href="{{ route('customer.order.pivot') }}" >
                  Rendeléseim</a>
                </li>
--}}
                <li><form action="{{route('customer.logout')}}"
                          method="POST">
                          @csrf
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="btn btn-light w-100">
                                  Kijelentkezés</button>
                  </form>
                </li>

              @else
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page"
                  href="{{route('customer.login')}}">Bejelentkezés</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" aria-current="page"
                     href="{{route('customer.create')}}">Regisztráció</a>
                </li>
              @endif

            </ul>
          </li>

      </ul>
    </div>

  </div>
  <!-- Container wrapper -->
</nav>
