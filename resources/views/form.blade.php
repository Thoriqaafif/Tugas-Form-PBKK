<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Beasiswa</title>
</head>
<body>
    <form method="post" action="/form" enctype="multipart/form-data">
        @csrf
        <h1 class="title">Pendaftaran Beasiswa SMAN 99 Bratang</h1>

        <!-- Nama -->
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        @error('nama')
        {{ $message }}
        @enderror

        <!-- Email -->
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Masukkan email anda" name="email">
        @error('email')
        {{ $message }}
        @enderror

        <!-- NIK -->
        <label for="nik">NIK</label>
        <input type="text" id="nik" name="nik">
        @error('nik')
        {{ $message }}
        @enderror

        <!-- Kelas -->
        <label for="kelas">Kelas</label>
        <input type="text" id="kelas" name="kelas">
        @error('kelas')
        {{ $message }}
        @enderror

        <!-- Nilai raport -->
        <label for="nilai">Rata-rata nilai raport</label>
        <input type="text" id="nilai" name="nilai">
        @error('nilai')
        {{ $message }}
        @enderror

        <!-- Foto -->
        <label for="foto">Foto</label>
        <input type="file" id="foto" name="foto" accept="image/*">
        @error('foto')
        {{ $message }}
        @enderror

        <button type="submit">submit</button>
    </form>
</body>
</html>