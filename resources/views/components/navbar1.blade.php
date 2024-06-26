
<!-- navbar piccola -->
<nav class="navpic container-fluid">
       <div class="row">

       <ul class="col-6 justify-content-start">
        <li>
          <a href="{{route('homepage')}}"><i class="fa-solid fa-house"></i>
        </a>
        </li>
        
        @if (Auth::check())
         <li>
          {{ Auth::user()->name }}
        </li>
        @endif 
      </ul>

      <ul class="col-6"> 
        @guest
       
        <li> 
          <a href="{{route('register')}}">
          <i class="fa-regular fa-floppy-disk"></i>
        </a>
        </li>

        <li> 
          <a href="{{route('login')}}">
            <i class="fa-regular fa-user"></i>
          </a>
        </li>
        
        @else
        <li>
          <a href="/carrello_index.html">
            <i class="fa-solid fa-basket-shopping"></i>
          </a>
        </li>
        @endguest
      </ul>
       </div>

    </nav>
<!--  fine navbar piccola -->