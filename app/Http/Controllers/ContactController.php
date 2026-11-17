<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:150',
            'email'   => 'required|email|max:200',
            'phone'   => 'nullable|string|max:30',
            'school'  => 'nullable|string|max:200',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:3000',
        ]);

        // AJAX / fetch request
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Your message has been received. We will get back to you within 1–2 business days.',
            ]);
        }

        // Standard POST — redirect with flash
        return redirect()->route('contact')
            ->with('success', 'Thank you! Your message has been sent. We\'ll get back to you within 1–2 business days.');
    }

    public function careers()
    {
        return view('careers');
    }

    public function applyCareer(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:150',
            'email'      => 'required|email|max:200',
            'phone'      => 'required|string|max:30',
            'department' => 'required|string|max:50',
            'message'    => 'required|string|max:3000',
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['success' => true]);
        }

        return redirect()->route('careers')
            ->with('career_success', 'Thank you for applying! Our HR team will get back to you within 3–5 working days.');
    }
}
