<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
        <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="post">       
        @csrf
        @method('PUT')
        <table class="table table-success table-striped-columns">
            <tr>
                <td>Jurusan Id</td>
                <td>:</td>
                <td><input type="text" name="Jurusan_Id" value="{{$matakuliah->Jurusan_Id}}"></td>
            </tr>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="Kode_Mata_Kuliah" value="{{$matakuliah->Kode_Mata_Kuliah}}"></td>
            </tr>
            <tr>
                <td>Nama Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="Nama_Mata_Kuliah" value="{{$matakuliah->Nama_Mata_Kuliah}}"></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="text" name="SKS" value="{{$matakuliah->SKS}}"></td>
            </tr>
              <tr>
                <td>Dosen Id</td>
                <td>:</td>
                <td><input type="text" name="Dosen_Id" value="{{$matakuliah->Dosen_Id}}"></td>
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