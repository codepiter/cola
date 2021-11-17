<x-guest-layout>

    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('success')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

		<div class="text-gray-900 font-bold text-xl mb-2">{{ __('Solicitar Ticket de Soporte') }}</div>
		<form action="{{ route('customers.store') }}" method="POST" class="mb-4">
            @csrf


			 <!-- DNI -->
            <div>
                <x-label for="dni" :value="__('DNI del Cliente')" />

                <x-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" required autofocus />
            </div>


			 <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nombre del Cliente')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Solicitar Ticket') }}
                </x-button>
            </div>
        </form>
	
	
		<div class="rounded border w-full mx-auto mt-10">
		
		<div class="text-gray-900 font-bold text-xl my-2 mx-2">{{ __('Tickets Asignados') }}</div>
		  <!-- Tabs -->
		  <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b">
			<li class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a id="default-tab" href="#first">{{ __('Pendientes') }}</a></li>
			<li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#second">{{ __('Atendidos') }}</a></li>
		  </ul>
		  <!-- Tab Contents -->
		  <div id="tab-contents">
			<div id="first" class="p-4">
				<div class="px-2">
				  <div class="flex -mx-2">
					<div class="w-1/2 px-2">
						{{ __('Cola 1') }}
					  <div class="bg-gray-100 ">
					  
						 <div class="flex flex-col mt-8">
							<div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
								<div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
									<table class="min-w-full">
										<thead>
											<tr>
												<th
													class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
													Id</th>
												<th
													class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
													Cliente</th>
												<th
													class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
													Editar</th>								
											</tr>
										</thead>

										<tbody class="bg-white">
										 @foreach ($cola1 as $item)
											<tr>
												<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
													<div class="flex items-center">
														
														<div class="ml-4">
															<div class="text-sm font-medium leading-5 text-gray-900">
																{{ $item->customer->id}}
															</div>
														</div>
													</div>
												</td>

												<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
													<div class="text-sm leading-5 text-gray-500">{{ $item->customer->name}}</div>
												</td>

												<td
													class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
													<button data-id="{{ $item->id }}"  class="bg-transparent hover:bg-blue-500 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center item-remov" title="{{ __('Marcar como atendido') }}">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400 hover:text-white " fill="none"
															viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
														</svg>
													</button>
												</td>
											</tr>
											
						
										 @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						  
					  </div>
					</div>
					<div class="w-1/2 px-2">
						{{ __('Cola 2') }}
					  <div class="bg-gray-100">
					  
						  <div class="flex flex-col mt-8">
							<div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
								<div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
									<table class="min-w-full">
										<thead>
											<tr>
												<th
													class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
													Id</th>
												<th
													class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
													Nombre</th>
												<th
													class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
													Editar</th>								
											</tr>
										</thead>

										<tbody class="bg-white">
										 @foreach ($cola2 as $item)
											<tr>
												<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
													<div class="flex items-center">
														
														<div class="ml-4">
															<div class="text-sm font-medium leading-5 text-gray-900">
																{{ $item->customer->id}}
															</div>
														</div>
													</div>
												</td>

												<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
													<div class="text-sm leading-5 text-gray-500">{{ $item->customer->name}}</div>
												</td>

												<td
													class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
													<button data-id="{{ $item->id }}"    class="bg-transparent hover:bg-blue-500 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center item-remov">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400 hover:text-white " fill="none"
															viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
														</svg>
													</button>
												</td>
											</tr>
											
						
										 @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
						  
					 
					  </div>
					</div>
				  </div>
				</div>
			</div>
			<div id="second" class="hidden p-4">
			
				
					<x-button class="ml-3 remov-lista">
                    {{ __('Eliminar Lista') }}
					</x-button>
			
				
					<div class="flex flex-col mt-8">
						<div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
							<div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
								<table class="min-w-full">
									<thead>
										<tr>
											<th
												class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
												Id</th>
											<th
												class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
												Nombre</th>
																		
										</tr>
									</thead>

									<tbody class="bg-white">
									 @foreach ($atendidos as $item)
										<tr>
											<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
												<div class="flex items-center">
													
													<div class="ml-4">
														<div class="text-sm font-medium leading-5 text-gray-900">
															{{ $item->customer->id}}
														</div>
													</div>
												</div>
											</td>

											<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
												<div class="text-sm leading-5 text-gray-500">{{ $item->customer->name}}</div>
											</td>

											
										</tr>
										
					
									 @endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
			   
						
						<br>
					 
			</div>
		  </div>
		</div>
		
		
    </x-auth-card>


	
			
				
		
</x-guest-layout>
