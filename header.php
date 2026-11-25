<!DOCTYPE html>
<html  >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Themes</title>
     <?php wp_head(); ?> 
</head>
<body>
    <div>
        <header> 
           <div class="top-bar">
               <div class="site-logo"> Logo</div>
               <div class="searchbox"> Search Box</div>
            </div>
           <div class="menu">
                <?php wp_nav_menu(array('theme_location' => 'firstTheme_main_menu',)); ?>
            </div>
        </header>
    </div>