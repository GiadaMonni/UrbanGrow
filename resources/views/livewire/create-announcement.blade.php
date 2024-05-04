<div>
<div class="container-fluid m-5"> 

    <h1 class="text-center m-5">Crea Card</h1>

    <div class="row justify-content-center">

        <form class="form col-12 m-5 " wire:submit.prevent="store"> 

        @csrf
            <p id="heading"> Card </p>
            
            <label class="field form-label @error('title') is-invalid @enderror" for="title">
                <svg class="input-icon" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                </svg> 
                 <input placeholder="titolo annuncio" class="input-field" wire:model="title" type="text">
                 
            </label> 
            @error('title')
                 {{$message}}
            @enderror

            <label class="field form-label @error('body') is-invalid @enderror" for="body">
                <svg class="input-icon" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                </svg> 
                <textarea type="text" wire:model="body" class="form-control"></textarea>
                
            </label>
                @error('body')
                 {{$message}}
                 @enderror

            <label class="field form-label" for="price">
                <svg class="input-icon" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                </svg> 
                 <input placeholder="Prezzo" class="input-field @error('price') is-invalid @enderror" type="number" wire:model="price">
            </label>
                @error('price')
                 {{$message}}
                 @enderror
                 
            <div class="btn">
                <button class="button1" type="submit"> Crea </button>
            </div>
            
           
        </form>
    </div>
</div>
    


    

</div>

