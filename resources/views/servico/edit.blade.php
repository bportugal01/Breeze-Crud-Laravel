<x-app-layout>
   <x-slot name="pageTitle">
      Edit Article
   </x-slot>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
         {{ __('Editar Dados') }}
      </h2>
   </x-slot>
   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-lime-100 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 overflow-x-auto">
               <form action="{{ route('servico.update', ['servico' => $servico]) }}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="cid" value="{{ $servico->id }}">
                  @csrf
                  @method('put')
                  <div class="mb-6">
                     <label class="block mb-2 text-sm font-medium text-gray-900 ">Nome:</label>
                     <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Nome" autocomplete="off" placeholder="Nome do Cliente" value="{{$servico->Nome}}">
                     <span style="color:red">@error('Nome'){{$message}} @enderror</span>
                  </div>
                  <div class="mb-6">
                     <label class="block mb-2 text-sm font-medium text-gray-900 ">Telefone:</label>
                     <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Telefone" autocomplete="off" placeholder="Telefone do Cliente" value="{{$servico->Telefone}}">
                     <span style="color:red">@error('Telefone'){{$message}} @enderror</span>
                  </div>
                  <div class="mb-6">
                     <label class="block mb-2 text-sm font-medium text-gray-900 ">Endereço:</label>
                     <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Endereco" autocomplete="off" placeholder="Endereço do Cliente" value="{{$servico->Endereco}}">
                     <span style="color:red">@error('Endereco'){{$message}} @enderror</span>
                  </div>
                  <div class="mb-6">
                     <label class="block mb-2 text-sm font-medium text-gray-900 ">Bairro:</label>
                     <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Bairro" autocomplete="off" placeholder="Bairro do Cliente" value="{{$servico->Bairro}}">
                     <span style="color:red">@error('Bairro'){{$message}} @enderror</span>
                  </div>
                  <div class="mb-6">
                     <label class="block mb-2 text-sm font-medium text-gray-900 ">Cep:</label>
                     <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Cep" autocomplete="off" placeholder="Cep do Cliente" value="{{$servico->Cep}}">
                     <span style="color:red">@error('Cep'){{$message}} @enderror</span>
                  </div>
                  <div class="mb-6">
                     <label class="block mb-2 text-sm font-medium text-gray-900 ">Cidade:</label>
                     <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Cidade" autocomplete="off" placeholder="Cidade do Cliente" value="{{$servico->Cidade}}">
                     <span style="color:red">@error('Cidade'){{$message}} @enderror</span>
                  </div>
                  <div class="form-group">
                     <label for="estado">Estado:</label>
                     <select id="estado" name="Estado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="" disabled selected>Selecione o estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                     </select>
                     <span style="color:red">@error('Estado'){{$message}} @enderror</span>
                  </div>
                  <br>
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Update</button>
               </form>
            </div>
         </div>
      </div>
   </div>
   
</x-app-layout>