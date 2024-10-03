<!-- resources/views/formulario.blade.php -->
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('MÓDULO ÁREA DE NEGOCIACIÓN') }}
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

              <h2 translate="no" class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-200">Documentos Pre-Contractuales</h2>
              <form action="" method="POST">
                  @csrf

                    <!-- Contenedor principal para la tarjeta de resultados dividida -->
                    <div class="grid grid-cols-3 gap-4 p-4 bg-gray-100 rounded-lg shadow-md w-full">
                        
                        <!-- Parte izquierda -->
                        <div class="left bg-white p-4 rounded-lg shadow-md">
                            <h2 class="text-xl font-bold text-gray-700">Total</h2>
                            <p class="text-gray-700">Seleccionados: <span id="checkedCount" class="text-green-500">0</span></p>
                        </div>

                        <!-- Parte central -->
                        <div class="center bg-white p-4 rounded-lg shadow-md">
                            <h2 class="text-xl font-bold text-gray-700">Total</h2>
                            <p class="text-gray-700">No Seleccionados: <span id="uncheckedCount" class="text-red-500">0</span></p>
                        </div>

                        <!-- Parte derecha -->
                        <div class="right bg-white p-4 rounded-lg shadow-md">
                            <h2 class="text-xl font-bold text-gray-700">Total</h2>
                            <p class="text-gray-700">Porcentaje Seleccionados: <span id="selectedPercentage" class="font-bold text-gray-700">0%</span></p>
                        </div>

                    </div>
                
                  
                                        
                  <!-- Sección de Checkboxes -->
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 mt-4">
                        
                        <div translate="no" class="flex items-center">
                            <input id="info_general" name="info_general" type="checkbox" value="info_general" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="info_general" class="ml-2 block text-gray-700 dark:text-gray-300">Información General</label>
                        </div>

                        <div class="flex items-center">
                            <input id="camara_comercio" name="camara_comercio" type="checkbox" value="camara_comercio" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="camara_comercio" class="ml-2 block text-gray-700 dark:text-gray-300">Cámara de Comercio</label>
                        </div>

                        <div class="flex items-center">
                            <input id="info_tributaria" name="info_tributaria" type="checkbox" value="info_tributaria" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="info_tributaria" class="ml-2 block text-gray-700 dark:text-gray-300">Información Tributaria</label>
                        </div>

                        <div class="flex items-center">
                            <input id="rep_legal" name="rep_legal" type="checkbox" value="rep_legal" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="rep_legal" class="ml-2 block text-gray-700 dark:text-gray-300">Representante Legal</label>
                        </div>
                        
                        <div translate="no" class="flex items-center">
                            <input id="info_hab" name="info_hab" type="checkbox" value="info_hab" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="info_hab" class="ml-2 block text-gray-700 dark:text-gray-300">Información de Habilitación</label>
                        </div>

                        <div class="flex items-center">
                            <input id="cap_instalada" name="cap_instalada" type="checkbox" value="cap_instalada" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="cap_instalada" class="ml-2 block text-gray-700 dark:text-gray-300">Capacidad Instalada</label>
                        </div>

                        <div translate="no" class="flex items-center">
                            <input id="ind_calidad" name="ind_calidad" type="checkbox" value="ind_calidad" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="ind_calidad" class="ml-2 block text-gray-700 dark:text-gray-300">Indicadores de Calidad</label>
                        </div>

                        <div translate="no" class="flex items-center">
                            <input id="tasa_vig" name="tasa_vig" type="checkbox" value="tasa_vig" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="tasa_vig" class="ml-2 block text-gray-700 dark:text-gray-300">Tasa de Vigilancia SNS</label>
                        </div>

                        <div class="flex items-center">
                            <input id="poliza" name="poliza" type="checkbox" value="poliza" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="poliza" class="ml-2 block text-gray-700 dark:text-gray-300">Póliza Responsabilidad Civil y Terceros</label>
                        </div>

                        <div class="flex items-center">
                            <input id="aportes" name="aportes" type="checkbox" value="aportes" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="aportes" class="ml-2 block text-gray-700 dark:text-gray-300">Aportes Parafiscales y Seguridad Social</label>
                        </div>

                        <div class="flex items-center">
                            <input id="modelo" name="modelo" type="checkbox" value="modelo" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="modelo" class="ml-2 block text-gray-700 dark:text-gray-300">Modelo de Prestación Servicios de Salud</label>
                        </div>

                        <div class="flex items-center">
                            <input id="sarlaft" name="sarlaft" type="checkbox" value="sarlaft" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="sarlaft" class="ml-2 block text-gray-700 dark:text-gray-300">SARLAFT</label>
                        </div>

                        <div translate="no" class="flex items-center">
                            <input id="rethus" name="rethus" type="checkbox" value="rethus" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="rethus" class="ml-2 block text-gray-700 dark:text-gray-300">ReTHUS</label>
                        </div>
                        
                        <div translate="no" class="flex items-center">
                            <input id="farmaco" name="farmaco" type="checkbox" value="farmaco" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="farmaco" class="ml-2 block text-gray-700 dark:text-gray-300">Protocolo de Farmacovigilancia y Tecnovigilancia</label>
                        </div>

                        <div translate="no" class="flex items-center">
                            <input id="mercado" name="mercado" type="checkbox" value="mercado" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="mercado" class="ml-2 block text-gray-700 dark:text-gray-300">Estudio de Mercado</label>
                        </div>

                        <div translate="no" class="flex items-center">
                            <input id="licencia" name="licencia" type="checkbox" value="mercado" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="mercado" class="ml-2 block text-gray-700 dark:text-gray-300">Estudio de Mercado</label>
                        </div>

                        <div translate="no" class="flex items-center">
                            <input id="acuerdo" name="acuerdo" type="checkbox" value="acuerdo" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="acuerdo" class="ml-2 block text-gray-700 dark:text-gray-300">Acuerdo de Voluntad</label>
                        </div>

                        <div translate="no" class="flex items-center">
                            <input id="banco" name="banco" type="checkbox" value="banco" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded checkbox" onchange="updateValues()">
                            <label for="banco" class="ml-2 block text-gray-700 dark:text-gray-300">Certificación Bancaria</label>
                        </div>

                        <div class="mt-6 ">
                            <label for="selectOptions" class="block text-gray-700 font-bold mb-2">Documentos Completos Hasta la Fecha Limite de Entrega ?</label>
                            
                        </div>

                        <div translate="no" class="flex items-center">
                        <select id="selectOptions" class="block w-32 bg-gray-100 border border-gray-300 text-gray-700 py-1 px-2 pr-6 rounded text-sm leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="opcion1"></option>
                                    <option value="opcion1">Si</option>
                                    <option value="opcion2">No</option>
                                    <option value="opcion3">Salió de la Red</option>
                            </select>
                        </div>
                    </div>

                    <!-- Incluir el archivo JavaScript externo -->
                    <script src="{{ asset('js/script.js') }}"></script>

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
</x-app-layout>
