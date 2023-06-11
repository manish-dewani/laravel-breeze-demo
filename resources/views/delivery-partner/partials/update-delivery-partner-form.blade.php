<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delivery Partner Information') }}
        </h2>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('delivery-partner.update', $deliverypartner) }}" class="mt-6 space-y-6">
    @csrf
    @method('put')
        <!-- Name -->
        <div>
            <x-input-label for="deliverypartnername" :value="__('Name')" />
            <x-text-input id="deliverypartnername" class="block mt-1 w-full" type="text" name="deliverypartnername" :value="old('deliverypartnername', $deliverypartner->deliverypartnername)" required autofocus autocomplete="deliverypartnername" />
            <x-input-error :messages="$errors->get('deliverypartnername')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="deliverypartneremail" :value="__('Email')" />
            <x-text-input id="deliverypartneremail" class="block mt-1 w-full" type="email" name="deliverypartneremail" :value="old('deliverypartneremail', $deliverypartner->deliverypartneremail)" required autocomplete="deliverypartneremail" />
            <x-input-error :messages="$errors->get('deliverypartneremail')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="deliverypartnerphone" :value="__('Phone')" />
            <x-text-input id="deliverypartnerphone" class="block mt-1 w-full" type="text" name="deliverypartnerphone" :value="old('phone', $deliverypartner->deliverypartnerphone)" required autofocus autocomplete="deliverypartnerphone"></x-text-input>
            <x-input-error :messages="$errors->get('deliverypartnerphone')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="comment" :value="__('Comment')" />
            <textarea
                name="deliverypartnercomment"
                placeholder="{{ __('Tell us about yourself!') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('deliverypartnercomment', $deliverypartner->deliverypartnercomment) }}</textarea>
            <x-input-error :messages="$errors->get('deliverypartnercomment')" class="mt-2" />
        </div>

        <div class="mt-4 space-x-2">
            <x-primary-button class="mt-4">{{ __('Update Partner Detail') }}</x-primary-button>
            <a href="{{ route('delivery-partner.index') }}">{{ __('Cancel') }}</a>
        </div>
    </form>
</section>
