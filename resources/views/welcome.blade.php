<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lexon Dynamic is coming soon.">

    <title>Lexon Dynamic | Coming Soon</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <style>
        :root {
            --ink: #0f172a;
            --muted: #64748b;
            --line: rgba(15, 23, 42, 0.12);
            --panel: rgba(255, 255, 255, 0.78);
            --gold: #d9a441;
            --gold-soft: rgba(217, 164, 65, 0.18);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            color: var(--ink);
            font-family: "Instrument Sans", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background:
                radial-gradient(circle at 18% 20%, rgba(217, 164, 65, 0.18), transparent 30%),
                radial-gradient(circle at 86% 72%, rgba(15, 23, 42, 0.10), transparent 32%),
                linear-gradient(135deg, #f8fafc 0%, #eef2f7 50%, #ffffff 100%);
        }

        main {
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 32px 18px;
        }

        .shell {
            width: min(760px, 100%);
            text-align: center;
            padding: clamp(30px, 7vw, 72px);
            border: 1px solid var(--line);
            border-radius: 28px;
            background: var(--panel);
            box-shadow: 0 28px 80px rgba(15, 23, 42, 0.12);
            backdrop-filter: blur(18px);
        }

        .logo-wrap {
            width: clamp(132px, 22vw, 190px);
            height: clamp(132px, 22vw, 190px);
            display: grid;
            place-items: center;
            margin: 0 auto 28px;
            padding: 18px;
            border-radius: 32px;
            background: #ffffff;
            box-shadow: 0 18px 46px rgba(15, 23, 42, 0.12);
        }

        img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 20px;
            padding: 8px 14px;
            border: 1px solid rgba(217, 164, 65, 0.36);
            border-radius: 999px;
            color: #8a651d;
            background: var(--gold-soft);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 999px;
            background: var(--gold);
        }

        h1 {
            max-width: 680px;
            margin: 0 auto;
            font-size: clamp(42px, 8vw, 76px);
            line-height: 0.95;
            letter-spacing: 0;
        }

        p {
            max-width: 560px;
            margin: 24px auto 0;
            color: var(--muted);
            font-size: clamp(16px, 2.4vw, 19px);
            line-height: 1.7;
        }

        .footer {
            margin-top: 40px;
            padding-top: 24px;
            border-top: 1px solid var(--line);
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            color: #475569;
            font-size: 14px;
            font-weight: 600;
        }

        .dot {
            color: var(--gold);
        }
    </style>
</head>
<body>
    <main>
        <section class="shell" aria-labelledby="coming-soon-title">
            <div class="logo-wrap">
                <img src="{{ asset('images/logo/logo.jpeg') }}" alt="Lexon Dynamic logo">
            </div>

            <div class="eyebrow">Coming Soon</div>

            <h1 id="coming-soon-title">Lexon Dynamic</h1>

            <p>
                We are putting the finishing touches on a new digital experience.
                Check back soon.
            </p>

            <div class="footer">
                <span>Lexon Dynamic</span>
                <span class="dot">•</span>
                <span>Launching Soon</span>
            </div>
        </section>
    </main>
</body>
</html>
