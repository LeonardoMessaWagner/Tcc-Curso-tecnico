<!--Modal login-->  
<div class="modal fade" id="loginUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div  class="modal-header ">
        <h4 class="modal-title text-center" id="loginUsuarioModalLabel">Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="Fazer_login.php">
      <div   class=" modal-body">
          <div class="form-group row">
             <label  class="col-sm-2 col-form-label">Email:</label>
             <div class="col-sm-10">
               <input type="email" class="form-control" name="email"  placeholder="email">
             </div>
          </div>
          <div class="form-group row">
             <label  class="col-sm-2 col-form-label">Senha:</label>
             <div class="col-sm-10">
               <input type="password" class="form-control" name="senha" id="senha"  placeholder="senha">
          <div class="CapsLock"></div>
             </div>
          </div>
      </div>
      <div  class="modal-footer ">
        <button  type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Finalizar Login </button>
      </div>
     </form>
    </div>
  </div>
</div>         
<!--Modal Cadastro-->
 <div class="modal fade" id="addUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h4 class="modal-title text-center" id="addUsuarioModalLabel">Cadastrar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="cadastra_user.php">
      <div class="modal-body ">
          
               <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Nome:</label>
                    <div class="col-sm-10">
                    <input name="nome" type="text" class="form-control"  placeholder="Nome">
                    </div>
               </div>
               <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                    <input name="email" type="email" class="form-control"  placeholder="email">
                    </div>
               </div>
               <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Senha:</label>
                    <div class="col-sm-10">
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="senha">
                    <div class="CapsLock"></div>
                    </div>
               </div>
               <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Confirmar senha:</label>

                    <div class="col-sm-10">
                    <input name="confirmas" type="password" class="form-control" id="senha"  placeholder="confirmar senha">
                    <div class="CapsLock"></div>
                    </div>
               </div>
     </div>
      <div class=" modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Finalizar Cadastro</button>
      </div>
     </form>
    </div>
  </div>
</div>
<!--Modal Sair-->
<div class="modal fade" id="logoutUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div  class="modal-header ">
        <h4 class="modal-title text-center" id="logoutUsuarioModalLabel">Sair</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class=" modal-body ">
           Você tem Certeza?
     </div>
      <div  class="modal-footer ">
      <form method="POST" action="Alterador.php">
        <button  type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        
               <button  value=1 name="sair" type="submit" class="btn btn-danger">Realizar Log out </button>
        </form>
      </div>
    </div>
  </div>
</div> 
<!--Modal Perfil-->
<div class="modal fade" id="perfilUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleUsuarioModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  text-center">
        <h4 class="modal-title" id="perfilUsuarioModalLabel">Alterar Informações</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form action="Alterador.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome:</label>
            <input type="text" class="form-control"  name="nome_att" placeholder="Nome atual : <?php echo $_SESSION['nome']; ?>">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">E-mail:</label>
            <input type="text" name="email_att" class="form-control" placeholder="E-mail atual : <?php echo $_SESSION['email']; ?>">
          </div>
          
          <div class="modal-footer">
               <button   type="button" class="btn btn-danger" data-toggle='modal'  onclick="escondemodal();" >Apagar usuario</button>
               <button onclick="reset();" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
               <button type="submit"  class="btn btn-primary">Salvar Alterações?</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--Modal deleta user-->
<div class="modal fade" id="deletaUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div  class="modal-header ">
        <h4 class="modal-title text-center" id="deletaUsuarioModalLabel">Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class=" modal-body ">
           Você tem Certeza?
     </div>
      <div  class="modal-footer ">
      <form method="POST" action="Alterador.php">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="modas();">Cancelar</button>
        
               <button   value=1 name="deleta" type="submit" class="btn btn-danger">Deletar usuario </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Cadastrar Dados-->
<div class="modal fade" id="CadUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div  class="modal-header ">
        <h4 class="modal-title text-center" id="CadUsuarioModalLabel">Cadastrar Dados</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class=" modal-body ">
      <form method="POST" action="Cad_dados.php" enctype="multipart/form-data">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome:</label>
            <input type="text" class="form-control"  name="nome">
          </div>
        <div class="form-group">
    <label>Tipo:</label>
    <select name="tipo" class="form-control" id="exampleFormControlSelect1">
      <option  value="zerg">Zerg</option>
      <option  value="terrano">Terrano</option>
      <option  value="protoss">Protoss</option>
      
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descrição</label>
    <textarea class="form-control" name="descricao"  rows="3"></textarea>
  </div>
     <div class="form-group">
          <label>Foto: </label>
          <input type="file" name="foto">
        </div>
      </div>
      <div  class="modal-footer ">
      
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Cancelar</button>
        
               <button  type="submit" class="btn btn-danger">Confirmar Cadastro</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--modal autt-->
<div class="modal fade" id="ATTModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div  class="modal-header ">
        <h4 class="modal-title text-center" id="ATTModalLabel">Lista de Autorizações</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class=" modal-body ">
      <table  class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">ID</th>
      <th scope="col">E-mail</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <form action="Att_desatt.php" method="post"> 
        <?php include('conect.php');
			$query = "SELECT * FROM usuario";
      $result = mysqli_query($conexao,$query);
      $cont = 0;
			while ($register = mysqli_fetch_array($result)) {
        $cont = $cont + 1;
        $nome = $register['nome'];
      $id[$cont] = $register['id'];
        $adm = $register['adm'];


        $email = $register['email'];
        if($register['adm'] == 1){
          $autorizacao = "autorizado";
        }else{$autorizacao = "negado";}     ?> 
      <tr>
      <td scope="row"><?php echo $nome; ?> </td>
      <td><?php echo $id[$cont]; ?></td>
      <td><?php echo $email;?></td>
      <td><?php echo $autorizacao;?></td>
      <td>
        
      <?php  
        
        if($autorizacao == "negado" ) {
          echo "<button   name='autorizador' value= '$id[$cont]' type='submit' class='btn btn-success' >Autorizar</button></td>";}
          elseif($autorizacao == "autorizado"){
            echo"<button name='desauto' value = '$id[$cont]' type='submit' class='btn btn-danger'>Desautorizar </button></td>";}}?>
    
    
        
      </tr>
    </form>
  </tbody>
</table>







<script src="js/jquery.js"></script>
<script language="Javascript">
$(document).ready(function(){
    $('#senha').on('keypress',function(e){
      kc = e.keyCode?e.keyCode:e.which;
      sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
      if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk)){
        $('.CapsLock').html('CapsLock ativado!');
      }
      else{
        $('.CapsLock').html('');
      }
    })
})
</script> 

