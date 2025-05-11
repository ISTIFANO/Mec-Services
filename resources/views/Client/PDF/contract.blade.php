<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        /* Modern Typography */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        
        /* Container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Header */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 20px;
            border-bottom: 1px solid #eaeaea;
            margin-bottom: 30px;
        }
        
        .logo {
            height: 60px;
            width: auto;
        }
        
        .title {
            color: #2c3e50;
            margin: 0;
            font-weight: 600;
        }
        
        /* Content */
        .content {
            margin-bottom: 30px;
        }
        
        .section {
            margin-bottom: 25px;
        }
        
        .section-title {
            color: #3498db;
            font-size: 1.2rem;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .info-row {
            display: flex;
            margin-bottom: 10px;
            border-bottom: 1px dashed #eaeaea;
            padding-bottom: 10px;
        }
        
        .info-label {
            width: 140px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .info-value {
            flex: 1;
        }
        
        /* Vehicle Section */
        .vehicle-section {
            display: flex;
            gap: 20px;
            margin: 30px 0;
            align-items: center;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }
        
        .vehicle-image {
            width: 250px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .vehicle-details {
            flex: 1;
        }
        
        /* Service Description */
        .description {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            border-left: 4px solid #3498db;
        }
        
        /* Rules Section */
        .rules {
            background-color: #fff8ee;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            border-left: 4px solid #e67e22;
        }
        
        /* Signatures */
        .signatures {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid #eaeaea;
        }
        
        .signature-box {
            width: 45%;
        }
        
        .signature-line {
            border-bottom: 1px solid #333;
            margin-top: 50px;
            margin-bottom: 10px;
        }
        
        .stamp {
            text-align: center;
            margin-top: 30px;
        }
        
        .stamp img {
            width: 120px;
            height: auto;
        }
        
        /* Footer */
        footer {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #eaeaea;
            color: #7f8c8d;
            font-size: 0.9rem;
            text-align: center;
        }
        
        /* Print Styling */
        @media print {
            body {
                background-color: white;
            }
            .container {
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ $logo }}" alt="RaviyaTechnical Logo" class="logo">
            <h1 class="title">{{ $title }}</h1>
        </div>
        
        <div class="content">
            <div class="section">
                <h2 class="section-title">CONTRACT DETAILS</h2>
                <div class="info-row">
                    <div class="info-label">Mechanic:</div>
                    <div class="info-value">{{ $mechanicien }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Client:</div>
                    <div class="info-value">{{ $client }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Service:</div>
                    <div class="info-value">{{ $service_titre }}</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Date:</div>
                    <div class="info-value">{{ date('F j, Y') }}</div>
                </div>
            </div>
            
            <div class="vehicle-section">
                <img src="{{ $vehucule_image }}" alt="Vehicle" class="vehicle-image">
                <div class="vehicle-details">
                    <h3>Vehicle Information</h3>
                    <p>The images and information provided above represent the vehicle subject to this service agreement.</p>
                </div>
            </div>
            
            <div class="description">
                <h3>Service Description</h3>
                <p>{{ $description }}</p>
            </div>
            
            <div class="rules">
                <h3>Terms & Conditions</h3>
                <p>{{ $rule }}</p>
            </div>
        </div>
        
        <div class="signatures">
            <div class="signature-box">
                <h4>Mechanic Signature</h4>
                <div class="signature-line"></div>
                <p>{{ $mechanicien }}</p>
                <div class="stamp">
                    <img src="{{ $tampon }}" alt="Official Stamp">
                </div>
            </div>
            
            <div class="signature-box">
                <h4>Client Signature</h4>
                <div class="signature-line"></div>
                <p>{{ $client }}</p>
                <p>Date: _______________</p>
            </div>
        </div>
        
        <footer>
            {!! $footer !!}
            <p>This contract is legally binding once signed by both parties.</p>
        </footer>
    </div>
</body>
</html>