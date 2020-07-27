<?php include __DIR__ . '/server.php' ?>
<?php include __DIR__ . '/../env.php' ?>
<?php include __DIR__ . '/../partials/header.php' ?>

<main>

  <?php if(empty($room)) { ?>
    <p>Questa camera non è disponibile</p>
  <?php } else { ?>
    <h2>Stanza numero <?php echo $room['room_number']; ?></h2>
    <ul>
      <li>ID: <?php echo $room['id']; ?></li>
      <li>Room Number: <?php echo $room['room_number']; ?></li>
      <li>Floor: <?php echo $room['floor']; ?></li>
      <li>Beds: <?php echo $room['beds']; ?></li>
      <li>Updated at: <?php echo $room['updated_at']; ?></li>
    </ul>
  <?php }?>
</main>
