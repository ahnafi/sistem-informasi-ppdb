<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi Pesan Diterima</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #3B82F6; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 8px 8px; }
        .highlight { background: #E0F2FE; padding: 15px; border-left: 4px solid #3B82F6; margin: 20px 0; }
        .footer { margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>SMA Hogwarts</h1>
            <p>Terima kasih telah menghubungi kami</p>
        </div>
        
        <div class="content">
            <p>Halo {{ $contact->first_name }},</p>
            
            <p>Terima kasih telah menghubungi SMA Hogwarts. Pesan Anda telah kami terima dan akan segera kami proses.</p>
            
            <div class="highlight">
                <strong>Ringkasan pesan Anda:</strong><br>
                <strong>Nama:</strong> {{ $contact->full_name }}<br>
                <strong>Email:</strong> {{ $contact->email }}<br>
                @if($contact->phone)
                <strong>Telepon:</strong> {{ $contact->phone }}<br>
                @endif
                <strong>Waktu:</strong> {{ $contact->created_at->format('d F Y, H:i') }} WIB
            </div>
            
            <p>Tim kami akan merespons pesan Anda dalam waktu 1-2 hari kerja. Jika Anda memerlukan bantuan segera, silakan hubungi kami melalui:</p>
            
            <ul>
                <li><strong>Telepon:</strong> +44 123 4567 890</li>
                <li><strong>Email:</strong> info@hogwarts.ac.uk</li>
                <li><strong>Jam Operasional:</strong> Senin - Jumat: 07.00 - 15.00 WIB</li>
            </ul>
            
            <p>Salam hangat,<br>
            <strong>Tim SMA Hogwarts</strong></p>
        </div>
        
        <div class="footer">
            <p>Email ini dikirim otomatis. Mohon jangan membalas email ini.</p>
        </div>
    </div>
</body>
</html>
