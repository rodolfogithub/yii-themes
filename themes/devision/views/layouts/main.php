<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/devision/style.css" />

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/devision/js/cufon-yui.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/devision/js/arial.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/devision/js/cuf_run.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="main" >
	<div class="header">
        <div class="header_resize" >
    		<div class="logo">
                <h1><small><?php echo CHtml::encode(Yii::app()->name); ?></small></h1>
            </div>       
            <div class="menu_nav">
                <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('/site/index')),
                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                )); ?>
               <div class="clr"></div>
            </div><!-- mainmenu -->
            <div class="clr"></div>
            <div class="header_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/devision/images/main_img.png" alt="" width="298" height="233" />
                <h2>More <span>best</span> Proposition </h2>
                <p>Application represents the execution context of request processing. Its main task is to resolve the user request and dispatch it to an appropriate controller for further processing.</p>
                <div class="clr"></div>
            </div>
        </div>            
	</div><!-- header -->
    <div class="clr"></div>    
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
    <div class="fbg" >
        <div class="fbg_resize">
            <div class="col c1">
                <h2><span>Footer column 1</span></h2>
            </div>    
            <div class="col c2">
                <h2><span>Footer column 2</span></h2>
            </div>
            <div class="col c3">
                <h2><span>Footer column 3</span></h2>
            </div>    
            <div class="clr"></div>    
        </div>
        <div class="footer">
            <p class="lf" >Copyright &copy; <?php echo date('Y'); ?> by My Company.</p>
            <p class="rf" >All Rights Reserved.<?php echo Yii::powered(); ?></p>
            <div class="clr"></div>
        </div><!-- footer -->
    </div>    
</div><!-- page -->

</body>
</html>
