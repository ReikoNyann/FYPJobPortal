<<<<<<< HEAD
<?php
session_start();
include("includes/config.php");
$_SESSION['login']=="";
session_unset();
session_destroy();

?>
<script language="javascript">
document.location="index.php";
</script>
=======
<?php 
session_start();
session_destroy();
header("Location: index.php");
?>
>>>>>>> e91d9537eac637e74e6eabaf35f1db540da2581a
