@component('mail::message')

<h1>Form Kontak eLstack</h1>


<strong>Nama Pengirim  : </strong> {{  $data['name']  }} <br>
<strong>Email Pengirim : </strong> {{  $data['email']  }} <br>

<strong>Pesan</strong>

{{ $data['message'] }}

@endcomponent
