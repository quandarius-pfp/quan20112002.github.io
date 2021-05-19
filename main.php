<div class="Main">
  <div class="row">
    <?php
    include("pages/list_sildebar.php");
    
    
    
    ?>
    <div class="main_content">
        <?php
        if(isset($_GET['quanly'])){
          $tam=$_GET['quanly'];

        } else {
          $tam='';
        }
        if($tam=='sanphammoi'){
                 include("main/sanphammoi.php");  
        }else if($tam=='giohang'){
                  include("main/giohang2.php");

         }else if($tam=='tintuc'){
                  include("main/TinTuc.php");

         }else if($tam=='lienhe'){
                  include("main/Lienhe.php");
 
         } else if($tam=='banphimco'){
          include("main/banphimco.php");

         } else if($tam=='chuot'){
          include("main/chuot.php");

         } 
         else if($tam=='pad'){
          include("main/pad.php");

         } else if($tam=='tainghe'){
          include("main/tainghe.php");

         } else if($tam=='phukien'){
          include("main/phukien.php");

         } else if($tam=='thanhtoan'){
          include("main//thanhtoan.php");

         } 
         else {
          include("main/Giohang.php");
         }

 
        
        ?>
      </div>
</div>
</div>