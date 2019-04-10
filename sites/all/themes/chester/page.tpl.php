<header>
<div class="head">
<div class="container">
<div class="row-fluid">
<div class="span6 logo">
<a href="<?php print $front_page  ?>" title="Regresar al Inicio">
<?php if ($logo): ?>
<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
<?php else : ?>
<h1><?php echo ($site_name)?$site_name:"Chester" ?></h1>
<?php endif;  ?>
 </a>
</div>
<div class="span6 display_none">                            
                            <ul class="contact_top">
                                <li>
                                    <span class="color"><i class="icon-envelope"></i></span>
                                    <h5><a href="mailto:<?php echo theme_get_setting('email') ?>"><?php echo theme_get_setting('email') ?></a></h5>
                                </li>
                                <li>
                                    <span class="color"><i class="icon-phone"></i></span>
                                    <h5><?php echo theme_get_setting('phone') ?></h5>
                                </li>
                            </ul>
                        </div>
</div>
</div>
</div>
<?php if ($page['nav']): ?>
<nav>
<?php print render($page['nav']);?>
</nav>
<?php endif;  ?>
<?php if ($page['slider']):?>
<?php  print render($page['slider']);?>
<?php  if ($page['sponsor']) : ?>
<div class="sponsors display_none">
 <div class="container"> 
 <?php print render($page['sponsor']); ?>
 </div>
 </div>
<?php endif;  ?> 
<?php  elseif ($page['header']):?> 
<?php print render($page['header']);?>
<?php else : ?>
<div class="section_title">
                <div class="info_title">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span4 border_title">
                                <h1><?php echo ($title)?$title:'Untitled page' ?></h1>
                            </div>
                            <div class="span8">
                                <p>Sollemnes wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="span4 offset8">
                        <img src="<?php echo base_path().drupal_get_path('theme','chester') ?>/img/section_title/1.png" alt="Image">
                    </div>
                </div>
            </div>
<?php endif;  ?>			
</div>
</div>
</header>
<?php print render($page['help']); ?>
<?php if ($action_links): ?><ul class="action-links"><?php print
render($action_links); ?></ul><?php endif; ?>
<?php print render($page['content']); ?>
<section class="section_area">
<div class="container">
<div class="row-fluid">
<?php print render($page['main-content']);?>
</div>
</div>
</section>
<?php if ($page['footer-top']):?>
<footer class="section_area footer_top">
<div class="container">
<div class="row-fluid">
<?php print render($page['footer-top']);?>
</div>
</div>
</footer>
<?php endif;  ?>
<?php if ($page['footer-medium']):?>
<footer class="section_area footer_medium">
<div class="container">
<div class="row-fluid">
<?php print render($page['footer-medium']);?>
</div>
</div>
</footer>
<?php endif;  ?>
<footer class="section_area footer_down"> 
<div class="container">
                <div class="row-fluid">
                   <div class="span6">
                        <p>Dpto de Sistemas - UEA 2016</p>             
                    </div>
                   <?php if ($page['footer-down']) print render($page['footer-down']); ?> 
                </div>
            </div>
</footer>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57349ea37b7d53d702e0bd4f/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
