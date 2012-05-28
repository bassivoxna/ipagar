<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name='robots' content='all, follow' />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Great admin</title>   
    <link href="public/css/default.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="public/css/gray.css" rel="stylesheet" type="text/css" media="screen" /> <!-- color skin: blue / red / green / dark -->
    <link href="public/css/datePicker.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="public/css/wysiwyg.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="public/css/fancybox-1.3.1.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="public/css/visualize.css" rel="stylesheet" type="text/css" media="screen" />    
    <script type="text/javascript" src="public/js/jquery-1.4.2.min.js"></script>   
    <script type="text/javascript" src="public/js/jquery.dimensions.min.js"></script>
    
    <!-- // Tabs // -->
    <script type="text/javascript" src="public/js/ui.core.js"></script>
    <script type="text/javascript" src="public/js/jquery.ui.tabs.min.js"></script>

    <!-- // Table drag and drop rows // -->
    <script type="text/javascript" src="public/js/tablednd.js"></script>

    <!-- // Date Picker // -->
    <script type="text/javascript" src="public/js/date.js"></script>
    <!--[if IE]><script type="text/javascript" src="public/js/jquery.bgiframe.js"></script><![endif]-->
    <script type="text/javascript" src="public/js/jquery.datePicker.js"></script>

    <!-- // Wysiwyg // -->
    <script type="text/javascript" src="public/js/jquery.wysiwyg.js"></script>

    <!-- // Graphs // -->
    <script type="text/javascript" src="public/js/excanvas.js"></script>
    <script type="text/javascript" src="public/js/jquery.visualize.js"></script>

    <!-- // Fancybox // -->
  	<script type="text/javascript" src="public/js/jquery.fancybox-1.3.1.js"></script>

    <!-- // File upload // --> 
    <script type="text/javascript" src="public/js/jquery.filestyle.js"></script>
    
    <script type="text/javascript" src="public/js/init.js"></script>
  </head>   
  <body>
  <div id="main">
    <?php include('inc.topo.php');?>
    <div id="content"><!-- /box -->

        
        <!-- box -->
        <div class="box">
          <div class="headlines">
            <h2><span>Titulo  curto</span></h2>
          </div>
          <p><!-- filter -->
        Conteudo conteuto

          </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>dasdasd</p>
       </div>
       <!-- /box -->

        <!-- /box --><!-- /box -->
    
        <!-- box --><!-- /box -->

        <!-- box --><!-- /box -->
      
        <div class="box-cols"></div>
      

    </div>
    <!-- /#content -->
    <!-- #sidebar -->
    <div id="sidebar">

        <!-- mainmenu -->
        <?php include('inc.menu.php');?>
        <!-- /.mainmenu -->

    </div>
    <!-- /#sidebar -->
    <!-- #footer -->
    <?php include('inc.rodape.php');?>
    <!-- /#footer -->
	
  <!-- MODAL WINDOW -->
	<div id="modal" class="modal-window">
				
		<h2>Example modal window</h2>

    <!-- Warning form message -->            
    <div class="form-message warning">
      <p>On the page the following error occurred.</p>
    </div>

		<p>Suspendisse et ante vitae turpis vestibulum fermentum nec nec elit. Suspendisse ullamcorper lacus in arcu mollis fringilla porta mi placerat. Ut at elit non diam tristique scelerisque. </p>

	</div>

  <!-- HELP WINDOW -->
	<div id="help" class="modal-window">
				
		<h2>Example help window</h2>

		<p>Suspendisse et ante vitae turpis vestibulum fermentum nec nec elit. Suspendisse ullamcorper lacus in arcu mollis fringilla porta mi placerat. Ut at elit non diam tristique scelerisque. </p>

    <ul class="list list-square">
      <li><strong>Lorem ipsum</strong>  dolor sit amet</li>
      <li><strong>consectetur adipiscing</strong> elit phasellus et risus</li> 
      <li><strong>Maecenas non</strong> nunc proin eleifend viverra sapien</li>
    </ul>
  
	</div>
	
	
  </div>
  <!-- /#main --> 
  </body>
</html>