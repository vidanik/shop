<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فراموشی رمز عبور</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #c2daf1; /* Light background color */
            color: #333; /* Dark text color */
            margin: 0;
            padding: 0;
        }

        /* Layout */
        .x-guest-layout {
            max-width: 400px; /* Set maximum width for the form */
            margin: 180px auto; /* Center the form vertically and horizontally */
            padding: 20px;
            background-color: rgb(247, 195, 223); /* White background for the form */
            border-radius: 20px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(187, 9, 9, 0.1); /* Subtle shadow */
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
            width: 95%; /* Full width */
            padding: 10px; /* Padding inside input */
            border: 2px solid #d1d5db; /* Light gray border */
            border-radius: 20px; /* Rounded corners */
            transition: border-color 0.2s; /* Smooth transition for border color */
        }

        .x-text-input:focus {
            border-color: #d877d8; /* Change border color on focus */
            outline: none; /* Remove default outline */
            box-shadow: 0 0 0 2px rgba(19, 80, 4, 0.5); /* Add a focus ring */
        }

        /* Input Errors */
        .x-input-error {
            color: #dc2626; /* Red color for error messages */
            margin-top: 4px; /* Space above error messages */
        }

        /* Button Styles */
        .x-primary-button {
            background-color: #3b9c53; /* Indigo background */
            color: white; /* White text */
            padding: 10px 15px; /* Padding inside button */
            border: none; /* No border */
            border-radius: 20px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.2s; /* Smooth transition for background color */
        }

        .x-primary-button:hover {
            background-color: #020202; /* Darker indigo on hover */
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
            margin-top: 16px; /* Space above elements */
        }

        .mb-4 {
            margin-bottom: 16px; /* Space below elements */
        }
    </style>
</head>
<body>
    <div class="x-guest-layout">
        <div class="mb-4 text-sm text-gray-600">
            فراموشی رمز عبور؟ هیچ مشکلی نیست. فقط آدرس ایمیل یا شماره تماس خود را به ما اطلاع دهید و ما برای شما یک لینک بازنشانی رمز عبور ارسال خواهیم کرد که به شما اجازه می‌دهد رمز عبور جدیدی انتخاب کنید.
        </div>

        <!-- Session Status -->
        <div class="mb-4">
            <!-- وضعیت جلسه را اینجا نمایش دهید -->
            <!-- به عنوان مثال: <p>{{ session('status') }}</p> -->
        </div>

        <form method="POST" action="/password/email">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Email Address -->
            <div>
                <label for="email" class="x-input-label">ایمیل</label>
                <input id="email" class="x-text-input block mt-1 w-full" type="email" name="email" required autofocus />
                <div class="x-input-error mt-2">
                    <!-- اینجا باید پیام خطا برای ایمیل را نمایش دهید -->
                </div>
            </div>

            <div>
                <label for="phone" class="x-input-label">شماره تماس</label>
                <input id="phone" class="x-text-input block mt-1 w-full" type="phone" name="phone" required autofocus />
                <div class="x-input-error mt-2">
                    <!-- اینجا باید پیام خطا برای ایمیل را نمایش دهید -->
                </div>
            </div>


            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="x-primary-button">
                    ارسال لینک بازنشانی رمز عبور
                </button>
            </div>
        </form>
    </div>
</body>
</html>