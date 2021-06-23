<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="mi_css">
    {{-- algo dentro de mi_css --}}
    </x-slot>

    {{-- con @push('js') incluyo codigo 'js' desde un {{ $slot }} a la entrada @stack('js') del componente ppal--}}
    @push('css')
    {{-- algo dentro de css --}}
    @endpush

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>

    {{-- con @push('js') incluyo codigo 'js' desde un {{ $slot }} a la entrada @stack('js') del componente ppal--}}
    @push('js')
    {{-- <script type="text/javascript">algo dentro de js</script> --}}
    @endpush

    <x-slot name="mi_js">
    {{-- <script type="text/javascript">algo dentro de mi_js</script> --}}
    </x-slot>
    
</x-app-layout>
