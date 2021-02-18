<?php
$total='250';
$city='Pretoria';
$town='Pretoria  East';
?>
<html>
<script>
function set(){
localStorage.setItem('eTotal', <?php echo $total; ?>);
localStorage.setItem('eCity', <?php echo $city; ?>);
localStorage.setItem('eTown', <?php echo $town; ?>);
}
set();
</script>
</html>
