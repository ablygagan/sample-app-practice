<?php
defined('SYSTEM_INIT') or die('Invalid Usage.');

?>
<html>
<head>
<?php
echo $this->writeMetaTags();
echo $this->getJsCssIncludeHtml(!CONF_DEVELOPMENT_MODE);
?>
</head>
<body>
<div id="header">
    <span>
        <a href="<?php echo FatUtility::generateUrl(); ?>">Home</a>
        This is header
    </span>
</div>
<div id="container">
<?php 
echo Message::getHtml();
?>
