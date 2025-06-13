<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesan Kontak Baru</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #3B82F6; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 8px 8px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #555; }
        .value { margin-top: 5px; padding: 10px; background: white; border-left: 4px solid #3B82F6; }
        .footer { margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Pesan Kontak Baru</h1>
            <p>Website SMA Hogwarts</p>
        </div>
        
        <div class="content">
            <p>Anda menerima pesan baru dari website SMA Hogwarts:</p>
            
            <div class="field">
                <div class="label">Nama:</div>
                <div class="value">{{ $contact->full_name }}</div>
            </div>
            
            <div class="field">
                <div class="label">Email:</div>
                <div class="value">{{ $contact->email }}</div>
            </div>
            
            @if($contact->phone)
            <div class="field">
                <div class="label">Telepon:</div>
                <div class="value">{{ $contact->phone }}</div>
            </div>
            @endif
            
            <div class="field">
                <div class="label">Pesan:</div>
                <div class="value">{{ $contact->message }}</div>
            </div>
            
            <div class="field">
                <div class="label">Waktu:</div>
                <div class="value">{{ $contact->created_at->format('d F Y, H:i') }} WIB</div>
            </div>
        </div>
        
        <div class="footer">
            <p>Email ini dikirim otomatis dari sistem website SMA Hogwarts.</p>
        </div>
    </div>
</body>
</html>
