@extends('layout.master')
@section('title','Home')
@section('content')
<h1>Shop @Garden</h1>
<h3>Hijau bernafas, hidup berdenyut 🌱</h3>

<b>Daun berdesir, akar diam mencengkeram, langit disapa 🌿</b>

<h4>Benefit Join di Shop @ Garden</h4>

<ul>
<li>Akses Inspirasi & Edukasi Rutin</li>
<li>Kesempatan Dapat Promo & Penawaran Eksklusif</li>
<li>Networking & Support System</li>
</ul>

<h4>Cara Bergabung ke Shop @ Garden</h4>

<ol type="1">
<li>Mengunjungi laman ini</li>
<li>Mendaftar di <a href="{{ route('register') }}">Sign Up</a></li>
<li>Selesai!</li>
</ol>
@endsection