<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $meta_title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('public_html/css/bootstrap.min.css'); ?>" rel="stylesheet">
    
    <link href="<?php echo base_url('public_html/css/admin.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('public_html/css/datepicker.css'); ?>" rel="stylesheet">

    <!-- Optional theme -->
    <link href="<?php echo base_url('public_html/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('public_html/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('public_html/js/bootstrap-datepicker.js'); ?>"></script>

    <?php if(isset($sortable) && $sortable === TRUE); ?>
    <script src="<?php echo base_url('public_html/js/jquery-ui-1.9.2.custom.min.js'); ?>"></script>
    <script src="<?php echo base_url('public_html/js/jquery.mjs.nestedSortable.js'); ?>"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    
    <!-- TinyMCE -->
    <script type="text/javascript" src="<?php echo base_url('public_html/js/tiny_mce/tiny_mce_dev.js'); ?>"></script>
    <script type="text/javascript">
      tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,
      });
    </script>
    <!-- /TinyMCE -->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>