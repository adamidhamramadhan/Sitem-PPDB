<!DOCTYPE html>
<html>

    <head>
        <title>Data Semua Pendaftar</title>
    </head>

    <body>
        <h3 align="center">Data Semua Pendaftar</h3>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
            <thead>
                <tr bgcolor="grey">
                    <th>No</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Asal Sekolah</th>
                    <th>Status Pendaftaran</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($data as $l)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $l->nama_siswa }}</td>
                    <td>{{ $l->nisn }}</td>
                    <td>{{ $l->asal_sekolah }}</td>
                    <td>{{ $l->status_pendaftaran }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>

</html>