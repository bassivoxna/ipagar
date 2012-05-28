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
            <h2><span>Extrato Banco Virtual</span></h2>
          </div>
          <form class="formBox" method="post" action="">
            <fieldset>

            <!-- Correct form message --><!-- Warning form message -->            
            

            <!-- Error form message -->

            <div class="form-cols"><!-- two form cols -->
              <div class="col1">
              <div class="clearfix">
                <div class="lab">
                  <label for="input-one">Data Inicio</label></div>
                <div class="con"><input type="text" class="input datepicker" value="" name="" id="input-one" /></div>
		        </div>
              </div>
            <div class="col2">
              <div class="clearfix">
                <div class="lab">Data Final</div>
                <div class="con">
                  <input type="text" class="input datepicker" value="" name="input-one2" id="input-one3" />
                </div>
              </div>
            </div>
          </div>
            <div class="btn-submit"><!-- Submit form -->
              <input type="submit" value="Filtrar Data" class="button" />
            </div>
          </fieldset>    
        </form>
            <div class="box-content">
       <table class="tab tab-drag">
            <tr class="top nodrop nodrag">
              <th width="8" class="dragHandle">&nbsp;</th>
              <th width="184">Data</th>
              <th width="529">Descricao</th>
              <th width="236">Tipo De Lancamento</th>          
              <th width="135">Saldo em Conta</th>
            </tr>
            <tr>
              <td class="dragHandle">&nbsp;</td>
              <td>18/04/2012</td>
              <td><a href="#">Assinaturas pagas no dia 18/03/2012</a></td>
              <td>Entrada</td>          
              <td>R$ 1548.98</td>
            </tr>
            <tr>
              <td class="dragHandle">&nbsp;</td>
              <td colspan="3"><strong style="text-align:end">Total Disponivel para Saque:</strong></td>
              <td>&nbsp;</td>
            </tr>
          </table>
       </div>
       </div>
       
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