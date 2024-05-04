<div>
<div class="container-fluid m-5"> 

    <h1 class="text-center m-5">Crea Annuncio</h1>

    <div class="row justify-content-center">

        <form class="form col-12 m-5 " wire:submit.prevent="store"> 

        @csrf
            <p id="heading"> Annuncio</p>
            
            <label class="field form-label" for="title">
                <svg class="input-icon" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                </svg> 
                 <input placeholder="Title" class="input-field" wire:model="title" type="text">
            </label>

            <label class="field form-label" for="body">
                <svg class="input-icon" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                </svg> 
                <textarea type="text" wire:model="body" class="form-control"></textarea>
            </label>

            <label class="field form-label" for="price">
                <svg class="input-icon" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                </svg> 
                 <input placeholder="Prezzo" class="input-field" type="number" wire:model="price">
            </label>

            <div class="btn">
                <button class="button1" type="submit"> Crea </button>
            </div>
            
           
        </form>
    </div>
</div>
    


    

</div>

