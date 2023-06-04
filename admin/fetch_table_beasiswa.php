<?php
  require_once('../connection/db.php');
  $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
  $rowsPerPage = 5; // Number of rows to display per page

  // Calculate the OFFSET for the database query
  $offset = ($currentPage - 1) * $rowsPerPage;

  // Fetch the paginated data from the database
  // Modify your actual database query to include the LIMIT and OFFSET
  $query_select = "SELECT * FROM beasiswa LIMIT $rowsPerPage OFFSET $offset";
  $result = mysqli_query($conn, $query_select);
  ?>
  <tr>
    <th>Id</th>
    <th>Beasiswa</th>
    <th>Jenjang</th>
    <th>Waktu</th>
    <th>Deskripsi</th>
    <th>Link informasi</th>
    <th>Status</th>
    <th>Aksi</th>

  </tr>
  <?php
  while ($row = mysqli_fetch_assoc($result)) {
    ?>

    <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['beasiswa'] ?></td>
      <td><?php echo $row['jenjang'] ?></td>
      <td><?php echo $row['waktu'] ?></td>
      <td><?php echo implode(' ', array_slice(str_word_count($row['deskripsi'], 1), 0, 20)); ?></td>
      <td><?php echo $row['link_informasi'] ?></td>
      <td><?php echo $row['status'] ?></td>

      <td>
        <div class="tombol-table">
          <a href="#" onclick="confirmDelete(<?php echo $row['id'] ?>)" class="delete">Hapus</a>
          <a href="#" onclick="editData(<?php echo $row['id'] ?>)" class="edit">Ubah</a>
        </div>
      </td>
    </tr>
<?php
  }
?>
