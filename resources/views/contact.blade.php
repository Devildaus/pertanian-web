@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="css/contact.css">
<style>
  body {
    background-image: url('https://img.okezone.com/content/2019/02/14/320/2017803/petani-bawang-merah-brebes-panen-hasilnya-untung-6txh41UsH5.jpeg');
    background-size: 100% auto;
    background-repeat: no-repeat;
  }
</style>


<!-- contact_form.blade.php -->
<div class="container">
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contacts.store') }}" method="post">
        @csrf

        <label for="fname">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Nama Anda..">

        <label for="lname">Email</label>
        <input type="text" id="email" name="email" placeholder="Email anda..">

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select>


        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>



@endsection