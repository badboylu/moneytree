<script>
var City = $("#City").val();

if (City == "Tshwane/Pretoria") {
   $("#hideJHBtown").fadeOut(); 
   $("#hidePTAtown").fadeIn(); 
}else {
   $("#hidePTAtown").fadeOut(); 
   $("#hideJHBtown").fadeIn();
}
</script>
