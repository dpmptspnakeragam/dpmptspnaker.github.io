<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak SKM</title>
    <!-- Include CSS styles for printing -->
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12pt;
            /* Sesuaikan dengan preferensi Anda */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        @media print {
            @page {
                size: legal;
                margin: 20mm 10mm;
                /* Atur margin sesuai kebutuhan */
            }
        }
    </style>
</head>

<body>
    <h1>Data Survey Kepuasan Masyarakat (SKM)</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Layanan</th>
                <th>U1</th>
                <th>U2</th>
                <th>U3</th>
                <th>U4</th>
                <th>U5</th>
                <th>U6</th>
                <th>U7</th>
                <th>U8</th>
                <th>U9</th>
                <th>R1</th>
                <th>R2</th>
                <th>R3</th>
                <th>R4</th>
                <th>R5</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($skm->result() as $row) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->jk; ?></td>
                    <td><?= $row->umur; ?></td>
                    <td><?= $row->pendidikan; ?></td>
                    <td><?= $row->pekerjaan; ?></td>
                    <td><?= $row->layanan; ?></td>
                    <td><?= $row->u1; ?></td>
                    <td><?= $row->u2; ?></td>
                    <td><?= $row->u3; ?></td>
                    <td><?= $row->u4; ?></td>
                    <td><?= $row->u5; ?></td>
                    <td><?= $row->u6; ?></td>
                    <td><?= $row->u7; ?></td>
                    <td><?= $row->u8; ?></td>
                    <td><?= $row->u9; ?></td>
                    <td><?= $row->r1; ?></td>
                    <td><?= $row->r2; ?></td>
                    <td><?= $row->r3; ?></td>
                    <td><?= $row->r4; ?></td>
                    <td><?= $row->r5; ?></td>
                    <td><?= $row->date; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script>
        // Print window automatically when page loads
        window.onload = function() {
            window.print();
        }
    </script>
</body>

</html>