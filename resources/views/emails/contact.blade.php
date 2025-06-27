<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Inter', 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #334155;
            background-color: #f8fafc;
            margin: 0;
            padding: 20px;
        }
        
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .header {
            background: linear-gradient(135deg, #ea580c 0%, #f59e0b 50%, #d97706 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 28px;
            font-weight: 700;
            margin: 0 0 8px 0;
        }
        
        .header p {
            font-size: 16px;
            opacity: 0.9;
            margin: 0;
        }
        
        .content {
            padding: 40px 30px;
        }
        
        .intro {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .intro h2 {
            font-size: 22px;
            font-weight: 600;
            color: #1e293b;
            margin: 0 0 12px 0;
        }
        
        .details-container {
            background: #f8fafc;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid #e2e8f0;
        }
        
        .detail-row {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .detail-label {
            font-weight: 600;
            color: #ea580c;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 8px;
        }
        
        .detail-value {
            color: #1e293b;
            font-size: 15px;
            font-weight: 500;
        }
        
        .message-content {
            background: #ffffff;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            white-space: pre-wrap;
            word-wrap: break-word;
            font-size: 15px;
            line-height: 1.7;
            color: #374151;
        }
        
        .subject-badge {
            display: inline-block;
            background: linear-gradient(135deg, #ea580c, #f59e0b);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .quick-actions {
            text-align: center;
            margin-top: 30px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            margin: 0 8px;
            background: linear-gradient(135deg, #ea580c, #f59e0b);
            color: white;
        }
        
        .footer {
            background: #f8fafc;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
            font-size: 14px;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h1>New Contact Submission</h1>
            <p>Pharmacist Evolve Website</p>
        </div>
        
        <!-- Content -->
        <div class="content">
            <div class="intro">
                <h2>New Message Received</h2>
            </div>
            
            <!-- Form Details -->
            <div class="details-container">
                <div class="detail-row">
                    <div class="detail-label">Name</div>
                    <div class="detail-value">{{ isset($first_name) ? $first_name : 'N/A' }} {{ isset($last_name) ? $last_name : '' }}</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Email</div>
                    <div class="detail-value">{{ isset($email) ? $email : 'N/A' }}</div>
                </div>
                
                @if(isset($phone) && !empty($phone))
                <div class="detail-row">
                    <div class="detail-label">Phone</div>
                    <div class="detail-value">{{ $phone }}</div>
                </div>
                @endif
                
                <div class="detail-row">
                    <div class="detail-label">Subject</div>
                    <div class="detail-value">
                        <span class="subject-badge">
                            @if(isset($subject))
                                @switch($subject)
                                    @case('consultation')
                                        Free Consultation
                                        @break
                                    @case('group-mentoring')
                                        Group Mentoring School
                                        @break
                                    @case('professional-development')
                                        Professional Development Coaching
                                        @break
                                    @case('workforce-integration')
                                        Workforce Integration & Excellence
                                        @break
                                    @case('general')
                                        General Inquiry
                                        @break
                                    @default
                                        {{ $subject }}
                                @endswitch
                            @else
                                No Subject
                            @endif
                        </span>
                    </div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Message</div>
                    <div class="detail-value">
                        <div class="message-content">{{ isset($message) ? $message : 'No message provided' }}</div>
                    </div>
                </div>
                
                @if(isset($submitted_at))
                <div class="detail-row">
                    <div class="detail-label">Submitted At</div>
                    <div class="detail-value">{{ $submitted_at }}</div>
                </div>
                @endif
            </div>
            
            <!-- Quick Actions -->
            <div class="quick-actions">
                @if(isset($email))
                <a href="mailto:{{ $email }}?subject=Re: Contact Form Inquiry" class="btn">
                    Reply to {{ isset($first_name) ? $first_name : 'Sender' }}
                </a>
                @endif
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p><strong>This message was sent from the Pharmacist Evolve contact form.</strong></p>
            <p>You can reply directly to this email to respond to the sender.</p>
        </div>
    </div>
</body>
</html>
