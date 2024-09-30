<!-- resources/views/formulario.blade.php -->

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('NEGOCIACION') }}
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

              <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-200">Formulario de Selección</h2>
              <form action="" method="POST">
                  @csrf
                  <!-- Sección de Checkboxes -->
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4">
                      @for ($i = 1; $i <= 15; $i++)
                          <div class="flex items-center">
                              <input id="checkbox{{ $i }}" name="checkboxes[]" type="checkbox" value="opcion{{ $i }}" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                              <label for="checkbox{{ $i }}" class="ml-2 block text-gray-700 dark:text-gray-300">Opción {{ $i }}</label>
                          </div>
                      @endfor
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
</x-app-layout>
