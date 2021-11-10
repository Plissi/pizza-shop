<form action="#" enctype="multipart/form-data" wire:submit.prevent="submit">
    @csrf
    <div class="px-4 py-8 bg-white rounded-lg shadow sm:px-10">
        <div class="py-2 mt-1">
            <label for="name"> Nom : </label>   
            <input id="name" wire:model="name" type="text" class="w-full border-yellow-500 rounded shadow-sm focus:border-yellow-500 focus:ring-yellow-500">     
        </div> 
        <div class="py-2 mt-1">
            <label for="description"> Description : </label>   
            <textarea wire:model="description" class="w-full border-yellow-500 rounded shadow-sm focus:border-yellow-500 focus:ring-yellow-500" id="description" cols="30" rows="3"></textarea>   
        </div>   
        <div class="py-2 mt-1">
            <label for="prix1"> Prix SM (fcfa) : </label> 
            <input id="prix1" wire:model="prix1" type="number" class="w-full border-yellow-500 rounded shadow-sm focus:border-yellow-500 focus:ring-yellow-500">     
        </div> 
        <div class="py-2 mt-1">
            <label for="prix2"> Prix MD (fcfa) : </label> 
            <input id="prix2" wire:model="prix2" type="number" class="w-full border-yellow-500 rounded shadow-sm focus:border-yellow-500 focus:ring-yellow-500">     
        </div> 
        <div class="py-2 mt-1">
            <label for="prix3"> Prix LG (fcfa) : </label> 
            <input id="prix3" wire:model="prix3" type="number" class="w-full border-yellow-500 rounded shadow-sm focus:border-yellow-500 focus:ring-yellow-500">     
        </div> 
        <div class="py-2 mt-1" x-data="{ loaded: false }">
            <label class="flex flex-col items-center w-full px-4 py-6 tracking-wide text-yellow-500 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-yellow-500 hover:text-white">
                @if ($photo)
                    <img src="{{ $photo->temporaryUrl() }}">
                @endif
                <span id="label-file" class="mt-2 text-base leading-normal">Choisir une image</span>
                <input type="file" x-on:change="loaded = true" accept="image/*" wire:model='photo' class="hidden" name="photo"/>
                <div wire:loading wire:target="photo">Uploading...</div>
            </label>   
        </div> 
            @error('photo') <span class="text-center text-red-600">{{ $message }}</span> @enderror
        <div class="flex justify-center py-2 my-2">
            <button class="flex-auto inline-block px-3 py-2 text-center transition transform bg-yellow-500 rounded-lg shadow-lg hover:bg-yellow-400 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-yellow-500 focus:ring-opacity-70 active:bg-yellow-600"  type="submit">Ajouter la pizza</button>  
        </div>
    </div>  
</form> 
