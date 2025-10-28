<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        /* === Base Page Styles === */
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #1a4655 0%, #0a192b 40%, #020c1b 100%);
            color: #e0f7ff;
            overflow-x: hidden;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        /* === Floating Particles === */
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
            0% { transform: translateY(100vh) scale(0.8); opacity: 0; }
            30% { opacity: 0.6; }
            50% { opacity: 1; }
            100% { transform: translateY(-10vh) scale(1.2); opacity: 0; }
        }

        .particles span:nth-child(1) { left: 10%; animation-delay: 0s; animation-duration: 9s; }
        .particles span:nth-child(2) { left: 25%; animation-delay: 3s; animation-duration: 11s; }
        .particles span:nth-child(3) { left: 40%; animation-delay: 1s; animation-duration: 13s; }
        .particles span:nth-child(4) { left: 55%; animation-delay: 5s; animation-duration: 10s; }
        .particles span:nth-child(5) { left: 70%; animation-delay: 2s; animation-duration: 12s; }
        .particles span:nth-child(6) { left: 85%; animation-delay: 4s; animation-duration: 14s; }

        /* === Glowing Heading === */
        @keyframes glow {
            0%, 100% { text-shadow: 0 0 10px #00bfff, 0 0 20px #00bfff; }
            50% { text-shadow: 0 0 25px #66ccff, 0 0 40px #66ccff; }
        }

        h1 {
            font-size: 2.5rem;
            margin-top: 40px;
            text-align: center;
            letter-spacing: 2px;
            animation: glow 2s ease-in-out infinite alternate;
        }

        /* === Gallery Grid === */
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 20px;
            padding: 40px;
            width: 90%;
            max-width: 1000px;
        }

        .gallery-container img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 15px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 0 15px #00bfff33;
            border: 1px solid #00bfff55;
        }

        .gallery-container img:hover {
            transform: scale(1.08);
            box-shadow: 0 0 20px #00bfff, 0 0 30px #00bfff;
        }

        /* === Expanded Image Modal === */
        .lightbox {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .lightbox img {
            max-width: 80%;
            max-height: 80%;
            border-radius: 20px;
            box-shadow: 0 0 40px #00bfff;
            border: 2px solid #00bfff77;
            transition: transform 0.3s ease;
        }

        .lightbox.show {
            display: flex;
        }

        /* === Return Button === */
        .btn {
            display: inline-block;
            margin-bottom: 50px;
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
    </style>
</head>
<body>

    <!-- Floating Lights -->
    <div class="particles">
        <span></span><span></span><span></span><span></span><span></span><span></span>
    </div>

    <h1>Gallery</h1>

    <div class="gallery-container">
        <img src="myGallery/1.jpg" alt="Photo 1">
        <img src="myGallery/2.jpg" alt="Photo 2">
        <img src="myGallery/3.jpg" alt="Photo 3">
        <img src="myGallery/4.jpg" alt="Photo 4">
        <img src="myGallery/5.jpg" alt="Photo 5">
        <img src="myGallery/6.jpg" alt="Photo 6">
        <img src="myGallery/7.jpg" alt="Photo 7">
        <img src="myGallery/8.jpg" alt="Photo 8">
        <img src="myGallery/9.jpg" alt="Photo 9">
        <img src="myGallery/10.jpg" alt="Photo 10">
        <img src="myGallery/11.jpg" alt="Photo 11">
        <img src="myGallery/12.jpg" alt="Photo 12">
        <img src="myGallery/13.jpg" alt="Photo 13">
        <img src="myGallery/14.jpg" alt="Photo 14">
        <img src="myGallery/15.jpg" alt="Photo 15">
    </div>

    <!-- Lightbox (Expanded Image View) -->
    <div class="lightbox" id="lightbox">
        <img src="" alt="Expanded Photo">
    </div>

    <div style="text-align:center;">
        <a href="{{ url('/') }}" class="btn">Home</a>
        <a href="{{ url('/aboutme') }}" class="btn">About Me</a>
        <a href="{{ url('/gallery') }}" class="btn">Gallery</a>
    </div>

    <script>
        const images = document.querySelectorAll('.gallery-container img');
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = lightbox.querySelector('img');

        images.forEach(img => {
            img.addEventListener('click', () => {
                lightboxImg.src = img.src;
                lightbox.classList.add('show');
                history.pushState(null, '', '#expanded'); // enable back button to close
            });
        });

        // Close on click outside or pressing Esc
        lightbox.addEventListener('click', e => {
            if (e.target !== lightboxImg) {
                lightbox.classList.remove('show');
                history.back();
            }
        });

        // Close when pressing Escape key
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') {
                lightbox.classList.remove('show');
                history.back();
            }
        });

        // Handle browser back button
        window.addEventListener('popstate', () => {
            lightbox.classList.remove('show');
        });
    </script>
</body>
</html>
