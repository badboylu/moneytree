<html>

<form action="process4.php" method="get" id="form">
<input type="hidden" name="username" value="" id="user">
<input type="hidden" name="auth" value="" id="auth">
</form>

<script>
function user(){
let user = localStorage.getItem('username');
document.getElementById("user").value = user;
}
function auth(){
let auth = localStorage.getItem('token');
document.getElementById("auth").value = auth ;
}
function submit(){
document.getElementById("form").submit();
}
function clear(){

  localStorage.removeItem("BatchCC");
  localStorage.removeItem("totalAmountCC");
  localStorage.removeItem("totalCostCC");
  localStorage.removeItem("cartNumberCC");

  localStorage.removeItem("PacksBW");
  localStorage.removeItem("totalAmountBW");
  localStorage.removeItem("totalCostBW");
  localStorage.removeItem("cartNumberBW");

  localStorage.removeItem("GramsCCes");
  localStorage.removeItem("totalAmountCCES");
  localStorage.removeItem("totalCostCCes");
  localStorage.removeItem("cartNumberCCES");

  localStorage.removeItem("GramsDP");
  localStorage.removeItem("totalAmountDP");
  localStorage.removeItem("totalCostDP");
  localStorage.removeItem("cartNumberDP");

  localStorage.removeItem("GramsNL");
  localStorage.removeItem("totalAmountNL");
  localStorage.removeItem("totalCostNL");
  localStorage.removeItem("cartNumberNL");

  localStorage.removeItem("GramsOC");
  localStorage.removeItem("totalAmountOC");
  localStorage.removeItem("totalCostOC");
  localStorage.removeItem("cartNumberOC");

  localStorage.removeItem("GramsPE");
  localStorage.removeItem("totalAmountPE");
  localStorage.removeItem("totalCostPE");
  localStorage.removeItem("cartNumberPE");

  localStorage.removeItem("GramsPR");
  localStorage.removeItem("totalAmountPR");
  localStorage.removeItem("totalCostPR");
  localStorage.removeItem("cartNumberPR");
  localStorage.removeItem("discount");
  localStorage.removeItem("promo");
}
clear();
user();
auth();
submit();
</script>
</html>
