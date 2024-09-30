<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Contratos') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <!-- Contenedor más ancho para la tabla -->
      <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-x-auto shadow-xl sm:rounded-lg">
              <table class="min-w-full border border-gray-200">
                  <thead class="bg-blue-500 text-white">
                      <tr>
                          <th class="px-6 py-3 text-left text-sm font-semibold">ID</th>
                          <th class="px-6 py-3 text-left text-sm font-semibold">No. Contrato</th>
                          <th class="px-6 py-3 text-left text-sm font-semibold">Tipo</th>
                          <th class="px-6 py-3 text-left text-sm font-semibold">Fecha Inicio</th>
                          <th class="px-6 py-3 text-left text-sm font-semibold">Fecha Fin</th>
                          <th class="px-6 py-3 text-left text-sm font-semibold">Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($contratos as $contrato)
                          <tr class="{{ $loop->even ? 'bg-green-100' : 'bg-white' }}">
                              <td class="px-6 py-4 border-t border-gray-200">{{ $contrato->id }}</td>
                              <td class="px-6 py-4 border-t border-gray-200">{{ $contrato->no_contrato }}</td>
                              <td class="px-6 py-4 border-t border-gray-200">{{ $contrato->tipo }}</td>
                              <td class="px-6 py-4 border-t border-gray-200">{{ \Carbon\Carbon::parse($contrato->fecha_inicio)->format('d/m/Y') }}</td>
                              <td class="px-6 py-4 border-t border-gray-200">{{ \Carbon\Carbon::parse($contrato->fecha_fin)->format('d/m/Y') }}</td>
                              <td class="px-6 py-4 border-t border-gray-200">
                                  <!-- Botones de Acción -->
                                  <div class="flex space-x-2">
                                      <!-- Botón Visualizar -->
                                      <a href="{{ route('contratos.show', $contrato->id) }}" class="text-blue-600 hover:text-blue-900" title="Visualizar">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                          </svg>
                                      </a>
                                      <!-- Botón Editar -->
                                      <a href="" class="text-green-600 hover:text-green-900" title="Editar">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5M16.5 2.5a2.121 2.121 0 113 3L7 19l-4 1 1-4 12.5-12.5z" />
                                          </svg>
                                      </a>
                                  </div>
                              </td>
                          </tr>
                      @endforeach
                      @if($contratos->isEmpty())
                          <tr>
                              <td colspan="6" class="px-6 py-4 text-center border-t border-gray-200 text-gray-500">
                                  No hay contratos disponibles.
                              </td>
                          </tr>
                      @endif
                  </tbody>
              </table>
              <!-- Opcional: Paginación -->
              {{-- <div class="mt-4">
                  {{ $contratos->links() }}
              </div> --}}
          </div>
      </div>
  </div>
</x-app-layout>
