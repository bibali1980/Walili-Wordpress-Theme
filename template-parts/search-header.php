
 <li id="header-search-icon">
 <a href="#">
   <div class="px-2">
       <i class="la la-search"></i>
   </div>
 </a>

<div id="myOverlay" class="overlay">
 <span id="searchOverlayClose" class="closebtn" title="Close">x</span>
 <div class="overlay-content">
   <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')) ?>">
     <input type="text" class="top-search-field" placeholder="Search here..." name="s" id="s">
     <button type="submit"><i class="las la-search"></i></button>
   </form>
 </div>
</div>
</li>
