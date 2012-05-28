<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name='robots' content='all, follow' />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>iPagar - Meus Planos</title>   
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
            <h2><span>Planos Cadastrados</span></h2>
          </div>
          <div id="box-content">
<table class="tab tab-drag">
            <tr class="top nodrop nodrag">
              <th width="8" class="dragHandle">&nbsp;</th>
              <th width="135">ID iPagar</th>
              <th width="436">Descricao</th>
              <th width="100">Duração</th>
              <th width="114">Valor</th>          
              <th width="140">Ao Renovar</th>
              <th width="81" class="action">Status</th>
              <th width="79" class="action">Funcao</th>
            </tr>
            <tr>
              <td class="dragHandle">&nbsp;</td>
              <td>1803</td>
              <td>Plano Degustacao nao sei o que blablabla</td>
              <td>30 dias</td>
              <td>R$ 29.65</td>          
              <td>Manter no Plano</td>
              <td class="action">Ativo</td>
              <td class="action">Desativar | Editar</td>
            </tr>
          </table>
          </div>
       </div>
<div class="box">
<div class="box-content">
          <div class="headlines">
            <h2><span>Novo Plano de Assinatura</span></h2>
          </div>
<form class="formBox" method="post" action="">
            <fieldset>

            <!-- Correct form message -->
            <div class="form-message correct">
              <p>Plano Cadastrado com Sucesso!</p>
            </div>

            <!-- Warning form message -->            
            <div class="form-message warning">
              <p>Aviso: Texto do aviso</p>
            </div>

            <!-- Error form message -->            
            <div class="form-message error">
              <p>Erro Nao foi possivel cadastrar seu plano
            </p></div>
            
            <div class="form-cols"><!-- two form cols -->
            <div class="col1">
              <div class="clearfix">
                <div class="lab">
                  <label for="input-one">Nome Plano</label></div>
                <div class="con"><input type="text" class="input" value="" name="" id="input-one" /></div>
		        </div>
              <div class="clearfix">
                <div class="lab">
                  <label>Valor</label> 
                  ex. 29.90</div>
			          <div class="con">
			            <input type="text" class="input" value="" name="input-one" id="input-one2" />
			          </div>
		        </div>
            </div>
            <div class="col2">
              <div class="clearfix">
                <div class="lab">Duração</div>
                <div class="con">
                  <select name="select" class="select">
                    <option value="9999">Cobranca Unica</option>
                    <option value="7">Cobranca Semanal</option>
                    <option value="15">Cobranca Quinzenal</option>
                    <option value="30">Cobranca Mensal</option>
                    <option value="60">Cobranca Bimestral</option>
                    <option value="90">Cobranca Trimestral</option>
                    <option value="180">Cobranca Semestral</option>
                    <option value="360">Cobranca Anual</option>
                  </select>
                </div>
              </div>
              <div class="clearfix">
                <div class="lab">
                  <label>Ao Renovar</label></div>
		          <div class="con">
                  <select class="select">
                    <option value="mesmo" selected="selected">Manter no mesmo plano</option>
                    <option value="1803">Trocar para o plano 1803</option>
                  </select>
                </div>
		        </div>
            </div>
            </div>
            <div class="clearfix">
              <div class="lab">
                <label for="input-three">Informações/Observações ao cliente</label></div>
		          <div class="con"><input type="text" class="input" value="" name="" id="input-three" /></div>
		        </div>
            <div class="clearfix checkbox">
              <div class="lab">
                <label>Status Plano</label></div>
              <div class="con">
                <select name="select2" class="select">
                  <option value="Ativo">Ativo</option>
                  <option value="Inativo">Inativo</option>
                </select>
              </div>
            </div>
            <div class="btn-submit"><!-- Submit form -->
              <input type="submit" value="Cadastrar Plano" class="button" />
            </div>
          </fieldset>    
        </form>
       </div>
      
        <div class="box-cols"></div>
      

    </div>
    </div>

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