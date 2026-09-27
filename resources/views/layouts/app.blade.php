<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PWL Unila' }} - Dimas Kurnia Chandra</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS (Tanpa SRI hash agar tidak di-block oleh browser) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom Modern Styling -->
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            --accent-gradient: linear-gradient(135deg, #3b82f6 0%, #06b6d4 100%);
            --dark-nav: #0f172a;
            --card-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.08), 0 4px 12px -2px rgba(15, 23, 42, 0.04);
            --card-shadow-hover: 0 20px 40px -10px rgba(15, 23, 42, 0.12), 0 8px 16px -4px rgba(15, 23, 42, 0.06);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #f0f6ff 0%, #e8f0fe 50%, #e2eafc 100%);
            color: #1e293b;
            position: relative;
            overflow-x: hidden;
        }

        /* Ambient Background Blobs */
        .ambient-blob-1 {
            position: fixed;
            top: -120px;
            left: -120px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.18) 0%, rgba(240, 246, 255, 0) 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
        }

        .ambient-blob-2 {
            position: fixed;
            bottom: -150px;
            right: -150px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, rgba(240, 246, 255, 0) 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
        }

        /* Main Container Relative Positioning */
        main {
            position: relative;
            z-index: 1;
            flex: 1;
        }

        /* Custom Card Styles */
        .card-glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .card-glass:hover {
            box-shadow: var(--card-shadow-hover);
        }

        /* Modern Gradient Buttons */
        .btn-modern-primary {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            color: #ffffff !important;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            padding: 10px 22px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.25s ease;
            box-shadow: 0 4px 14px rgba(37, 99, 235, 0.35);
            text-decoration: none;
            cursor: pointer;
        }

        .btn-modern-primary:hover {
            background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.45);
            color: #ffffff !important;
        }

        .btn-modern-secondary {
            background: #f1f5f9;
            color: #475569 !important;
            font-weight: 600;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 10px 20px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .btn-modern-secondary:hover {
            background: #e2e8f0;
            color: #1e293b !important;
            transform: translateY(-1px);
        }

        /* Modern Inputs */
        .modern-input-group {
            position: relative;
            display: flex;
            align-items: stretch;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            transition: all 0.2s ease;
        }

        .modern-input-group .input-icon {
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-right: none;
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
            padding: 12px 16px;
            color: #64748b;
            display: flex;
            align-items: center;
            font-size: 1.1rem;
        }

        .modern-input {
            width: 100%;
            border: 1.5px solid #e2e8f0;
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
            padding: 12px 16px;
            font-size: 0.95rem;
            color: #0f172a;
            background: #ffffff;
            transition: all 0.2s ease;
            outline: none;
        }

        .modern-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
        }

        .modern-select {
            width: 100%;
            border: 1.5px solid #e2e8f0;
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
            padding: 12px 16px;
            font-size: 0.95rem;
            color: #0f172a;
            background-color: #ffffff;
            transition: all 0.2s ease;
            outline: none;
            cursor: pointer;
        }

        .modern-select:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
        }

        /* Form Labels */
        .modern-label {
            font-size: 0.82rem;
            font-weight: 700;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.75px;
            margin-bottom: 8px;
            display: block;
        }

        /* Table Styling */
        .modern-table-container {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .modern-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-bottom: 0;
        }

        .modern-table thead th {
            background: #f8fafc;
            color: #64748b;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            padding: 16px 20px;
            border-bottom: 1.5px solid #e2e8f0;
        }

        .modern-table tbody tr {
            transition: background 0.15s ease;
        }

        .modern-table tbody tr:hover {
            background-color: #f8fafc;
        }

        .modern-table tbody td {
            padding: 16px 20px;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
            color: #334155;
            font-size: 0.92rem;
        }

        .modern-table tbody tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="ambient-blob-1"></div>
    <div class="ambient-blob-2"></div>

    <!-- Komponen Navbar -->
    <x-navbar />

    <!-- Konten Utama -->
    <main class="py-4 py-md-5">
        @yield('content')
    </main>

    <!-- Komponen Footer -->
    <x-footer />

    <!-- Bootstrap 5 Bundle JS (Tanpa SRI hash) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
