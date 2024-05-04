<x-layout2>

<div class="container">
   <div class="row d-flex justify-content-center">
            
       <div class=" col-12 form-container my-5">
        <p class="title"> Registrati </p>
        <form class="form" action="{{route('register')}}" method="POST">
            @csrf
            <div class="input-group my-2">
                <label for="name"> Nome Utente </label>
                <input type="text" name="name" id="name" placeholder=" name " aria-describedby="name">
            </div>
    
            <div class="input-group  my-2">
                <label for="exampleInputEmail"> Email Address </label>
                <input type="email" name="email" id=" exampleInputEmail " placeholder=" Email Address ">
                <div id="emailHelp"> 
                    <p> Questa mail non potra` essere vista da nessuno a parte te </p>
                </div>
            </div>
    
            <div class="input-group  my-2">
                <label for="exampleInputPassword1"> Password </label>
                <input type="password" name="password" id=" exampleInputPassword1 ">
            </div>
    
            <div class="input-group  my-2">
                <label for="password_confirmation"> Conferma Password </label>
                <input type="password" name="password_confirmation" id="password_confirmation ">
            </div>
    
            <button class="sign my-5" type="submit"> Registrati </button>
        </form>
















        
        </div>
    </div>

</x-layout2>

<x-footer/>