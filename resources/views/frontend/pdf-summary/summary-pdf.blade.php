<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversation Download</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 20px;
        }

        .message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .user {
            background-color: #fff2f2;
            text-align: right;
        }

        .bot {
            background-color: #fcfcfc;
            text-align: left;
        }

        .timestamp {
            font-size: 0.8em;
            color: #888;
            display: block;
            margin-top: 5px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="summary-title">
        <h2><strong>Summary of {{ $title }}</strong></h2>
    </div>


    @foreach ($messages as $message)
        <div class="message {{ $message['sender'] === 'user' ? 'user' : 'bot' }}">
            <p>{!! $message['text'] !!}</p>
            <span class="timestamp">{{ $message['sender'] }} - {{ date('M d, Y h:i A', $message['timestamp']/ 1000) }}</span>
        </div>
    @endforeach

</body>

</html>
