<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ورود</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #c1e6ec; /* Light background color */
            color: #000000; /* Dark text color */
            margin: 0;
            padding: 0;
        }

        /* Layout */
        .x-guest-layout {
            max-width: 400px; /* Set maximum width for the form */
            margin: 200px auto; /* Center the form vertically and horizontally */
            padding: 30px;
            background-color: rgb(248, 209, 240); /* White background for the form */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(207, 6, 6, 0.1); /* Subtle shadow */
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
            border: 1px solid #edf1f7; /* Light gray border */
            border-radius: 10px; /* Rounded corners */
            transition: border-color 0.2s; /* Smooth transition for border color */
        }

        .x-text-input:focus {
            border-color: #010201; /* Change border color on focus */
            outline: none; /* Remove default outline */
            box-shadow: 0 0 0 2px rgba(250, 91, 255, 0.5); /* Add a focus ring */
        }

        /* Input Errors */
        .x-input-error {
            color: #44dc26; /* Red color for error messages */
            margin-top: 4px; /* Space above error messages */
        }

        /* Button Styles */
        .x-primary-button {
            background-color: #e092cd; /* Indigo background */
            color: white; /* White text */
            padding: 10px 25px; /* Padding inside button */
            border: none; /* No border */
            border-radius: 60px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.2s; /* Smooth transition for background color */
        }

        .x-primary-button:hover {
            background-color: #50b663; /* Darker indigo on hover */
        }

        /* Remember Me Checkbox */
        input[type="checkbox"] {
            margin-right: 8px; /* Space between checkbox and label */
        }

        /* Links */
        a {
            color: #0e0e0e; /* Indigo color for links */
            text-decoration: none; /* Remove underline */
        }

        a:hover {
            text-decoration: underline; /* Underline on hover */
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
    </style>
</head>
<body>
    <div class="x-guest-layout">
        <!-- Session Status -->
        <div class="mb-4">
            <!-- اینجا باید وضعیت جلسه را نمایش دهید -->
            <!-- به عنوان مثال: <p>{{ session('status') }}</p> -->
        </div>

        <form method="POST" action="/login">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Username -->
            <div>
                <label for="name" class="x-input-label">نام کاربری</label>
                <input id="name" class="x-text-input block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
                <div class="x-input-error mt-2">
                    <!-- اینجا باید پیام خطا برای نام کاربری را نمایش دهید -->
                </div>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="x-input-label">رمزعبور</label>
                <input id="password" class="x-text-input block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <div class="x-input-error mt-2">
                    <!-- اینجا باید پیام خطا برای رمزعبور را نمایش دهید -->
                </div>
            </div>
           
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">به خاطر سپردن</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/password/request">
                    فراموشی رمز عبور؟
                </a>

                <button type="submit" class="x-primary-button ms-3">
                    ورود
                </button>
            </div>
        </form>
    </div>
</body>
</html>