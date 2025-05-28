<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت‌نام</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #b3d5e6; /* Light background color */
            color: #000000; /* Dark text color */
            margin: 0;
            padding: 0;
        }

        /* Layout */
        .x-guest-layout {
            max-width: 400px; /* Set maximum width for the form */
            margin: 140px auto; /* Center the form vertically and horizontally */
            padding: 40px;
            background-color: rgb(247, 188, 220); /* White background for the form */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            direction: rtl; /* راست‌چین کردن محتوا */
        }

        /* Input Labels */
        .x-input-label {
            font-weight: bold; /* Bold labels */
            margin-bottom: 4px; /* Space below labels */
            display: block; /* Display labels as block */
        }

        /* Text Inputs */
        .x-text-input {
            width: 100%; /* Full width */
            padding: 10px; /* Padding inside input */
            border: 1px solid #d1d5db; /* Light gray border */
            border-radius: 20px; /* Rounded corners */
            transition: border-color 0.2s; /* Smooth transition for border color */
        }

        .x-text-input:focus {
            border-color: #c72259; /* Change border color on focus */
            outline: none; /* Remove default outline */
            box-shadow: 0 0 0 2px rgba(7, 155, 7, 0.5); /* Add a focus ring */
        }

        /* Input Errors */
        .x-input-error {
            color: #2f6320; /* Red color for error messages */
            margin-top: 4px; /* Space above error messages */
        }

        /* Button Styles */
        .x-primary-button {
            background-color: #833964; /* Indigo background */
            color: white; /* White text */
            padding: 10px 15px; /* Padding inside button */
            border: none; /* No border */
            border-radius: 20px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.2s; /* Smooth transition for background color */
        }

        .x-primary-button:hover {
            background-color: #0a0a0a; /* Darker indigo on hover */
        }

        /* Flex Container */
        .flex {
            display: flex; /* Flexbox layout */
        }

        .items-center {
            align-items: center; /* Center items vertically */
        }

        .justify-end {
            justify-content: flex-end; /* Align items to the right */
        }

        /* Margin Space */
        .mt-4 {
            margin-top: 14px; /* Space above elements */
        }

        .ms-4 {
            margin-left: 16px; /* Space left of elements */
        }
    </style>
</head>
<body>
    <div class="x-guest-layout">
        <form method="POST" action="/register">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Name -->
            <div>
                <label for="name" class="x-input-label">نام</label>
                <input id="name" class="x-text-input block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
                <div class="x-input-error mt-2">
                    <!-- اینجا باید پیام خطا برای نام را نمایش دهید -->
                </div>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" class="x-input-label">ایمیل</label>
                <input id="email" class="x-text-input block mt-1 w-full" type="email" name="email" required autocomplete="username" />
                <div class="x-input-error mt-2">
                    <!-- اینجا باید پیام خطا برای ایمیل را نمایش دهید -->
                </div>
            </div>
                        <!-- تلفن  -->

             <div class="mt-4">
                <label for="phone" class="x-input-label">شماره تماس</label>
                <input id="phone" class="x-text-input block mt-1 w-full" type="phone" name="phone" required autocomplete="new-phone" />
                <div class="x-input-error mt-2">
                    <!-- اینجا باید پیام خطا برای رمزعبور را نمایش دهید -->
                </div>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="x-input-label">رمزعبور</label>
                <input id="password" class="x-text-input block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <div class="x-input-error mt-2">
                    <!-- اینجا باید پیام خطا برای رمزعبور را نمایش دهید -->
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="x-input-label">تأیید رمزعبور</label>
                <input id="password_confirmation" class="x-text-input block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                <div class="x-input-error mt-2">
                    <!-- اینجا باید پیام خطا برای تأیید رمزعبور را نمایش دهید -->
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/login">
                    قبلاً ثبت‌نام کرده‌اید؟
                </a>

                <button type="submit" class="x-primary-button ms-4">
                    ثبت‌نام
                </button>
            </div>
        </form>
    </div>
</body>
</html>