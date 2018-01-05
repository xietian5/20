    <?php global $area ?>
  <div class="neibanner" style="background:url(images/banner_service.jpg) no-repeat 50%; background-size: cover;"></div> 
  <div class="neipagename"> 
   <div class="pagename_en">
    Solution
   </div> 
   <br /> 
   <div class="pagename_ch"> 
    <div>
     解决方案
    </div> 
   </div> 
  </div> 
  <div class="neimenu"> 
   <div> 
    <a href="solution.php?area=gyzd" class="<?php if ($area == 'gyzd') echo 'on'; ?>">工业自动化</a> 
    <a href="solution.php?area=gyxx" class="<?php if ($area == 'gyxx') echo 'on'; ?>">工业信息化</a> 
    <a href="solution.php?area=wlw" class="<?php if ($area == 'wlw') echo 'on'; ?>">物联网</a> 
   </div> 
  </div> 

<?php 

  include_once("solution/$area.php");
 ?>