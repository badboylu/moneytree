<html>
<script>
function set(){
localStorage.setItem('eTotal', <?php echo $total; ?>);
localStorage.setItem('eCity', <?php echo $city; ?>);
localStorage.setItem('eTown', <?php echo $town; ?>);
localStorage.setItem('eSuburb', <?php echo $suburb; ?>);
localStorage.setItem('eStreet', <?php echo $street; ?>);
localStorage.setItem('eMall', <?php echo $mall; ?>);
localStorage.setItem('eBuilding', <?php echo $building; ?>);
localStorage.setItem('eShop', <?php echo $shop; ?>);
localStorage.setItem('eComplex', <?php echo $complex; ?>);
localStorage.setItem('eCompany', <?php echo $company; ?>);
localStorage.setItem('eHouseNumber', <?php echo $housenumber; ?>);
localStorage.setItem('eUnitNumber', <?php echo $unitnumber; ?>);
localStorage.setItem('eEstate', <?php echo $estate; ?>);
localStorage.setItem('eDP', <?php echo $dp; ?>);
localStorage.setItem('eCC', <?php echo $cc; ?>);
localStorage.setItem('eOC', <?php echo $oc; ?>);
localStorage.setItem('eBW', <?php echo $bw; ?>);
localStorage.setItem('eNL', <?php echo $nl; ?>);
localStorage.setItem('ePR', <?php echo $pr; ?>);
localStorage.setItem('eCCES', <?php echo $cces; ?>);
localStorage.setItem('ePE', <?php echo $pe; ?>);
localStorage.setItem('eContact', <?php echo $contactnumber; ?>);
localStorage.setItem('eDate', <?php echo $date; ?>);
localStorage.setItem('username', <?php echo $username; ?>);
localStorage.setItem('token', <?php echo $authtoken; ?>);
}
set();
</script>
</html>
