<?php
      session_start();
      $u=$_SESSION["n"];
      $connection = mysqli_connect("localhost", "root", "","quizonn"); 
      $sql4 = "SELECT * FROM acc WHERE uname like '$u'";
      $r4 = mysqli_query($connection,$sql4);
      $s = mysqli_fetch_assoc($r4);
      $b=$s["sci"]+10;
      $sql5="UPDATE acc SET sci='$b' WHERE uname like '$u'";
      $r5 = mysqli_query($connection,$sql5);
      ?>
      <script>
      var a1="<?php echo $s["sci"]; ?>";
      alert(a1);
      var a2="<?php echo $b; ?>";
      alert(a2);
</script>