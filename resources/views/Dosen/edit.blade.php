<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
        <form action="{{ route('dosen.update', $dosen->id) }}" method="post">       
        @csrf
        @method('PUT')
        <table class="table table-success table-striped-columns">
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="Fullname" value="{{$dosen->Fullname}}"></td>
            </tr>
            <tr>
                <td>Nomor Induk Pegawai</td>
                <td>:</td>
                <td><input type="text" name="NIP" value="{{$dosen->NIP}}"></td>
            </tr>
            <tr>
                <td>Nomor Induk Dosen Nasional</td>
                <td>:</td>
                <td><input type="text" name="NIDN" value="{{$dosen->NIDN}}"></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhirr</td>
                <td>:</td>
                <td><input type="text" name="Pendidikan_Terakhir" value="{{$dosen->Pendidikan_Terakhir}}"></td>
            </tr>
              <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="Jurusan_id" value="{{$dosen->Jurusan_id}}"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="Tempat_Lahir" value="{{$dosen->Tempat_Lahir}}"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="Tanggal_Lahir" value="{{$dosen->Tanggal_Lahir}}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="Alamat">{{$dosen->Alamat}}</textarea></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Update">
                    <input type="reset" value="Clear">
                </td>
            </tr>
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>