<?php
$lunga='Lunga';
?>
<html>
<span id="show">
Test
</span>
<script>

function test(){
let test = 'Lunga';
if(test){
  localStorage.setItem('username', test);
 }
}

function show(){
let name = localStorage.getItem('username');
document.getElementById("show").textContent = name;
}

show();
test();
</script>
</html>
