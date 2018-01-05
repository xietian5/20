  <?php global $area ?>
  <div class="neibanner" style="background:url(images/banner_about.jpg) no-repeat 50%; background-size: cover;"></div> 
  <div class="neipagename"> 
   <div class="pagename_en">
    ABOUT US
   </div> 
   <br /> 
   <div class="pagename_ch"> 
    <div>
     关于我们
    </div> 
   </div> 
  </div> 
  <div class="neimenu"> 
   <div> 
    <a href="about.php?area=gsjj" class="<?php if ($area == 'gsjj' || empty($area)) echo 'on'; ?>">公司简介</a> 
    <a href="about.php?area=qywh" class="<?php if ($area == 'qywh') echo 'on'; ?>">企业文化</a>
    <a href="about.php?area=gszz" class="<?php if ($area == 'gszz') echo 'on'; ?>">公司资质</a> 
   </div> 
  </div> 


<?php 

  include_once("about/$area.php");
 ?>