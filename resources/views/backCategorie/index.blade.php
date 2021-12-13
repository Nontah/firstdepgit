<x-app-layout>
  
<br><br>
<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">  Liste des catégories de produits 
        <a href="{{ route('categorie.create') }}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py- px- rounded-full float-right">
                      Ajouter 
                    </button>
         </a> 

        </h3>
    </div>
 













</div>

   <div class="flex text-white px-2 float-center px-4 py-3" >
                <span class="relative w-full justify-center">
                    <input type="search" placeholder="Search" id="searchCat" name="search" class="w-full bg-blue-900 text-white transition border border-transparent focus:outline-none focus:border-gray-100 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                        <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </span>
        </div>
          @if(session()->has('ok'))
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
              <p class="font-bold">Information </p>
              <p class="text-sm">{!! session('ok') !!}.</p>
            </div>
          @endif
          @if(session()->has('mo'))
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
              <p class="font-bold">Information </p>
              <p class="text-sm">{!! session('mo') !!}.</p>
            </div>
          @endif
      @if(session()->has('del'))
  <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
  <p>{!! session('del') !!}.</p>
</div>
    @endif


<table class="border-collapse w-full">
    <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Libélé</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">dèscription</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($listCategorie as $categorie)
        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Libéleé</span>
              {{ $categorie->libele }}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">description</span>
              {{ $categorie->description }}
            </td>
       

            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>

                                                <a class="btn btn-info btn-sm mr-2" href="{{ route('categorie.show', $categorie) }}"><i class="fas fa-eye"></i>Voir </a>


                                                

                                                @if(Auth::user()!=null )
                                                    <a class="btn btn-primary btn-sm mr-2" href="{{ route('categorie.edit', $categorie) }}"><i class="fas fa-edit"></i>Editer</a>

                                                    <a onclick="event.preventDefault(); delConfirm2('{{ $categorie->id }}')" class="btn btn-danger btn-sm" href="{{ route('categorie.destroy', $categorie) }}"><i class="fas fa-trash"></i>Sup</a>
                                                @endif
                                                <form style="display: none" id="{{ $categorie->id }}" method="post" action="{{ route('categorie.destroy', $categorie) }}">
                                                    @csrf
                                                    @method("DELETE")
                                                </form>
                                         
            </td>
        </tr>

           @endforeach
    </tbody>
          
</table>
 {{ $listCategorie->links() }}

<!--
<div class="p-3">
    <button onclick="openModal(true)" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
        Open Modal
    </button>
</div> -->

<!-- overlay -->
<div id="modal_overlay" class="hidden absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

<!-- modal -->
<div id="modal" class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-1/2 md:h-3/4 bg-white rounded shadow-lg transition-opacity transition-transform duration-300">

    <!-- button close -->
    <button 
    onclick="openModal(false)"
    class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
    &cross;
    </button>

    <!-- header -->
    <div class="px-4 py-3 border-b border-gray-200">
    <h2 class="text-xl font-semibold text-gray-600">Title </h2>
    </div>

    <!-- body -->
    <div class="w-full p-3">
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, quis tempora! Similique, explicabo quaerat maxime corrupti tenetur blanditiis voluptas molestias totam? Quaerat laboriosam suscipit repellat aliquam blanditiis eum quos nihil.
    </div>

    <!-- footer -->
    <div class="absolute bottom-0 left-0 px-4 py-3 border-t border-gray-200 w-full flex justify-end items-center gap-3">
    <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">Save</button>
    <button 
        onclick="openModal(false)"
        class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded text-white focus:outline-none"
    >Close</button>
    </div>
</div>

</div>



    <script>
        const modal_overlay = document.querySelector('#modal_overlay');
        const modal = document.querySelector('#modal');

        function openModal (value){
            const modalCl = modal.classList
            const overlayCl = modal_overlay

            if(value){
            overlayCl.classList.remove('hidden')
            setTimeout(() => {
                modalCl.remove('opacity-0')
                modalCl.remove('-translate-y-full')
                modalCl.remove('scale-150')
            }, 100);
            } else {
            modalCl.add('-translate-y-full')
            setTimeout(() => {
                modalCl.add('opacity-0')
                modalCl.add('scale-150')
            }, 100);
            setTimeout(() => overlayCl.classList.add('hidden'), 300);
            }
        }
        //openModal(true)
    </script>




</x-app-layout>  