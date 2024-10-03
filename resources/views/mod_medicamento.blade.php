<!-- resources/views/formulario.blade.php -->
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('MEDICAMENTOS') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-8">

              <!-- Mensaje de Éxito -->
              @if(session('success'))
                  <div class="mb-4 p-4 bg-green-100 text-green-700 border border-green-400 rounded">
                      {{ session('success') }}
                  </div>
              @endif

              <h2 translate="no" class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-200">Profesional de Negociación y Medicamentos</h2>
              <form>
              <!-- Contenedor para los campos de texto -->
              <div id="textFieldsContainer" class="flex space-x-4">
                        <!-- Primer campo de texto -->
                        <div>
                            <label for="nombre" class="block text-gray-700 font-bold mb-2 flex flex-col items-center">Departamento Sede</label>
                            <input type="text" id="nombre" name="nombre[]" class="shadow appearance-none border rounded w-56 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required oninput="this.value = this.value.replace(/[^a-zA-ZñÑ\s]/g, '').toUpperCase();">
                        </div>

                        <div>
                            <label for="nombre" class="block text-gray-700 font-bold mb-2 flex flex-col items-center">Municipio Sede</label>
                            <input type="text" id="nombre" name="nombre[]" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required oninput="this.value = this.value.replace(/[^a-zA-ZñÑ\s]/g, '').toUpperCase();">
                        </div>
                        <div>
                            <label for="nombre" class="block text-gray-700 font-bold mb-2 flex flex-col items-center">Cobertura</label>
                            <input type="text" id="nombre" name="nombre[]" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required oninput="this.value = this.value.replace(/[^a-zA-ZñÑ\s]/g, '').toUpperCase();">
                        </div>
                        <div>
                            <label for="nombre" class="block text-gray-700 font-bold mb-2 flex flex-col items-center">Objeto Contractual</label>
                            <input type="text" id="nombre" name="nombre[]" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required oninput="this.value = this.value.replace(/[^a-zA-ZñÑ\s]/g, '').toUpperCase();">
                        </div>
                       
              </div>

              <!-- Contenedor para los campos de texto -->
              <div id="textFieldsContainer" class="flex space-x-4">
                        <!-- Primer campo de fecha -->
                        <div>
                            <label for="fecha" class="mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Fecha de Negociación</label>
                            <input type="date" id="fecha" name="fecha[]" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required >
                        </div>

                        <!-- Primer campo de texto -->
                        <div>
                            <label for="nombre" class=" mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Acta de Terminos Referencia Negociación</label>
                            <select id="selectOptions" class="block w-80 bg-gray-100 border border-gray-300 text-gray-700 py-2 px-2 pr-6 rounded text-sm leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="opcion1"></option>
                                    <option value="opcion1">FINALIZA CONTRATO</option>
                                    <option value="opcion2">FINALIZA CONTRATO PASA DE PGP A CONTRATO EVENTO NUEVO</option>
                                    <option value="opcion1">NO</option>
                                    <option value="opcion1">NO APLICA</option>
                                    <option value="opcion2">SALE DE LA RED</option>
                                    <option value="opcion2">SI</option>
                                    <!-- <option value="opcion3">Salió de la Red</option> -->
                            </select>
                        </div>

                        <div>
                            <label for="nombre" class="mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Incremento Tarifario</label>
                            <input type="text" id="nombre" name="nombre[]" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required oninput="this.value = this.value.toUpperCase();">
                        </div>

                        <!-- Primer campo de fecha -->
                        <div>
                            <label for="fecha" class="mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Fecha Envío Anexo Prestador</label>
                            <input type="date" id="fecha" name="fecha[]" class="shadow appearance-none border rounded w-56 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required oninput="this.value = this.value.replace(/[^a-zA-ZñÑ\s]/g, '').toUpperCase();">
                        </div>

                        <div>
                            
                        </div>

              </div>

              <div id="textFieldsContainer" class="flex space-x-4">
                        <!-- Primer campo de texto -->

                        <div>
                            <label for="nombre" class="mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Contrapropuesta</label>
                            <select id="selectOptions" class="block w-56 bg-gray-100 border border-gray-300 text-gray-700 py-2 px-2 pr-6 rounded text-sm leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="opcion1"></option>
                                    <option value="opcion1">SI</option>
                                    <option value="opcion2">NO</option>
                                    <!-- <option value="opcion3">Salió de la Red</option> -->
                            </select>
                        </div>

                        <!-- Primer campo de fecha -->
                        <div>
                            <label for="fecha" class="mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Fec. Envío Anx Ajustado</label>
                            <input type="date" id="fecha" name="fecha[]" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required oninput="this.value = this.value.replace(/[^a-zA-ZñÑ\s]/g, '').toUpperCase();">
                        </div>

                        <div>
                            <label for="nombre" class=" mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Aceptación por la Entidad</label>
                            <select id="selectOptions" class="block w-80 bg-gray-100 border border-gray-300 text-gray-700 py-2 px-2 pr-6 rounded text-sm leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="opcion1"></option>
                                    <option value="opcion1">FINALIZA CONTRATO</option>
                                    <option value="opcion2">FINALIZA CONTRATO PASA DE PGP A CONTRATO EVENTO NUEVO</option>
                                    <option value="opcion1">NO</option>
                                    <option value="opcion1">NO APLICA</option>
                                    <option value="opcion2">SALE DE LA RED</option>
                                    <option value="opcion2">SI</option>
                                    <!-- <option value="opcion3">Salió de la Red</option> -->
                            </select>
                        </div>

                        <div>
                            <label for="nombre" class=" mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Confirmación Envío</label>
                            <select id="selectOptions" class="block w-80 bg-gray-100 border border-gray-300 text-gray-700 py-2 px-2 pr-6 rounded text-sm leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="opcion1"></option>
                                    <option value="opcion1">FINALIZA CONTRATO</option>
                                    <option value="opcion2">FINALIZA CONTRATO PASA DE PGP A CONTRATO EVENTO NUEVO</option>
                                    <option value="opcion1">FALSO</option>
                                    <option value="opcion1">NO APLICA</option>
                                    <option value="opcion2">SALE DE LA RED</option>
                                    <option value="opcion2">VERDADERO</option>
                                    <!-- <option value="opcion3">Salió de la Red</option> -->
                            </select>
                        </div>

              </div>

              <div id="textFieldsContainer" class="flex space-x-4">

                        <!-- Primer campo de fecha -->
                        <div>
                            <label for="fecha" class="mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Fec. Envío Anexo Contratación</label>
                            <input type="date" id="fecha" name="fecha[]" class="shadow appearance-none border rounded w-60 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div>
                            <label for="nombre" class="mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Supervisión de Contrato</label>
                            <input type="text" id="nombre" name="nombre[]" class="shadow appearance-none border rounded w-56 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required oninput="this.value = this.value.toUpperCase();">
                        </div>

                        <div>
                            <label for="nombre" class="mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Valor Último Otro Si Negociación</label>
                            <input type="number" id="nombre" name="nombre[]" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required oninput="this.value = this.value.toUpperCase();">
                        </div>

                        <div>
                            <label for="nombre" class="mt-10 block text-gray-700 font-bold mb-2 flex flex-col items-center">Valor Suma Total Otro Si Negociación</label>
                            <input type="number" id="nombre" name="nombre[]" class="shadow appearance-none border rounded w-80 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required oninput="this.value = this.value.toUpperCase();">
                        </div>
              </div>
                    <!-- Campo de Observación -->
                  <div class="mt-6">
                      <label for="observacion" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Observaciones</label>
                      <textarea id="observacion" name="observacion" rows="4" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 mt-1 block w-full sm:text-sm border border-gray-300 dark:border-gray-700 rounded-md bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300" placeholder="Escribe tus observaciones aquí..."></textarea>
                  </div>

                  <!-- Botón de Guardar -->
                  <div class="mt-6 flex justify-end">
                      <button type="submit" class="inline-flex items-center px-6 py-2 border border-transparent text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-md text-lg">
                          Guardar
                      </button>
                  </div>

                </form>
          </div>
      </div>
  </div>

  <!-- Incluir el script de resultados -->
  @push('scripts')
      <script src="{{ asset('js/results.js') }}"></script>
  @endpush
</x-app-layout>
