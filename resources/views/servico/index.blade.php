<x-app-layout style="background-color: #d6e074;">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
   <x-slot name="pageTitle">
      Article List
   </x-slot>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Agendamento de Serviços') }}
      </h2>
   </x-slot>
   <div class="py-12 ">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
         <div class="bg-lime-100 overflow-hidden shadow-sm sm:rounded-lg border-lime-600 " >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 text-gray-900 bg-lime-200">
                  {{ __("Listagem de Clientes") }}
               </div>
               <div class="overflow-x-auto">
                  <form action="{{ route('servico.index') }}" method="GET">
                     <div class="p-6 text-gray-900 ">
                        <label for="table-search" class="sr-only">Pesquisar</label>
                        <div class="relative mt-1">
                           <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                              <svg class="w-5 h-5 text-lime-600" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                              </svg>
                           </div>
                           <input id="table-search" type="text" class="pl-10 pr-4 py-2 w-70 border-lime-600 rounded-md focus:border-indigo-500 focus:ring-indigo-500" placeholder="Pesquise pelo nome do cliente" oninput="searchTable()">
                        </div>
                  </form>

                  &nbsp;
                  <table class="w-full text-sm text-left text-gray-500 bg-lime-600 border-collapse ">
                     <thead class="text-xs text-gray-700 uppercase bg-lime-200">
                        <tr>
                           <th scope="col" class="py-3 px-6 border border-2 border-lime-400  rounded-md ">ID</th>
                           <th scope="col" class="py-3 px-6 border border-2 border-lime-400  ">Nome</th>
                           <th scope="col" class="py-3 px-6 border border-2 border-lime-400  ">Telefone</th>
                           <th scope="col" class="py-3 px-6 border border-2 border-lime-400  ">Endereço</th>
                           <th scope="col" class="py-3 px-6 border border-2 border-lime-400  ">Bairro</th>
                           <th scope="col" class="py-3 px-6 border border-2 border-lime-400  ">Cep</th>
                           <th scope="col" class="py-3 px-6 border border-2 border-lime-400  ">Cidade</th>
                           <th scope="col" class="py-3 px-6 border border-2 border-lime-400  ">Estado</th>
                           <th scope="col" class="py-3 px-6 border border-2 border-lime-400  ">Ações</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($list as $servico)
                        <tr class="bg-white border-b hover:bg-lime-100 transition-colors cursor-pointer  ">
                           <td class="py-3 px-6  border-solid border-2 border-lime-400  rounded-md ">{{ $servico->id }}</td>
                           <td class="py-3 px-6  border-solid border-2 border-lime-400 ">{{ $servico->Nome }}</td>
                           <td class="py-3 px-6  border-solid border-2 border-lime-400 ">{{ $servico->Telefone }}</td>
                           <td class="py-3 px-6  border-solid border-2 border-lime-400 ">{{ $servico->Endereco }}</td>
                           <td class="py-3 px-6  border-solid border-2 border-lime-400 ">{{ $servico->Bairro }}</td>
                           <td class="py-3 px-6  border-solid border-2 border-lime-400 ">{{ $servico->Cep }}</td>
                           <td class="py-3 px-6  border-solid border-2 border-lime-400 ">{{ $servico->Cidade }}</td>
                           <td class="py-3 px-6  border-solid border-2 border-lime-400 ">{{ $servico->Estado }}</td>
                           <td class="py-3 px-6 flex justify-center  border-solid border-2 border-lime-400 ">
                              <a href="{{ route('servico.edit', $servico->id) }}" class="font-medium text-blue-600 hover:underline">
                                 <i class="fas fa-edit"></i>
                              </a>
                              &nbsp;&nbsp;&nbsp;
                              @include('servico.alert.delete')
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  <script>
                     function searchTable() {
                        const input = document.getElementById('table-search');
                        const filter = input.value.toUpperCase();
                        const rows = document.getElementsByTagName('tr');

                        for (let i = 0; i < rows.length; i++) {
                           const nameColumn = rows[i].getElementsByTagName('td')[1];

                           if (nameColumn) {
                              const name = nameColumn.textContent || nameColumn.innerText;
                              const isVisible = name.toUpperCase().indexOf(filter) > -1;
                              rows[i].style.display = isVisible ? '' : 'none';
                           }
                        }
                     }
                  </script>


               </div>
            </div>
         </div>
      </div>
</x-app-layout>