<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Exception;

class ProsesController extends Controller
{
    const API_KEY = '[API_KEY MU]';
    const PASSWORD = '[PASSWORD WALLET MU]';

    public function ProsesBeli(Request $request)
    {

        //lakukan proses dengan crypto api
        $urlApicoinremitter = 'https://coinremitter.com/api/v3/BTC/create-invoice';

        $client = new Client();

        try {
            $response = $client->post($urlApicoinremitter, [
                'json' => [
                    'api_key' => self::API_KEY,
                    'password' => self::PASSWORD,
                    // AMOUNT adalah BTC
                    'amount' => '0.00048'
                ],
            ]);

            $statusCode = $response->getStatusCode();
            $data = json_decode($response->getBody(), true);

            // Lakukan sesuatu dengan data yang diterima dari API

            echo "Status Code: $statusCode\n";
            echo "Response Data:\n";
            print_r($data);
        } catch (Exception $e) {
            // Tangani kesalahan jika ada
            echo 'Error: ' . $e->getMessage() . "\n";
        }
    }

    //karena method api nya POST user di berikan button [CEK PEMBAYARAN]
    public function cekPembayaran(Request $request)
    {
        $invoice_id = $request->input('invoice_id');
        $urlApicoinremitter = 'https://coinremitter.com/api/v3/BTC/get-invoice';

        $client = new Client();

        try {
            $response = $client->post($urlApicoinremitter, [
                'json' => [
                    'api_key' => self::API_KEY,
                    'password' => self::PASSWORD,
                    'invoice_id' => $invoice_id
                ],
            ]);

            $statusCode = $response->getStatusCode();
            $data = json_decode($response->getBody(), true);

            // Lakukan sesuatu dengan data yang diterima dari API

            echo "Status Code: $statusCode\n";
            echo "Response Data:\n";
            print_r($data);
        } catch (Exception $e) {
            // Tangani kesalahan jika ada
            echo 'Error: ' . $e->getMessage() . "\n";
        }
    }
}
