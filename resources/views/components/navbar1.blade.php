<!-- navbar piccola -->
<nav class="navpic container-fluid">
      <ul>
        
        <li> 
          @guest
          <a href="{{route('login')}}">
            <i class="fa-regular fa-user"></i>
        </a>
        @else
        </li>

        <li>
          <a href="/carrello_index.html">
            <i class="fa-solid fa-basket-shopping"></i>
          </a>
        </li> 

      </ul>
    </nav>
<!--  fine navbar piccola -->