<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function __invoke(Request $request)
    {
        $qrcode = base64_encode(QrCode::size($request->input('size'))
            ->style($request->input('style'))
            ->generate($request->input('url')));

        $pdf = Pdf::loadView('qrcode', compact('qrcode'));

        return $pdf->stream('qrcode.pdf');
    }
}
