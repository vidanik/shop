<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // به ویو ثبت‌نام بروید
    }

    public function register(Request $request)
    {
        // اعتبارسنجی ورودی‌ها
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        // ایجاد کد تأیید (می‌توانید از روش‌های مختلفی برای تولید کد استفاده کنید)
        $verificationCode = rand(100000, 999999); // کد تأیید ۶ رقمی

        // ارسال کد تأیید به ایمیل یا شماره تماس (می‌توانید از Mail استفاده کنید)
        // Mail::to($request->email)->send(new VerificationCode($verificationCode));

        // ذخیره کد تأیید و زمان انقضا (دو دقیقه)
        session(['verification_code' => $verificationCode, 'expires_at' => now()->addMinutes(2)]);


        
        // هدایت به صفحه تأیید کد
        return redirect()->route('auth.verify');
    }

    public function showVerificationForm()
    {
        return view('auth.verify'); // به ویو تأیید کد بروید
    }

    public function verify(Request $request)
    {
        $request->validate([
            'verification_code' => 'required|integer|digits:6',
        ]);

        // بررسی کد تأیید و زمان انقضا
        if ($request->verification_code == session('verification_code') && now()->lessThanOrEqualTo(session('expires_at'))) {
            // در اینجا می‌توانید کاربر را در دیتابیس ذخیره کنید
            // User::create([...]);

            // پاک کردن کد تأیید از جلسه
            session()->forget(['verification_code', 'expires_at']);

            return redirect()->route('home'); // هدایت به صفحه اصلی یا هر صفحه دیگری
        }

        return back()->withErrors(['verification_code' => 'کد تأیید نامعتبر است یا زمان آن منقضی شده است.']);
    }
}