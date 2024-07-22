<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WebhooksController extends Controller
{
    function handle(Request $request)
    {
        $payload = $request->all();
        Log::info("message received: " . json_encode($payload));
        // Do something with the payload


        // try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer NNSXS.DP6SXYTALIPHEVTTC46BC3COMIGVYXUGYCACUEI.T7T5BINLBTIVBA5E6Y7QF2EVRAK4SD3BYLD7C3Q4NGIFD7IAFO2A',
            ])->post('https://eu1.cloud.thethings.network/api/v3/as/applications/rajasthan/webhooks/test/devices/eui-0080e115002b5016/down/replace', [
                'downlinks' => [
                    [
                        'frm_payload' => 'vu8=',
                        'f_port' => 15,
                        'priority' => 'NORMAL'
                    ]
                ]
            ]);

            // if ($response->status() == 200) {
            //     echo $response->body();
            // } else {
            //     echo 'Unexpected HTTP status: ' . $response->status() . ' ' . $response->body();
            // }
        // } catch (Exception $e) {
        //     return response()->json(['status' => 'success']);
        // }


        return response()->json(['status' => 'success']);
    }
}
