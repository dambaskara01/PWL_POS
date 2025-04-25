<!DOCTYPE html>
<html lang="id">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laporan Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .text-center {
            text-align: center;
        }
        .header {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">LAPORAN DATA PENJUALAN</div>
    
    <table>
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Kode Penjualan</th>
                <th>Pembeli</th>
                <th>User</th>
                <th>Tanggal Penjualan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penjualan as $index => $p)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $p->penjualan_kode }}</td>
                    <td>{{ $p->pembeli }}</td>
                    <td>{{ $p->user->name }}</td>
                    <td>{{ date('d-m-Y', strtotime($p->penjualan_tanggal)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
