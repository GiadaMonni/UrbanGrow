<!-- inizio navbar principale -->
<nav class="container-fluid">
  
    <div class="row">
      <div class="navbar col-2 ms-1">
        <div class="menu-icon" id="menuIcon">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <div class="dropdown">
          @guest
          <a href="#">Chi siamoi </a>
          <a href="#">Trabalhe com nós</a>
          <a href="#">Contatos</a>
          @else
          <a href="#"> Profilo </a>
          <a href="#">Meus pedidos</a>
          <a href="#">Trabalhe com nós</a>
          <a href="#">Contato</a>
          <a href="{{route('announcements.create')}}" aria-current="page">Crea Card</a>
          <a href="/logout" onclick="event.preventDefault();getElementById('form-logout').submit();"> Logout </a>
          <form id="form-logout" action="{{route('logout')}}" method="post" class="d-none"> @csrf</form>
          @endguest
        </div>  
      </div>
      <div class="d-flex justify-content-around col-8">
        <!-- <img class="logo1" src="/public/img/ultimologodelcazzo.png" alt=""> -->
        <img class="logo1" src="{{ asset('img/ultimologodelcazzo.png') }}" alt="">

       </div>
    </div>
  </nav>
  
<!-- fine navbar principale -->