<?php 
   echo '<div style="display: flex;">
   <div style="display: flex; background-color:black; text-align: center;  width: 100%; ">
       <div>
       <a href="inicial.php"><img class="logo1" src="img/logo2.png" alt="logo_nika"/></a>
           <!--<img src="imagem/logo2.png"" alt="logo_nika"/>-->
       </div>
       <div class="row">
           <div class="intcont">
               <span class="bem" >Bem vindo!  '.$logado.'</span>
           </div>
           <div class="menu-container">
                   <ul class="menu clearfix">
                       <li><a href="novaViagem.php">Nova viagem</a></li>
                           <li><a href="#">Administração</a>
                                   <ul class="sub-menu clearfix">
                                           <li><a href="#">Cadastro</a>
                                               <ul class="sub-menu">
                                                   <li><a href="cadastroFuncionario.php">Funcionarios</a></li>
                                                   <li><a href="Cadastro_cliente.php">Clientes</a></li>
                                               </ul>
                                           <li><a href="#">Relatorios</a>
                                               <ul class="sub-menu">
                                                   <li><a href="relatorio_viagem.php">Viagem</a></li>
                                                   <li><a href="relatorioMotorista.php">Motorista</a></li>
                                                   <li><a href="relatorioCliente.php">Cliente</a></li>
                                               </ul>
                                   </ul><!-- submenu -->
                           </li>
                           <li><a href="construcao.php">Financeiro</a>
                           <li><a href="construcao.php">Entregas</a>
                           <li><a href="construcao.php">Gestão</a>
                   </ul>
           </div>
       </div>
   </div>
</div>';
?>