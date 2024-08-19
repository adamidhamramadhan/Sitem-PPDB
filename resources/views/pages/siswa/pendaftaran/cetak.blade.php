<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Kartu Pendaftaran</title>
  <style>
    body {
      font-family: Georgia, Helvetica, sans-serif;
    }
    .header {
      text-align: center;
      border: 2px solid black;
      padding: 10px;
      border-collapse: separate;
    }
    hr {
      border-top: 2px solid black;
    }
    
  </style>
</head>
<body>
  <div class="container">
    <table class="header">
      <thead>
        <tr>
          <td>
            <img src="{{ public_path('frontend/assets/img/sma.png') }}" alt="foto1" height="80">
          </td>
          <th>
              TANDA PESERTA<br/>
              SELEKSI PENERIMAAN CALON SISWA<br/>
              SMA NEGERI XYZ KOTA BENGKULU
          </th>
          <td>
            <img src="{{ public_path('frontend/assets/img/tutwuri.png') }}" alt="foto2" height="80">
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <hr/>
          </td>
        </tr>
      </thead>
      <tbody align="left">
        <tr>
          <td>No. Peserta </td>
		      <td>:&nbsp; CLNS-{{ \Carbon\Carbon::now()->format('Y') }}{{ str_pad($data->id, 4, '0', STR_PAD_LEFT) }}</td>
		      <td rowspan="5">
                <img src="{{ public_path('img/foto_siswa/'. $data->foto) }}" alt="" width="150" height="150">
              </td>
        </tr>
        <tr>
          <td>NISN </td>
		      <td>:&nbsp; {{ $data->nisn }}</td>
        </tr>
        <tr>
          <td>Nama Peserta </td>
		      <td>:&nbsp; {{ $data->nama_siswa }}</td>
        </tr>
        <tr>
          <td>Tanggal Lahir </td>
		      <td>:&nbsp; {{ \Carbon\Carbon::create($data->tanggal_lahir)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
          <td>Asal Sekolah </td>
		      <td>:&nbsp; {{ $data->asal_sekolah }}</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3">
            <hr/>
          </td>
        </tr>
        <tr>
          <td colspan="3" align="left">Catatan :</td>
        </tr>
		    <tr>
          <td colspan="3" align="left">1. Kartu ini harap dicetak</td>
        </tr>
		    <tr>
          <td colspan="3" align="left">2. Kartu ini wajib dibawa sebagai bukti lolos pendaftaran</td>
        </tr>
      </tfoot>
    </table>
  </div>
</body>
</html>