<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card - {{ $name ?? 'Nama' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #eef5ff 0%, #e0ebf8 100%);
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        .bg-blob-1 {
            position: absolute;
            top: -80px;
            left: -80px;
            width: 320px;
            height: 320px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, rgba(238, 245, 255, 0) 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .bg-blob-2 {
            position: absolute;
            bottom: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.12) 0%, rgba(238, 245, 255, 0) 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .bg-blob-3 {
            position: absolute;
            top: 40%;
            left: 5%;
            width: 250px;
            height: 250px;
            background: radial-gradient(circle, rgba(147, 197, 253, 0.25) 0%, rgba(238, 245, 255, 0) 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .card {
            width: 100%;
            max-width: 390px;
            background: #ffffff;
            border-radius: 28px;
            box-shadow: 0 20px 40px -15px rgba(15, 37, 85, 0.12), 0 0 2px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            position: relative;
            z-index: 10;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 25px 50px -12px rgba(15, 37, 85, 0.18), 0 0 2px rgba(0, 0, 0, 0.05);
        }

        .card-header {
            height: 190px;
            background: linear-gradient(135deg, #2f76e6 0%, #1e58c8 60%, #1d4ed8 100%);
            position: relative;
            overflow: hidden;
        }

        .card-header .header-svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .avatar-container {
            position: relative;
            display: flex;
            justify-content: center;
            margin-top: -68px;
            z-index: 5;
        }

        .avatar-wrapper {
            width: 126px;
            height: 126px;
            border-radius: 50%;
            background: #d8deea;
            border: 4px solid #ffffff;
            box-shadow: 0 8px 20px rgba(15, 37, 85, 0.1);
            display: flex;
            justify-content: center;
            align-items: flex-end;
            overflow: hidden;
            position: relative;
        }

        .avatar-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .avatar-svg {
            width: 100%;
            height: 100%;
            fill: #ffffff;
        }

        .card-body {
            padding: 16px 28px 24px 28px;
            text-align: center;
        }

        .name-title {
            font-size: 26px;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.5px;
            margin-bottom: 2px;
        }

        .role-title {
            font-size: 11px;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            margin-bottom: 8px;
        }

        .blue-indicator {
            width: 36px;
            height: 3.5px;
            background-color: #3b82f6;
            border-radius: 4px;
            margin: 0 auto 22px auto;
        }

        .info-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .info-item {
            display: flex;
            align-items: center;
            background: #f8fafc;
            border-radius: 16px;
            padding: 12px 16px;
            gap: 14px;
            text-align: left;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        .info-item:hover {
            background: #f1f5f9;
            transform: translateX(2px);
        }

        .icon-box {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .icon-box.blue {
            background-color: #e0edff;
            color: #2563eb;
        }

        .icon-box.green {
            background-color: #e2f7ed;
            color: #16a34a;
        }

        .icon-box.purple {
            background-color: #ede9fe;
            color: #7c3aed;
        }

        .icon-box svg {
            width: 22px;
            height: 22px;
            stroke-width: 2.2;
        }

        .info-content {
            display: flex;
            flex-direction: column;
        }

        .info-label {
            font-size: 10px;
            font-weight: 700;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2px;
        }

        .info-value {
            font-size: 15px;
            font-weight: 700;
            color: #0f172a;
            word-break: break-word;
        }

        .card-footer {
            margin-top: 24px;
            padding-top: 16px;
            border-top: 1px solid #f1f5f9;
            text-align: center;
        }

        .footer-text {
            font-size: 10px;
            font-weight: 700;
            color: #94a3b8;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <div class="bg-blob-1"></div>
    <div class="bg-blob-2"></div>
    <div class="bg-blob-3"></div>

    <div class="card">
        <div class="card-header">
            <svg class="header-svg" viewBox="0 0 400 200" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-20,60 C120,130 280,20 420,80 L420,-10 L-20,-10 Z" fill="rgba(15, 23, 42, 0.12)"></path>
                <path d="M-10,30 C150,110 260,10 410,50 L410,-10 L-10,-10 Z" fill="rgba(255, 255, 255, 0.12)"></path>
                <path d="M-10,135 C120,185 270,125 410,155 L410,210 L-10,210 Z" fill="#ffffff"></path>
            </svg>
        </div>

        <div class="avatar-container">
            <div class="avatar-wrapper">
                <img class="avatar-img" src="{{ $image ?? 'https://i.pinimg.com/736x/24/41/2d/24412d570fcffabe987fd50be1e28cf2.jpg' }}" alt="Profile Photo">
            </div>
        </div>

        <div class="card-body">
            <h1 class="name-title">{{ $name ?? 'Dimas Kurnia Chandra' }}</h1>
            <p class="role-title">MAHASISWA</p>
            <div class="blue-indicator"></div>

            <div class="info-list">
                <div class="info-item">
                    <div class="icon-box blue">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <div class="info-content">
                        <span class="info-label">NAMA</span>
                        <span class="info-value">{{ $name ?? 'Dimas Kurnia Chandra' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon-box green">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                        </svg>
                    </div>
                    <div class="info-content">
                        <span class="info-label">KELAS</span>
                        <span class="info-value">{{ $kelas ?? 'Kelas' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon-box purple">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm-1 14H5c-.55 0-1-.45-1-1v-5h16v5c0 .55-.45 1-1 1zm1-10H4V6h16v2z"/>
                        </svg>
                    </div>
                    <div class="info-content">
                        <span class="info-label">NPM</span>
                        <span class="info-value">{{ $npm ?? '2417052018' }}</span>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <span class="footer-text">BISMILLAH DAPET NILAI PLUS!</span>
            </div>
        </div>
    </div>

</body>
</html>


