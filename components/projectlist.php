  <?php global $area ?>
  <div class="neibanner" style="background:url(images/banner_contact.jpg) no-repeat 50%; background-size: cover;"></div> 
  <div class="neipagename"> 
   <div class="pagename_en">
    Project
   </div> 
   <br /> 
   <div class="pagename_ch"> 
    <div>
     项目案例
    </div> 
   </div> 
  </div> 
  <div class="neimenu"> 
   <div> 
    <a href="project.php?area=dfbt" class="<?php if ($area == 'dfbt') echo 'on'; ?>">东风本田</a> 
    <a href="project.php?area=cfgx" class="<?php if ($area == 'cfgx') echo 'on'; ?>">长飞光纤</a>
    <a href="project.php?area=gdjj" class="<?php if ($area == 'gdjj') echo 'on'; ?>">国电九江发电厂</a> 
   </div> 
  </div> 
  <?php 

  include_once("project/$area.php");
 ?>