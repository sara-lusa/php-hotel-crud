<?php include __DIR__ . '/database.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean Hotel</title>

    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>

    <header>
      <h1>Boolean Hotel</h1>
    </header>

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
        </tbody>
        <?php } ?>

      </table>
    </main>

  </body>
</html>
