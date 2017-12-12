
  <?php
    include_once("classes/alarm.php");
    $geta = Alarm::Instance($_GET['id']);
    $getj = json_encode($geta);
    $gstate = $geta->state;
    // $galarmid = $geta->id;
    if ($gstate === '1') {
      // $geta->state = 2;
      $geta->state = '2';
      $geta->update_db();
    }
   ?>
