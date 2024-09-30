<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalle de Contratos') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <!-- Contenedor más ancho para la tabla -->
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-x-auto shadow-xl sm:rounded-lg">
            
                <h1>ESTA ES LA VISTA DE CONTRATOS DETALLES CON EL CONTRATO {{$contrato}}</h1>

            </div>
        </div>
    </div>
  </x-app-layout>
  