<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class DeliveryPartnerStoreUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->route('delivery_partner')->user_id === $this->user()->id;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'deliverypartnername' => ['required', 'string'],
            'deliverypartneremail' => ['required', 'email'],
            'deliverypartnerphone' => ['required', 'numeric', 'digits:10'],
            'deliverypartnercomment' => ['required','string','max:255']
        ];
    }
}
