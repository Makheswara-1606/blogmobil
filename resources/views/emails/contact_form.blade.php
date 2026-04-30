<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pesan Baru dari OTOBLOG</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #BA181B;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 0 0 8px 8px;
        }
        .info-box {
            background-color: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border-left: 4px solid #BA181B;
        }
        .label {
            font-weight: bold;
            color: #BA181B;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>OTOBLOG - Pesan Baru</h1>
        <p>Anda menerima pesan baru dari form kontak website</p>
    </div>
    
    <div class="content">
        <div class="info-box">
            <p><span class="label">Nama Pengirim:</span> {{ $nama }}</p>
            <p><span class="label">Email:</span> {{ $email }}</p>
            <p><span class="label">Waktu:</span> {{ now()->format('d F Y H:i') }}</p>
        </div>
        
        <div class="info-box">
            <p><span class="label">Isi Pesan:</span></p>
            <p style="white-space: pre-wrap;">{{ $pesan }}</p>
        </div>
        
        <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd;">
            <p><small>Email ini dikirim otomatis dari sistem OTOBLOG. Jangan balas email ini.</small></p>
        </div>
    </div>
</body>
</html>