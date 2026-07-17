<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome – Birthday Faelyn 🎀</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=Dancing+Script:wght@500;700&family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Alex+Brush&family=Cormorant+Garamond:wght@500;600&family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Poppins:ital,wght@0,300;0,400;0,500;1,300&display=swap');
      *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html, body {
            width: 100%;
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('foto/utama.png') no-repeat center center / cover;
            font-family: 'Lato', sans-serif;
            /* Rasio potrait seperti background asli */
        }

        /* ── Scene: mempertahankan rasio 9:16 background ── */
        .scene {
            position: relative;
            width: min(100vw, calc(100vh * 9/16));
            height: min(100vh, calc(100vw * 16/9));
            max-width: 480px;
            max-height: 100vh;
        }

        /* ── Konten tepat di dalam oval ──
           Berdasarkan gambar 1.png:
           - oval mulai ~13% dari atas, berakhir ~87%
           - horizontal: ~10% – 90%
           - center ≈ top 48%, left 50%
           - tinggi oval ≈ 74% scene, lebar ≈ 80%
        */
        .oval-content {
            position: absolute;
            left: 50%;
            top: 47%;
            transform: translate(-50%, -50%);
            width: 68%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 0;
        }

        /* ── Label kecil ── */
        .label-small {
            font-family: 'Playfair Display', serif;
            font-weight: 30;
            font-style: normal;
            font-size: clamp(20px, 10vw, 20px);
            color: #c2185b;
            line-height: 1.1;
            filter: drop-shadow(0 2px 5px rgba(194,24,91,0.18));
            animation: slideUp 0.9s 0.3s cubic-bezier(.22,1,.36,1) both;
            margin-bottom: 3px;
        }

        /* ── Angka 1st ── */
        .number {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: clamp(72px, 20vw, 110px);
            line-height: 0.95;
            background: linear-gradient(150deg, #e91e8c 10%, #f48fb1 50%, #D4AF37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            filter: drop-shadow(0 3px 8px rgba(233,30,140,0.22));
            animation: popIn 0.9s 0.1s cubic-bezier(.22,1,.36,1) both;
        }

        /* ── Bintang kecil di kiri kanan angka ── */
        .number-wrap {
            position: relative;
            display: inline-block;
        }
        .num-star {
            position: absolute;
            font-size: clamp(10px, 2.5vw, 16px);
            animation: floatStar 2.8s ease-in-out infinite;
            color: #D4AF37;
        }
        .num-star.left  { top: 10%; left: -22px; animation-delay: 0s; }
        .num-star.right { top: 5%;  right: -18px; animation-delay: 0.9s; }

        @keyframes floatStar {
            0%,100% { transform: translateY(0) rotate(-10deg); opacity:0.7; }
            50%      { transform: translateY(-6px) rotate(10deg); opacity:1; }
        }

        @keyframes popIn {
            from { opacity:0; transform:scale(0.7); }
            to   { opacity:1; transform:scale(1); }
        }

        /* ── Ornamen garis ── */
        .divider {
            display: flex;
            align-items: center;
            gap: 6px;
            margin: 6px 0 8px;
            width: 100%;
            justify-content: center;
        }
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            max-width: 44px;
            height: 1.5px;
            border-radius: 2px;
            background: linear-gradient(90deg, transparent, #f48fb1cc);
        }
        .divider::after {
            background: linear-gradient(90deg, #f48fb1cc, transparent);
        }
        .divider-icon {
            font-size: clamp(11px, 2.5vw, 15px);
            color: #e91e8c;
            animation: spin 6s linear infinite;
        }
        /* ── Kupu-kupu melayang ── */
        .butterfly {
            position: absolute;
            pointer-events: none;
            width: clamp(18px, 4.5vw, 28px);
            height: clamp(18px, 4.5vw, 28px);
            opacity: 0.85;
            animation: flutterFloat var(--fd, 6s) ease-in-out infinite var(--fdl, 0s);
            z-index: 5;
        }
        .butterfly svg { width: 100%; height: 100%; display:block; }
        .butterfly .wing {
            transform-origin: center;
            animation: wingFlap 0.45s ease-in-out infinite alternate;
        }
        .butterfly .wing-left { animation-delay: 0s; }
        .butterfly .wing-right { animation-delay: 0.05s; }

        @keyframes wingFlap {
            from { transform: scaleX(1); }
            to   { transform: scaleX(0.55); }
        }

        @keyframes flutterFloat {
            0%   { transform: translate(0, 0) rotate(0deg); }
            25%  { transform: translate(8px, -14px) rotate(6deg); }
            50%  { transform: translate(-4px, -26px) rotate(-4deg); }
            75%  { transform: translate(-10px, -12px) rotate(5deg); }
            100% { transform: translate(0, 0) rotate(0deg); }
        }

        @media (prefers-reduced-motion: reduce) {
            .butterfly, .butterfly .wing { animation: none; }
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to   { transform: rotate(360deg); }
        }

        /* ── Nama ── */
        .name {
            font-family: 'Playfair Display', serif;
            font-weight: 30;
            font-style: normal;
            font-size: clamp(20px, 10vw, 20px);
            color: #c2185b;
            line-height: 1.1;
            filter: drop-shadow(0 2px 5px rgba(194,24,91,0.18));
            animation: slideUp 0.9s 0.3s cubic-bezier(.22,1,.36,1) both;
        }

        @keyframes slideUp {
            from { opacity:0; transform:translateY(14px); }
            to   { opacity:1; transform:translateY(0); }
        }

        /* ── Subtitle ── */
        .subtitle {
            margin-top: 6px;
            font-family: 'Nunito', sans-serif;
            font-weight: 300;
            font-size: clamp(9px, 2.2vw, 12px);
            letter-spacing: 2.5px;
            color: #c06090;
            opacity: 0.75;
            animation: slideUp 0.9s 0.45s cubic-bezier(.22,1,.36,1) both;
        }

        /* ── Tombol ── */
        .button-wrap {
            margin-top: clamp(14px, 4vw, 22px);
            animation: slideUp 0.9s 0.55s cubic-bezier(.22,1,.36,1) both;
        }

        .button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: clamp(10px,2.5vw,14px) clamp(20px,5vw,32px);
            background: linear-gradient(135deg, #e91e8c 0%, #f06292 60%);
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            font-size: clamp(11px, 2.8vw, 14px);
            letter-spacing: 1.5px;
            box-shadow:
                0 5px 22px rgba(233,30,140,0.38),
                0 1px 6px rgba(212,175,55,0.2),
                inset 0 1px 0 rgba(255,255,255,0.25);
            transition: transform 0.2s, box-shadow 0.2s, filter 0.2s;
            position: relative;
            overflow: hidden;
        }

        .button::after {
            content: '';
            position: absolute;
            top: 0; left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transform: skewX(-20deg);
            animation: shimmer 3s 1.5s ease-in-out infinite;
        }
        @keyframes shimmer {
            0%   { left: -75%; }
            60%, 100% { left: 140%; }
        }

        .button:hover {
            transform: translateY(-3px);
            box-shadow: 0 9px 30px rgba(233,30,140,0.45);
            filter: brightness(1.07);
        }
        .button:active { transform: translateY(0); }

        /* ── Note bawah ── */
        .footer-note {
            margin-top: 8px;
            font-size: clamp(9px, 2vw, 11px);
            color: #e91e8c;
            opacity: 0.5;
            letter-spacing: 1px;
            font-family: 'Nunito', sans-serif;
            animation: pulse 2.5s ease-in-out infinite;
        }
        @keyframes pulse {
            0%,100% { opacity: 0.4; }
            50%      { opacity: 0.75; }
        }

        /* ── Sparkle melayang di oval ── */
        .sparkle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            opacity: 0;
            animation: twinkle var(--d, 3s) ease-in-out infinite var(--dl, 0s);
        }
        @keyframes twinkle {
            0%,100% { opacity:0; transform: scale(0.5) translateY(0); }
            50%      { opacity:0.8; transform: scale(1.3) translateY(-5px); }
        }

        @media (prefers-reduced-motion: reduce) {
            .number, .name, .subtitle, .button-wrap, .sparkle,
            .num-star, .divider-icon, .button::after, .footer-note
            { animation: none; opacity: 1; }
        }
    </style>
</head>
<body>
<div class="scene" id="scene">

    <div class="oval-content">

        <p class="label-small">Happy Birthday</p>

        <div class="number-wrap">
            <span class="num-star left">✦</span>
            <div class="number">1<sup style="font-size:0.38em;vertical-align:super;line-height:0">st</sup></div>
            <span class="num-star right">✦</span>
        </div>

        <div class="divider">
            <span class="divider-icon">✿</span>
        </div>

        <h1 class="name">Fidela Faelynn Fedriek</h1>
        <p class="subtitle">Undangan Perayaan Ulang Tahun</p>

        <div class="button-wrap">
            <a href="index.php" class="button">
                <!-- Amplop icon -->
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 4H4C2.9 4 2 4.9 2 6v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
                Buka Undangan
            </a>
        </div>
    </div>

    <!-- Kupu-kupu melayang -->
    <div class="butterfly" style="top:10%; left:8%; --fd:5.5s; --fdl:0s;">
        <svg viewBox="0 0 32 32">
            <g class="wing wing-left">
                <path d="M16 16 C8 4, 0 6, 2 14 C3 20, 10 20, 16 16 Z" fill="#f06292"/>
            </g>
            <g class="wing wing-right">
                <path d="M16 16 C24 4, 32 6, 30 14 C29 20, 22 20, 16 16 Z" fill="#f48fb1"/>
            </g>
            <g class="wing wing-left">
                <path d="M16 16 C10 22, 4 24, 6 28 C9 31, 14 26, 16 16 Z" fill="#e91e8c" opacity="0.85"/>
            </g>
            <g class="wing wing-right">
                <path d="M16 16 C22 22, 28 24, 26 28 C23 31, 18 26, 16 16 Z" fill="#f06292" opacity="0.85"/>
            </g>
            <line x1="16" y1="10" x2="16" y2="24" stroke="#c2185b" stroke-width="1.5"/>
        </svg>
    </div>

    <div class="butterfly" style="top:20%; right:10%; --fd:6.8s; --fdl:1.2s;">
        <svg viewBox="0 0 32 32">
            <g class="wing wing-left"><path d="M16 16 C8 4, 0 6, 2 14 C3 20, 10 20, 16 16 Z" fill="#D4AF37"/></g>
            <g class="wing wing-right"><path d="M16 16 C24 4, 32 6, 30 14 C29 20, 22 20, 16 16 Z" fill="#f48fb1"/></g>
            <g class="wing wing-left"><path d="M16 16 C10 22, 4 24, 6 28 C9 31, 14 26, 16 16 Z" fill="#e91e8c" opacity="0.85"/></g>
            <g class="wing wing-right"><path d="M16 16 C22 22, 28 24, 26 28 C23 31, 18 26, 16 16 Z" fill="#f06292" opacity="0.85"/></g>
            <line x1="16" y1="10" x2="16" y2="24" stroke="#c2185b" stroke-width="1.5"/>
        </svg>
    </div>

    <div class="butterfly" style="bottom:14%; left:12%; --fd:7.2s; --fdl:0.6s;">
        <svg viewBox="0 0 32 32">
            <g class="wing wing-left"><path d="M16 16 C8 4, 0 6, 2 14 C3 20, 10 20, 16 16 Z" fill="#f48fb1"/></g>
            <g class="wing wing-right"><path d="M16 16 C24 4, 32 6, 30 14 C29 20, 22 20, 16 16 Z" fill="#e91e8c"/></g>
            <g class="wing wing-left"><path d="M16 16 C10 22, 4 24, 6 28 C9 31, 14 26, 16 16 Z" fill="#f06292" opacity="0.85"/></g>
            <g class="wing wing-right"><path d="M16 16 C22 22, 28 24, 26 28 C23 31, 18 26, 16 16 Z" fill="#D4AF37" opacity="0.85"/></g>
            <line x1="16" y1="10" x2="16" y2="24" stroke="#c2185b" stroke-width="1.5"/>
        </svg>
    </div>

    <div class="butterfly" style="bottom:8%; right:14%; --fd:5.9s; --fdl:1.8s;">
        <svg viewBox="0 0 32 32">
            <g class="wing wing-left"><path d="M16 16 C8 4, 0 6, 2 14 C3 20, 10 20, 16 16 Z" fill="#e91e8c"/></g>
            <g class="wing wing-right"><path d="M16 16 C24 4, 32 6, 30 14 C29 20, 22 20, 16 16 Z" fill="#f06292"/></g>
            <g class="wing wing-left"><path d="M16 16 C10 22, 4 24, 6 28 C9 31, 14 26, 16 16 Z" fill="#f48fb1" opacity="0.85"/></g>
            <g class="wing wing-right"><path d="M16 16 C22 22, 28 24, 26 28 C23 31, 18 26, 16 16 Z" fill="#e91e8c" opacity="0.85"/></g>
            <line x1="16" y1="10" x2="16" y2="24" stroke="#c2185b" stroke-width="1.5"/>
        </svg>
    </div>

</div>

<script>
    // Sparkle di dalam oval
    const scene = document.getElementById('scene');
    const pos = [
        {t:'15%',l:'18%',s:5,c:'#f48fb1'},
        {t:'18%',l:'75%',s:4,c:'#D4AF37'},
        {t:'28%',l:'12%',s:6,c:'#fff'},
        {t:'25%',l:'82%',s:5,c:'#f48fb1'},
        {t:'70%',l:'14%',s:4,c:'#D4AF37'},
        {t:'72%',l:'80%',s:5,c:'#fff'},
        {t:'82%',l:'30%',s:4,c:'#f48fb1'},
        {t:'80%',l:'65%',s:6,c:'#D4AF37'},
    ];
    pos.forEach((p,i) => {
        const el = document.createElement('div');
        el.className = 'sparkle';
        el.style.cssText = `top:${p.t};left:${p.l};width:${p.s}px;height:${p.s}px;background:${p.c};--d:${2.2+Math.random()*2.5}s;--dl:${i*0.38}s`;
        scene.appendChild(el);
    });
</script>
</body>
</html>