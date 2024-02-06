<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use App\Models\Point;
use App\Models\User;
class QRCodeController extends Controller
{
    public function generateQRCode()
    {
        // Проверяем, аутентифицирован ли пользователь
        if (Auth::check()) {
            $user = Auth::user();
            $transactionId = uniqid();
            session(['qrTransactionId' => $transactionId, 'userId' => $user->id]);

            $qrCode = QrCode::size(300)->generate($transactionId);

            return view('dashboard', compact('qrCode'));
        }

        // Если пользователь не аутентифицирован, выполните соответствующие действия
        return redirect()->route('login')->with('error', 'Please log in to access the dashboard.');
    }

    public function updateUserPoints(Request $request)
    {
        $user = Auth::user();

        $points = $request->input('points');

        Point::create([
            'user_id' => $user->id,
            'points' => $points,
        ]);

        return redirect()->route('dashboard')->with('success', 'Points updated successfully!');
    }
}
