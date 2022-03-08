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

<?php 
session_start();
session_destroy();
header("Location: index.php");
?>

