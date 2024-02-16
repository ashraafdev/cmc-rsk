<div class="flex  justify-center gap-10" id="main">
    {{-- The Master doesn't talk, he acts. --}}
    <form class="w-full flex   " id="form">
  <div class="flex flex-wrap -mx-3 mb-6">
  <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-ref">
        Ref
      </label>
      <input wire:model="ref" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-ref" type="text" placeholder="Ref ...">
  
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"  for="grid-date">
        Date
      </label>
      <input wire:model="date" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-date" type="date" placeholder="">
  
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-titre">
        Titre
      </label>
      <input wire:model="title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-titre" type="text" placeholder="Titre ...">
  
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-Objet">
                Objet 
      </label>
      <input wire:model="object" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-Objet" type="text" placeholder="sujet  ...">
  
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-texte">
        Texte
      </label>
      <textarea wire:model="body" class="resize rounded-md appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" rows="10"></textarea>
  
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-signature">
                signature
      </label>
      <input wire:model="signature" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-signature" type="text" placeholder="signature  ...">
  
    </div>
    <div class=" ml-[80%] mt-5">
      <button wire:click="savePdf" class="shadow w-40 bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded " type="button">
        Submit
      </button>
    </div>
  </div>
</form>