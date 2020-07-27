<?php include __DIR__ . '/server.php' ?>
<?php include __DIR__ . '/env.php' ?>
<?php include __DIR__ . '/partials/header.php'?>

    <main>
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
            <a href="#">+Info</a>
          </td>
        </tbody>
        <?php } ?>

      </table>
    </main>

  </body>
</html>
