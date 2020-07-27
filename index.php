<?php include __DIR__ . '/server.php' ?>
<?php include __DIR__ . '/env.php' ?>
<?php include __DIR__ . '/partials/header.php'?>

    <main>

      <?php if(isset($_GET['uproom'])) { ?>
        <h3>Stanza numero <?php echo $_GET['uproom'] ?> aggiornata con successo</h3>
      <?php } ?>


      <table>
        <thead>
          <th>ID</th>
          <th>Room Number</th>
          <th>Floor</th>
        </thead>

        <?php foreach ($rooms as $room) { ?>
        <tbody>
          <td><?php echo $room['id']?></td>
          <td><?php echo $room['room_number']?></td>
          <td><?php echo $room['floor']?></td>
          <td>
            <a href="<?php echo $base_path . '/show/show.php?id=' . $room['id']?>">+Info</a>

            <a href="<?php echo $base_path . '/update/edit.php?id=' . $room['id']?>">Update</a>
          </td>
        </tbody>
        <?php } ?>

      </table>
    </main>

  </body>
</html>
