<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RiskEvent;
use Illuminate\Http\Request;

class RiskEventController extends Controller
{
    public function store(Request $request)
    {
        // Validating the incoming JSON data
        $validatedData = $request->validate([
            'DetailKejadianRisikoOperasional.payloads.BulanPelaporan.answer' => 'required|string',
            'DetailKejadianRisikoOperasional.payloads.Quarter.answer' => 'required|string',
            'DetailKejadianRisikoOperasional.payloads.TanggalKejadian.answer' => 'required|date',
            'DetailKejadianRisikoOperasional.payloads.TanggalDitemukan.answer' => 'required|date',
            'DetailKejadianRisikoOperasional.payloads.DeskripsiKejadian.answer' => 'required|string',
            'DetailKejadianRisikoOperasional.payloads.DeskripsiPenyebab.answer' => 'required|string',
            'DetailKerugian.payloads.TerkenaDampak.answer' => 'required|array',
            'DetailKerugian.payloads.KerugianFinancial.answer' => 'nullable|string',
            'DetailKerugian.payloads.PotensialKerugianFinancial.answer' => 'required|string',
            'DetailKerugian.payloads.Status.answer' => 'required|string',
            'DetailKerugian.payloads.KerugianNonFinancial.answer' => 'required|string',
        ]);

        // Create a new RiskEvent model with the validated data
        $riskEvent = RiskEvent::create([
            'bulan_pelaporan' => $validatedData['DetailKejadianRisikoOperasional']['payloads']['BulanPelaporan']['answer'],
            'quarter' => $validatedData['DetailKejadianRisikoOperasional']['payloads']['Quarter']['answer'],
            'tanggal_keadaan' => $validatedData['DetailKejadianRisikoOperasional']['payloads']['TanggalKejadian']['answer'],
            'tanggal_ditemukan' => $validatedData['DetailKejadianRisikoOperasional']['payloads']['TanggalDitemukan']['answer'],
            'deskripsi_keadaan' => $validatedData['DetailKejadianRisikoOperasional']['payloads']['DeskripsiKejadian']['answer'],
            'deskripsi_penyebab' => $validatedData['DetailKejadianRisikoOperasional']['payloads']['DeskripsiPenyebab']['answer'],
            'terkena_dampak' => json_encode($validatedData['DetailKerugian']['payloads']['TerkenaDampak']['answer']),
            'kerugian_financial' => $validatedData['DetailKerugian']['payloads']['KerugianFinancial']['answer'],
            'potensial_kerugian_financial' => $validatedData['DetailKerugian']['payloads']['PotensialKerugianFinancial']['answer'],
            'status' => $validatedData['DetailKerugian']['payloads']['Status']['answer'],
            'kerugian_non_financial' => $validatedData['DetailKerugian']['payloads']['KerugianNonFinancial']['answer'],
        ]);

        // Respond with the created risk event data
        return response()->json($riskEvent, 201);
    }

    public function index()
    {
        // Fetch all risk events and return as JSON response
        $riskEvents = RiskEvent::all();
        return response()->json($riskEvents);
    }
}
