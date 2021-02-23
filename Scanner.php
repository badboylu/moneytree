
<html>
<style>
#preview{
   width:500px;
   height: 500px;
   margin:0px auto;
}
</style>
<video id="preview"></video>
<script src="<a class="vglnk" href="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" rel="nofollow"><span>https</span><span>://</span><span>rawgit</span><span>.</span><span>com</span><span>/</span><span>schmich</span><span>/</span><span>instascan</span><span>-</span><span>builds</span><span>/</span><span>master</span><span>/</span><span>instascan</span><span>.</span><span>min</span><span>.</span><span>js</span></a>"></script>
<script type="text/javascript">
    var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
    scanner.addListener('scan',function(content){
        alert(content);
        //window.location.href=content;
    });
    Instascan.Camera.getCameras().then(function (cameras){
        if(cameras.length>0){
            scanner.start(cameras[0]);
            $('[name="options"]').on('change',function(){
                if($(this).val()==1){
                    if(cameras[0]!=""){
                        scanner.start(cameras[0]);
                    }else{
                        alert('No Front camera found!');
                    }
                }else if($(this).val()==2){
                    if(cameras[1]!=""){
                        scanner.start(cameras[1]);
                    }else{
                        alert('No Back camera found!');
                    }
                }
            });
        }else{
            console.error('No cameras found.');
            alert('No cameras found.');
        }
    }).catch(function(e){
        console.error(e);
        alert(e);
    });
</script>
<div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" value="2" autocomplete="off"> Back Camera
  </label>
</div>
</html>

