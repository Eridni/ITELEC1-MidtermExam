<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        /* === Base Layout === */
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #1a4655 0%, #0a192b 40%, #020c1b 100%);
            color: #e0f7ff;
            overflow-y: auto;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        /* === Glowing Animated Headings === */
        @keyframes glow {
            0%, 100% { text-shadow: 0 0 10px #00bfff, 0 0 20px #00bfff; }
            50% { text-shadow: 0 0 25px #66ccff, 0 0 40px #66ccff; }
        }

        h1 {
            font-size: 2.5rem;
            margin-top: 50px;
            text-align: center;
            letter-spacing: 2px;
            animation: glow 2s ease-in-out infinite alternate;
        }

        h2 {
            color: #80e0ff;
            margin-top: 40px;
            text-shadow: 0 0 8px #00bfff;
        }

        p, li {
            color: #a8e0ff;
            line-height: 1.7;
            font-size: 1rem;
        }

        /* === CV Container === */
        .cv-container {
            background: rgba(10, 25, 47, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid #00bfff44;
            border-radius: 20px;
            padding: 40px;
            width: 80%;
            max-width: 800px;
            box-shadow: 0 0 20px #00bfff33;
            margin-bottom: 50px;
        }

        .cv-container ul {
            list-style: none;
            padding: 0;
        }

        .cv-container ul li {
            margin-bottom: 10px;
        }

        /* === Profile Image === */
        .cv-container img {
            display: block;
            margin: 20px auto;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 0 20px #00bfff;
            border: 2px solid #00bfff77;
        }

        /* === Button === */
        .btn {
            display: inline-block;
            margin: 30px auto;
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
            box-shadow: 0 0 25px #00bfff, 0 0 40px #00bfff;
            transform: scale(1.05);
        }

        /* === Floating Light Particles === */
        .particles {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: -1;
        }

        .particles span {
            position: absolute;
            display: block;
            width: 10px;
            height: 10px;
            background: #00bfff;
            border-radius: 50%;
            opacity: 0.3;
            animation: float 10s linear infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) scale(0.8);
                opacity: 0;
            }
            30% {
                opacity: 0.6;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: translateY(-10vh) scale(1.2);
                opacity: 0;
            }
        }

        /* Random positioning & timing */
        .particles span:nth-child(1) { left: 10%; animation-delay: 0s; animation-duration: 9s; }
        .particles span:nth-child(2) { left: 25%; animation-delay: 3s; animation-duration: 11s; }
        .particles span:nth-child(3) { left: 40%; animation-delay: 1s; animation-duration: 13s; }
        .particles span:nth-child(4) { left: 55%; animation-delay: 5s; animation-duration: 10s; }
        .particles span:nth-child(5) { left: 70%; animation-delay: 2s; animation-duration: 12s; }
        .particles span:nth-child(6) { left: 85%; animation-delay: 4s; animation-duration: 14s; }

    </style>
</head>
<body>
    <!-- Floating Lights -->
    <div class="particles">
        <span></span><span></span><span></span><span></span><span></span><span></span>
    </div>

    <h1>About Me</h1>

    <div class="cv-container">
        <h1>Curriculum Vitae</h1>

        <h2>Personal Information</h2>
        <img src="myGallery/pfp.jpg" alt="Profile Image">

        <ul>
            <li><strong>Name:</strong> Eric Angelo Devera</li>
            <li><strong>Address:</strong> Liloan, Cebu, Philippines</li>
            <li><strong>Email:</strong> ericdevera259@gmail.com</li>
            <li><strong>Phone:</strong> +63 912 345 6789</li>
        </ul>

        <h2>Career Objective</h2>
        <p>
            A curious and analytical thinker with a passion for usability, data-driven design, and gaming culture.
            Seeking opportunities to apply technical skills and UX research knowledge in dynamic, user-centered environments.
        </p>

        <h2>Education</h2>
        <ul>
            <li><strong>University of Cebu – Lapu-Lapu and Mandaue Campus</strong><br>
                Bachelor of Science in Information Technology<br>
                Expected Graduation: 2026
            </li>
        </ul>

        <h2>Projects</h2>
        <ul>
            <li><strong>Midterm Laravel Website</strong> – A 3-page site showcasing Laravel setup, personal CV, and gallery.</li>
            <li><strong>UX Survey Tool</strong> – Designed and implemented a survey platform for usability evaluation.</li>
            <li><strong>Game Spec Analyzer</strong> – Built a tool to compare RAM/storage requirements for popular games.</li>
        </ul>

        <h2>Languages</h2>
        <ul>
            <li>English – Fluent</li>
            <li>Bisaya – Native</li>
            <li>Tagalog – Native</li>
        </ul>
    </div>
    <div style="text-align:center;">
        <a href="{{ url('/') }}" class="btn">Home</a>
        <a href="{{ url('/aboutme') }}" class="btn">About Me</a>
        <a href="{{ url('/gallery') }}" class="btn">Gallery</a>
    </div>
</body>
</html>
