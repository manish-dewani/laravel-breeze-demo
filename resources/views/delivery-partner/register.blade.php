<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            @if(session('deliverypartnerstorestatus'))
                <div class="alert alert-success">
                    {{ session('deliverypartnerstorestatus') }}
                </div>
            @elseif($isdeliverypartner)
                {{ __('You are already a delivery partner.........') }}
            @else
                {{ __('register here to become delivery partner.........') }}
            @endif
        </h2>
    </x-slot>

    @if(!$isdeliverypartner)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('delivery-partner.partials.create-delivery-partner-form')
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
