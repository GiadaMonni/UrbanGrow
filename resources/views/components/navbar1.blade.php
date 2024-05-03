use Illuminate\Support\Facades\Auth;
<!-- navbar piccola -->
<nav class="navpic container-fluid">
       <div class="row">
       <ul class="col-6 justify-content-start">
        <li>
          <a href="{{route('homepage')}}"><i class="fa-solid fa-house"></i>
        </a>
        </li>

        
        
      </ul>
      <ul class="col-6">
        <li> 
          <a href="{{route('login')}}">
            <i class="fa-regular fa-user"></i>
        </a>
        </li>

        <li>
          <a href="/carrello_index.html">
            <i class="fa-solid fa-basket-shopping"></i>
          </a>
        </li>
      </ul>
       </div>

    </nav>
<!--  fine navbar piccola -->