<x-app-layout class="bg-lime-600">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>
   <x-slot name="pageTitle">
      Create Article
   </x-slot>

   <x-slot name="header" class="bg-lime-600">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
         {{ __('Cadastro de Clientes') }}
      </h2>
   </x-slot>
   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-lime-100 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 overflow-x-auto">
               <form action="{{ route('servico.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group">
                     <x-input-label for="Nome" :value="__('Nome')" />
                     <input class="bg-gray-50 border shadow-md shadow-lime-300/40 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Nome" autocomplete="off" placeholder="Nome do Cliente">
                     <span style="color:red">@error('Nome'){{$message}} @enderror</span>
                  </div>

                  <br>

                  <div class="form-group">
                     <x-input-label for="Telefone" :value="__('Telefone')" />
                     <input class="bg-gray-50 border shadow-md shadow-lime-300/40 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Telefone" autocomplete="off" id="telefone" placeholder="(xx) xxxxx-xxxx" maxlength="15"  oninput="formatarTelefone(event)" onkeypress="return blockletras(window.event.keyCode)" >
                     <span style="color:red">@error('Telefone'){{$message}} @enderror</span>
                  </div>

                  <br>

                  <div class="form-group">
                     <x-input-label for="Endereco" :value="__('Endereço')" />
                     <input class="bg-gray-50 border shadow-md shadow-lime-300/40 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Endereco" :value="old('Endereco')" id="Endereco" placeholder="Endereço do Cliente">
                     <span style="color:red">@error('Endereco'){{$message}} @enderror</span>
                  </div>

                  <br>

                  <div class="form-group">
                     <x-input-label for="Bairro" :value="__('Bairro')" />
                     <input class="bg-gray-50 border shadow-md shadow-lime-300/40 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Bairro" :value="old('Bairro')" id="Bairro" autocomplete="off" placeholder="Bairro do Cliente">
                     <span style="color:red">@error('Bairro'){{$message}} @enderror</span>
                  </div>

                  <br>

                  <div class="form-group">
                     <x-input-label for="Cep" :value="__('Cep')" />
                     <input class="bg-gray-50 border  shadow-md shadow-lime-300/40 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Cep" :value="old('Cep')" id="Cep" autocomplete="off" placeholder="Cep do Cliente">
                     <span style="color:red">@error('Cep'){{$message}} @enderror</span>
                  </div>

                  <br>

                  <div class="form-group">
                     <x-input-label for="Cidade" :value="__('Cidade')" />
                     <input class="bg-gray-50 border  shadow-md shadow-lime-300/40 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="text" class="form-control" name="Cidade" :value="old('Cidade')" id="Cidade" autocomplete="off" placeholder="Cidade do Cliente" onkeypress="return blocknumeros(window.event.keyCode)">
                     <span style="color:red">@error('Cidade'){{$message}} @enderror</span>
                  </div>

                  <br>

                  <div class="form-group">
                     <x-input-label for="Estado" :value="__('Estado')" />
                     <select id="estado" name="Estado" :value="old('Estado')" class="bg-gray-50  shadow-md shadow-lime-300/40 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
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

                  <button type='submit' name='btn_cadastrar' value='cadastrar
            ' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                     Cadastrar
                  </button>

                  <a href="{{ route('servico.index') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                     Cancelar
                  </a>

                  <script>
                     document.addEventListener("DOMContentLoaded", function() {
                        const cepInput = document.querySelector('input[name="Cep"]');
                        const enderecoInput = document.querySelector('input[name="Endereco"]');
                        const bairroInput = document.querySelector('input[name="Bairro"]');
                        const cidadeInput = document.querySelector('input[name="Cidade"]');
                        const estadoSelect = document.querySelector('select[name="Estado"]');

                        cepInput.addEventListener("blur", function() {
                           const cep = cepInput.value.replace(/\D/g, ""); // Remove non-numeric characters

                           if (cep.length === 8) {
                              fetch(`https://viacep.com.br/ws/${cep}/json/`)
                                 .then(response => response.json())
                                 .then(data => {
                                    if (!data.erro) {
                                       enderecoInput.value = data.logradouro;
                                       bairroInput.value = data.bairro;
                                       cidadeInput.value = data.localidade;
                                       estadoSelect.value = data.uf;
                                    }
                                 })
                                 .catch(error => {
                                    console.error("Error fetching address data:", error);
                                 });
                           }
                        });
                     });
                  </script>
                  <script>
                     function formatarTelefone(event) {
                        const telefoneInput = event.target;
                        const telefone = telefoneInput.value.replace(/\D/g, '');

                        // Formata o telefone
                        if (telefone.length > 2) {
                           telefoneInput.value = `(${telefone.slice(0, 2)}) ${telefone.slice(2, 7)}-${telefone.slice(7, 11)}`;
                        }
                     }
                  </script>
                  <script>
                        function blockletras(keypress) {
                        // campo senha - bloqueia letras                               
                        if (keypress >= 48 && keypress <= 57) {
                           return true;
                        } else {
                           return false;
                        }
                     }

                    </script>
                    <script>
                        function blocknumeros(keypress) {
                        // campo senha - bloqueia numeros                               
                        if (keypress >= 48 && keypress <= 57) {
                           return false;
                        } else {
                           return true;
                        }
                     }
                     </script>

               </form>
            </div>
         </div>
      </div>
   </div>

</x-app-layout>