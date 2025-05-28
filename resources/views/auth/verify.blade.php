<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأیید کد</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="verify-container">
        <h1>تأیید کد</h1>
        <form action="{{ route('auth.verify.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="verification_code">کد تأیید</label>
                <input type="text" id="verification_code" name="verification_code" placeholder="کد تأیید را وارد کنید" required>
            </div>
            <button type="submit">تأیید</button>
        </form>
        <div id="timer">زمان باقی‌مانده: <span id="time">120</span> ثانیه</div>
    </div>

    <script>
        // تایمر ۲ دقیقه‌ای
        let timeLeft = 120;
        const timerElement = document.getElementById('time');

        const timer = setInterval(() => {
            if (timeLeft <= 0) {
                clearInterval(timer);
                alert("زمان تأیید کد منقضی شده است.");
                // می‌توانید کاربر را به صفحه دیگری هدایت کنید
            } else {
                timerElement.textContent = timeLeft;
                timeLeft--;
            }
        }, 1000);
    </script>
</body>
</html>