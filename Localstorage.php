<?php
$lunga='Lunga';
?>
<html>
<div id="show">
</div>
<script>

function test(){
let test = 'Lunga';
if(test){
  localStorage.setItem('username', test);
 }
}

function show(){
let name = localStorage.getItem('username');
document.getElementById("show").textcontent = '5';
}

show();
test();
</script>
</html>
