<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeliveryPartnerStoreUpdateRequest;
use App\Models\deliveryPartner;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class DeliveryPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('delivery-partner.index', [
            'deliverypartners' => deliveryPartner::with('user')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $ispartner = false;
        if(count(Auth::user()->deliverypartner) > 0){
            $ispartner = true;
        }

        return view('delivery-partner.register',[
            'isdeliverypartner' => $ispartner
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $validated = $request->validate([
            'deliverypartnername' => 'required|string',
            'deliverypartneremail' => 'required|email',
            'deliverypartnerphone' => 'required|numeric|digits:10',
            'deliverypartnercomment' => 'required|string|max:255'
        ]);

        $request->user()->deliverypartner()->create($validated);

        return redirect('delivery-partner/create')->with('deliverypartnerstorestatus', "Congratulations.. You have become our latest Delivery Partner");
    }

    /**
     * Display the specified resource.
     */
    public function show(deliveryPartner $deliveryPartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(deliveryPartner $deliveryPartner) : View
    {
        return view('delivery-partner.edit',[
            'deliverypartner' => $deliveryPartner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DeliveryPartnerStoreUpdateRequest $request, deliveryPartner $deliveryPartner) : RedirectResponse
    {
        $validated = $request->validated();

        $deliveryPartner->update($validated);
        //flash()->overlay('Modal Message', 'Modal Title');

        return redirect(route('delivery-partner.edit', $deliveryPartner))->with("deliverypartnerupdatestatus", "updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(deliveryPartner $deliveryPartner)
    {
        //
    }
}
