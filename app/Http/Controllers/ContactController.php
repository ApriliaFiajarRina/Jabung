<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function showPengaduan()
    {
        return view('pengaduan', ['style' => 'pengaduan']);
    }

    public function sendWelcomeEmail(ContactRequest $request)
    {
        try {
            $mailData = $request->validated();
            Mail::to('dsjabung@gmail.com')->send(new SendEmail($mailData));
            return redirect()->route('pengaduan')->with(["success" => "Pesan berhasil dikirim"]);
        } catch (ValidationException $e) {
            return redirect()->route('pengaduan', ['style' => "pengaduan"])->withErrors(["errors" => $e->getMessage()]);
        }
    }
}
