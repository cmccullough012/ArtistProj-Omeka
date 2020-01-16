<?php
    ($buttonBg = get_theme_option('button_background')) || ($buttonBg = "#FFFF00");
    ($buttonText = get_theme_option('button_text')) || ($buttonText = "#000000");
    ($exhibitNavBg = get_theme_option('eb_nav_background')) || ($linkColor = "#FFFF00");
    ($exhibitNavText = get_theme_option('eb_nav_text')) || ($linkText = "#000000");
    ($exhibitCurrentLink = get_theme_option('eb_current')) || ($linkColor = "#FFFF00");
    ($featuredBg = get_theme_option('featured_background')) || ($featuredBg = "#000000");
    ($featuredText = get_theme_option('featured_text')) || ($featuredText = "#FFFFFF");
    ($homeIntroBg = get_theme_option('home_intro_background')) || ($homeIntroBg = "#FFFF00");
    ($homeIntroText = get_theme_option('home_intro_text')) || ($homeIntroText = "#000000");
    ($topNavHighlightText = get_theme_option('top_nav_highlight_text')) || ($buttonBg = "#FFFF00");
    ($homeLinks = get_theme_option('home_intro_link')) || ($linkText = "#FFFF00");
?>

<style>

p a,
span a,
table a,
.secondary-nav li a,
.pagination a,
.item-pagination a,
#sort-links a,
.element-text a,
#exhibit-page-navigation a,
#featured .featured-meta h3,
.button,
button,
input[type="submit"],
.view-items-link {
    background-color: <?php echo $buttonBg; ?>;
    color: <?php echo $buttonText; ?>;
}

.button,
button,
input[type="submit"] {
    border-color: <?php echo $buttonText; ?>
}

#exhibit-pages, .exhibits.browse, .exhibits.summary{
    background-color: <?php echo $exhibitNavBg; ?>;
}

#exhibit-pages a, .exhibits.browse a, .exhibits.browse h1, .exhibits.summary a, .exhibits.summary h1,  .exhibits.summary{
    color: <?php echo $exhibitNavText; ?>;
}
    
.exhibit-block li a, #exhibit-pages li.current ul li a{
    background-color:<?php echo $exhibitNavText; ?>;
}

.exhibit-block li a:hover, .exhibit-block a:hover, .exhibit-block p a:hover {
    background-color:<?php echo $exhibitCurrentLink; ?>;
}   
    
.exhibit-block.layout-file a:hover, .exhibit-gallery-item a:hover{
    background-color:transparent;
}
    
.exhibit-block.layout-file a:hover > img{    
    box-shadow:0px 0px 10px <?php echo $exhibitCurrentLink; ?>;
}
    
#exhibit-pages li.current > a:before,
#exhibit-pages li.parent.collapsed > a:before,
#exhibit-pages li.current a
{
    color: <?php echo $exhibitCurrentLink; ?>;
}  
    
.items.show #wrap{
    background-color:<?php echo $exhibitNavBg; ?>;
    color:<?php echo $exhibitNavText; ?>;
}
    
footer{
    background-color:<?php echo $exhibitNavBg; ?>;
}
    
footer a{
    color:<?php echo $exhibitNavText; ?>;
}
    
nav#exhibit-pages li a:hover,
nav#exhibit-pages h4 a:hover,
.navigation li a:hover{
    color: <?php echo $exhibitCurrentLink; ?> !important;
} 

.navigation.secondary-nav ul li a{
    color:black !important;
}

.navigation.secondary-nav ul li a:hover, .item-pagination.navigation li a:hover{
    color:black !important;
    background-color: <?php echo $exhibitCurrentLink; ?>;
}
    
#featured .featured-meta > * {
    background-color: <?php echo $featuredBg; ?>;
    color: <?php echo $featuredText; ?>;
}

#top-nav > ul > li > a {
    color: <?php echo $topNavHighlightText; ?>;
}

#intro {
    background-color: <?php echo $homeIntroBg; ?>;
    color: <?php echo $homeIntroText; ?>;
}

#intro a{
    color: <?php echo $homeLinks; ?>;
}


</style>