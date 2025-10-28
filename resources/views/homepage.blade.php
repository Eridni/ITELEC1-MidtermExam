<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What is Laravel?</title>
    <style>
        /* Base styles */
        body {
            margin: 0;
            padding: 40px 20px;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #1a4655 0%, #0a192b 40%, #020c1b 100%);
            color: #e0f7ff;
            position: relative;
            min-height: 100%;
            overflow-x: hidden;
        }

        /* Heading glow */
        h1 {
            font-size: 2rem;
            margin-top: 40px;
            color: #b3ecff;
            text-shadow: 0 0 10px #00bfff, 0 0 20px #00bfff, 0 0 40px #00bfff;
            animation: titleGlow 3s ease-in-out infinite alternate;
            text-align: center;
        }

        @keyframes titleGlow {
            from { text-shadow: 0 0 10px #00bfff, 0 0 20px #00bfff; }
            to { text-shadow: 0 0 30px #66ccff, 0 0 50px #00bfff; }
        }

        p {
            max-width: 800px;
            font-size: 1.1rem;
            color: #a8e0ff;
            line-height: 1.7;
            margin: 20px auto;
            background: rgba(255,255,255,0.03);
            padding: 15px 25px;
            border-left: 2px solid #00bfff;
            border-radius: 10px;
            box-shadow: 0 0 10px #00bfff22;
        }

        code {
            background: rgba(0, 191, 255, 0.1);
            padding: 3px 8px;
            border-radius: 5px;
            color: #00e0ff;
            font-size: 0.95rem;
        }

        .btn {
            display: inline-block;
            margin: 40px auto;
            padding: 12px 30px;
            border-radius: 30px;
            background: rgba(0, 191, 255, 0.1);
            border: 1px solid #00bfff;
            color: #e0f7ff;
            font-weight: 600;
            text-decoration: none;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 0 10px #00bfff33;
        }

        .btn:hover {
            background: #00bfff;
            color: #000;
            box-shadow: 0 0 20px #00bfff, 0 0 40px #00bfff;
            transform: scale(1.05);
        }

        /* Floating lights */
        .lights {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
            pointer-events: none;
        }

        .light {
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: radial-gradient(circle, #00bfff, transparent 70%);
            opacity: 0;
            animation: float 8s linear infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) scale(0.5);
                opacity: 0;
            }
            20% { opacity: 0.8; }
            50% {
                transform: translateY(50vh) scale(1.2);
                opacity: 1;
            }
            80% { opacity: 0.5; }
            100% {
                transform: translateY(-10vh) scale(0.8);
                opacity: 0;
            }
        }

        /* Randomized floating lights */
        .light:nth-child(1) { left: 10%; animation-delay: 0s; animation-duration: 7s; }
        .light:nth-child(2) { left: 25%; animation-delay: 2s; animation-duration: 9s; }
        .light:nth-child(3) { left: 45%; animation-delay: 1s; animation-duration: 8s; }
        .light:nth-child(4) { left: 65%; animation-delay: 3s; animation-duration: 10s; }
        .light:nth-child(5) { left: 80%; animation-delay: 4s; animation-duration: 9s; }
        .light:nth-child(6) { left: 90%; animation-delay: 5s; animation-duration: 11s; }
        .light:nth-child(7) { left: 50%; animation-delay: 6s; animation-duration: 12s; }
    </style>
</head>
<body>
    <div class="lights">
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
    </div>

    <h1>What is Laravel?</h1>
    <p>Laravel is a web application framework with expressive, elegant syntax.
        It aims to make the development process a pleasing one for the developer 
        without sacrificing application functionality.</p>

    <p>Laravel is a modern PHP framework designed to make web development faster,
        easier, and more enjoyable. It follows the MVC (Model-View-Controller) 
        architecture, which helps organize code cleanly and efficiently.</p>

    <h1>How to set up Laravel?</h1>

    <p><strong>Step 1:</strong> Install Composer  
        Laravel uses Composer to manage dependencies. Download and install it from 
        <a href="https://getcomposer.org" target="_blank" style="color:#00e0ff;">getcomposer.org</a>.
    </p>

    <p><strong>Step 2:</strong> Install Laravel  
        Once Composer is installed, open your terminal or command prompt and run:  
        <code>composer global require laravel/installer</code>
    </p>

    <p><strong>Step 3:</strong> Create a New Laravel Project  
        Navigate to the folder where you want your project, then run:  
        <code>laravel new project-name</code>
    </p>

    <p><strong>Step 4:</strong> Configure Environment  
        Navigate into your project directory: <code>cd project-name</code><br>
        Copy the example environment file and create a new .env file: <code>cp .env.example .env</code><br>
        Generate an application key: <code>php artisan key:generate</code>
    </p>

    <p><strong>Step 5:</strong> Run the Development Server  
        Start the Laravel development server by running: <code>php artisan serve</code><br>
        Your application will be accessible at <code>http://localhost:8000</code>
    </p>

    <div style="text-align:center;">
        <a href="{{ url('/') }}" class="btn">Home</a>
        <a href="{{ url('/aboutme') }}" class="btn">About Me</a>
        <a href="{{ url('/gallery') }}" class="btn">Gallery</a>
    </div>
</body>
</html>
