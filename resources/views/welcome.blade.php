<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Message</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #00f2fe 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        h1 {
            font-size: 4rem;
            color: #fff;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.5),
                         0 0 40px rgba(255, 0, 255, 0.3),
                         0 5px 15px rgba(0, 0, 0, 0.3);
            animation: pulse 2s ease-in-out infinite, rainbow 3s linear infinite;
            letter-spacing: 3px;
            font-weight: bold;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes rainbow {
            0% { filter: hue-rotate(0deg); }
            100% { filter: hue-rotate(360deg); }
        }

        .heart {
            position: absolute;
            width: 20px;
            height: 20px;
            background: red;
            transform: rotate(45deg);
            animation: float 6s ease-in-out infinite;
            opacity: 0.7;
        }

        .heart::before,
        .heart::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: red;
            border-radius: 50%;
        }

        .heart::before {
            left: -10px;
        }

        .heart::after {
            top: -10px;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(45deg); opacity: 0; }
            10%, 90% { opacity: 0.7; }
            50% { transform: translateY(-100vh) rotate(45deg); }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>I LOVE YOU BABY MWAAA 6 7</h1>
    </div>

    <script>
        function createHeart() {
            const heart = document.createElement('div');
            heart.className = 'heart';
            heart.style.left = Math.random() * 100 + 'vw';
            heart.style.animationDuration = (Math.random() * 3 + 3) + 's';
            heart.style.animationDelay = Math.random() * 2 + 's';
            document.body.appendChild(heart);

            setTimeout(() => {
                heart.remove();
            }, 6000);
        }

        setInterval(createHeart, 300);
    </script>
</body>
</html>