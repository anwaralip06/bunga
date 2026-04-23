<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat Datang</title>
</head>
<body>
  <h1>Selamat Datang! <i> {{ $data['first_name'] }} {{ $data['last_name'] }} </i></h1>  
  <br>
  <label>First name:</label>
<p>{{ $data['first_name'] ?? '-' }}</p>

<label>Last name:</label>
<p>{{ $data['last_name'] ?? '-' }}</p>

<label>Gender:</label>
<p>{{ $data['gender'] ?? '-' }}</p>

<label>Nationality:</label>
<p>{{ $data['nationality'] ?? '-' }}</p>

<label>Language Spoken:</label>
<ul>
    @foreach (($data['language'] ?? []) as $lang)
        <li>{{ $lang }}</li>
    @endforeach
</ul>

<label>Bio:</label>
<p>{{ $data['bio'] ?? '-' }}</p>
</body>
</html>