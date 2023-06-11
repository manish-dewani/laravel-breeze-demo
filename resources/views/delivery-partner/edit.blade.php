<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            @if(session('deliverypartnerupdatestatus'))
                <div class="alert alert-success">
                    {{ session('deliverypartnerupdatestatus') }}
                </div>
            @elseif($deliverypartner)
                {{ __('Hello Partner '.$deliverypartner->deliverypartnername.'.........') }}
            @else
                {{ __('update delivery partner details') }}
            @endif
        </h2>
    </x-slot>

    @if($deliverypartner)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('delivery-partner.partials.update-delivery-partner-form')
                    </div>
                </div>
            </div>
        </div>
    @else
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Delivery Partner details not found') }}
        </h2>
    @endif
    <a id="danger-bttn" x-data="" x-on:click.prevent="$dispatch('open-modal', 'update-delivery-partner')"  style="display: none"></a>
    <x-modal id="update-delivery-partner" name="update-delivery-partner" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <div class="p-6">
            <div class="card">
                <div class="text-right cross"> <i class="fa fa-times"></i> </div>
                <div class="card-body text-center"> <img class="display-unset height-hundred" src="https://img.icons8.com/office/100/party-baloons.png">
                    <h4>{{ __('Congratulations!, '.$deliverypartner->deliverpartnername.'') }}</h4>
                    <p>{{ __('You have successfully updated your details!') }}</p>
                </div>
            </div>
            <div class="mt-6 flex justify-center">
                <a class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"
                   href="{{ route('delivery-partner.index') }}">
                    {{ __('Go back to details') }}
                </a>
            </div>
        </div>
    </x-modal>
<script>
    @if(session('deliverypartnerupdatestatus'))
        document.addEventListener("DOMContentLoaded", function() {
           document.getElementById('danger-bttn').click();
        });
    @endif
</script>
</x-app-layout>
