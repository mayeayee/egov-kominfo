<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class WhatappsGateway extends Controller
{
    public function index()
    {
        $tittle = "Whatapps Gateway";
        return view('whatappsgateway.index', compact(['tittle']));
        # code...
    }

    // public function sendMessage(Request $request)
    // {
    //     // Validate the request data
    //     $validator = Validator::make($request->all(), [
    //         'number' => 'required',
    //         'message' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => $validator->errors(),
    //         ], 422);
    //     }

    //     // Prepare the data
    //     $number = $request->input('number');
    //     $message = $request->input('message');


    //     // Send the message
    //     # code...
    //     try {

    //         $response = Http::post('http://localhost:8001/send-message', [
    //             'number' => $number,
    //             'message' => $message,
    //         ]);



    //         // Check the response status and return the appropriate response
    //         if ($response->successful()) {
    //             return response()->json([
    //                 'status' => true,
    //                 'message' => 'Message sent successfully',
    //                 'response' => $response->json(),
    //             ]);
    //         } else {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'Failed to send message',
    //                 'response' => $response->json(),
    //             ], $response->status());
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'An error occurred',
    //             'error' => $e->getMessage(),
    //         ], 500);
    //     }
    // }

    public function kirim($nomer, $pesan)
    {
        $number = $nomer;
        $message = $pesan;

        // Send the message
        try {
            $response = Http::post('http://103.205.82.105:8001/send-message', [
                'number' => $number,
                'message' => $message,
            ]);

            // Check the response status and return the appropriate response
            if ($response->successful()) {
                return response()->json([
                    'status' => true,
                    'message' => 'Message sent successfully',
                    'response' => $response->json(),
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to send message',
                    'response' => $response->json(),
                ], $response->status());
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'An error occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
