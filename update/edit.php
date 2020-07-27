<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/../env.php'; ?>
<?php include __DIR__ . '/../partials/header.php'; ?>

<main>
  <h2>Modifica stanza numero: <?php echo $room['room_number']; ?></h2>

  <form action="<?php echo $base_path . '/update/update.php'; ?>" method="post">
    <input type="hidden" name="roomid" value="<?php echo $room['id']; ?>">

    <label>Room Number</label>
    <input type="text" name="roomnumber" value="<?php echo $room['room_number']; ?>"><br>

    <label>Floor</label>
    <input type="text" name="roomfloor" value="<?php echo $room['floor']; ?>"><br>

    <label>Beds</label>
    <input type="text" name="roombeds" value="<?php echo $room['beds']; ?>"><br>

    <input type="submit" name="submit" value="Salva">

  </form>
</main>
