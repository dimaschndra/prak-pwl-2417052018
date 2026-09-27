<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PWL Unila' }} - Dimas Kurnia Chandra</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
        :root {
            --bg-body: #f4efe6;
            --bg-card: #ffffff;
            --bg-card-subtle: #fbf9f5;
            --bg-pill: #eae4da;
            --accent-coral: #ff7353;
            --accent-coral-hover: #fa5e3a;
            --accent-coral-soft: #fff0eb;
            --text-main: #18181b;
            --text-muted: #71717a;
            --border-card: #eae5dc;
            --radius-card: 28px;
            --radius-pill: 9999px;
            --shadow-bento: 0 12px 32px -8px rgba(30, 25, 20, 0.05), 0 4px 12px -2px rgba(30, 25, 20, 0.03);
            --shadow-coral: 0 10px 24px -6px rgba(255, 115, 83, 0.4);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: var(--bg-body);
            color: var(--text-main);
            padding: 16px 20px 24px 20px;
            -webkit-font-smoothing: antialiased;
        }

        /* Bento Wrapper */
        .bento-shell {
            max-width: 1240px;
            width: 100%;
            margin: 0 auto;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Bento Card Styles */
        .bento-card {
            background: var(--bg-card);
            border-radius: var(--radius-card);
            border: 1px solid var(--border-card);
            box-shadow: var(--shadow-bento);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .bento-card:hover {
            box-shadow: 0 16px 36px -8px rgba(30, 25, 20, 0.08);
        }

        /* Pill Navigation / Buttons */
        .pill-tab {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: var(--radius-pill);
            background: #ffffff;
            color: var(--text-main);
            font-weight: 600;
            font-size: 0.88rem;
            text-decoration: none;
            transition: all 0.2s ease;
            border: 1px solid var(--border-card);
        }

        .pill-tab:hover {
            background: #fbf9f5;
            color: var(--text-main);
            transform: translateY(-1px);
        }

        .pill-tab.active {
            background: var(--accent-coral) !important;
            color: #ffffff !important;
            border-color: var(--accent-coral) !important;
            box-shadow: var(--shadow-coral);
        }

        /* Coral Pill Button */
        .btn-coral {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: var(--accent-coral);
            color: #ffffff !important;
            font-weight: 700;
            font-size: 0.92rem;
            padding: 12px 24px;
            border-radius: var(--radius-pill);
            border: none;
            text-decoration: none;
            cursor: pointer;
            box-shadow: var(--shadow-coral);
            transition: all 0.2s ease;
        }

        .btn-coral:hover {
            background: var(--accent-coral-hover);
            transform: translateY(-2px);
            box-shadow: 0 14px 28px -6px rgba(255, 115, 83, 0.5);
            color: #ffffff !important;
        }

        /* Secondary Pill Button */
        .btn-pill-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: #ffffff;
            color: var(--text-main) !important;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 12px 22px;
            border-radius: var(--radius-pill);
            border: 1px solid var(--border-card);
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-pill-secondary:hover {
            background: #fbf9f5;
            color: var(--text-main) !important;
            transform: translateY(-1px);
        }

        /* Circular Action Buttons */
        .btn-circle {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            border: 1px solid var(--border-card);
            color: var(--text-main);
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-circle:hover {
            background: #fbf9f5;
            color: var(--accent-coral);
            transform: scale(1.05);
        }

        /* Inputs */
        .bento-input-pill {
            background: #ffffff;
            border: 1px solid var(--border-card);
            border-radius: var(--radius-pill);
            padding: 11px 20px;
            font-size: 0.9rem;
            color: var(--text-main);
            outline: none;
            transition: all 0.2s ease;
        }

        .bento-input-pill:focus {
            border-color: var(--accent-coral);
            box-shadow: 0 0 0 4px rgba(255, 115, 83, 0.15);
            background: #ffffff;
        }
    </style>
</head>
<body>
    <div class="bento-shell">
        
        <x-navbar />

<main class="my-4 flex-grow-1">
            @yield('content')
        </main>

<x-footer />
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
