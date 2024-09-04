<?php
// Query to retrieve employee data from database
$query = "SELECT * FROM Tabel_Pegawai";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<table class='table table-striped'>";
  echo "<tr><th>NIK</th><th>Nama</th><th>Alamat</th><th>Jenis Kelamin</th><th>No. Tlp</th><th>Jabatan</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['Nik'] . "</td>";
    echo "<td>" . $row['Nama'] . "</td>";
    echo "<td>" . $row['Alamat'] . "</td>";
    echo "<td>" . $row['Jenis_kelamin'] . "</td>";
    echo "<td>" . $row['No_tlp'] . "</td>";
    echo "<td>" . $row['Nama_jabatan'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No data found.";
}
?>