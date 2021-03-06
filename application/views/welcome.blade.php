@extends('app')

@section('content')
    <h1>{{ $title }}</h1>

    <div id="body">
        
        <p>
            <strong>CodeIgniter default welcome page:</strong>
        </p>
        <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

        <p>If you would like to edit this page you'll find it located at:</p>
        <code>application/views/welcome.blade.php</code>
        <p>and</p>
        <code>application/views/app.blade.php</code>

        <p>The corresponding controller for this page is found at:</p>
        <code>application/controllers/Welcome.php</code>

        <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="http://www.codeigniter.com/user_guide/">User Guide</a>.</p>
    </div>
@endsection