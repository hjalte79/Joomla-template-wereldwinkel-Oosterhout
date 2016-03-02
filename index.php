<?php
// No direct access.
defined('_JEXEC') or die;

JLoader::import('joomla.filesystem.file');

$doc = JFactory::getDocument();

$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/cssreset.css', $type = 'text/css', $media = 'screen');
$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/colomn.css', $type = 'text/css', $media = 'screen');
$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/main.css', $type = 'text/css', $media = 'screen');
$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/article.css', $type = 'text/css', $media = 'screen');
$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/joomla.css', $type = 'text/css', $media = 'screen');

$baseURL = JUri::base() . 'templates/' . $this->template . '/';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Wereldwinkel Oosterhout</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="image/x-icon" href="img/favicon.ico" rel="shortcut icon">
        <jdoc:include type="head" />	
</head>
<body>
    <header>
        <div id="header-background">
            <div id="header-logo"><img width="327" height="145" src="<?php echo $baseURL; ?>img/logo.png"></div>
            <div id="header-kop1">Wereldwinkel<br />Oosterhout</div>
        </div>
        
    </header>
    <div id="wrapper">
        <div class="section group">
            <div class="col span_1_of_4">
                <div id="colomn-left">
                    <div class="main-menu">
                        <jdoc:include type="modules" name="position-1" />
                    </div>
                
                    <p> </p>
                    <div class="main-menu">
                        <jdoc:include type="modules" name="position-2" />
                    </div>
                </div>
            </div>
            
            <div class="col span_2_of_4 page">
                <article>
                    <jdoc:include type="component" />      
                    <p style="clear: both;"></p>
                </article>
            </div>
            <div class="col span_1_of_4">
                <div id="colomn-right">
                    <jdoc:include type="modules" name="position-3" />
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div id="footer-left"><jdoc:include type="modules" name="position-13" /></div>
        <div id="footer-right"><jdoc:include type="modules" name="position-14" /></div>
    </footer>  
</body>
</html>
