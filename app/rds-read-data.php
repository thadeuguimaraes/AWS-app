<h2>Lista de Contatos</h2><p>
<?php
  //This is a simple address book example for testing with RDS

  include('rds.conf.php');

  // Set address book variables
  isset($_REQUEST['mode']) ? $mode=$_REQUEST['mode'] : $mode="";
  isset($_REQUEST['id']) ? $id=$_REQUEST['id'] : $id="";
  isset($_REQUEST['lastname']) ? $lastname=$_REQUEST['lastname'] : $lastname="";
  isset($_REQUEST['firstname']) ? $firstname=$_REQUEST['firstname'] : $firstname="";
  isset($_REQUEST['phone']) ? $phone=$_REQUEST['phone'] : $phone="";
  isset($_REQUEST['email']) ? $email=$_REQUEST['email'] : $email="";

  // Connect to the RDS database
 $conexao =  mysqli_connect($RDS_URL, $RDS_user, $RDS_pwd, $RDS_DB) or die(mysqli_error());

  mysqli_select_db($conexao, $RDS_DB) or die(mysqli_error());

if ( $mode=="add")
 {
 Print '<h2>Adicionar Contatos</h2>
 <p>
 <form action=';
 echo $_SERVER['PHP_SELF'];
 Print '
 method=post>
 <table >
 <tr><td>Name:</td><td><input type="text" name="firstname"style="color:black" /></td></tr>
 <tr><td>Sobrenome:</td><td><input type="text" name="lastname" style="color:black" /></td></tr>
 <tr><td>Telefone:</td><td><input type="text" name="phone" style="color:black" /></td></tr>
 <tr><td>Email:</td><td><input type="text" name="email" style="color:black" /></td></tr>
 <tr><td></td><td colspan="2" align="center"><input class="btn btn-primary btn-sm btn-block" type="submit" /></td></tr>
 <input type=hidden name=mode value=added>
 </table>
 </form> <p>';
 }

 if ( $mode=="added")
 {
 mysqli_query ($conexao, "INSERT INTO address (lastname, firstname, phone, email) VALUES ('$lastname', '$firstname', '$phone', '$email')");
 }

if ( $mode=="edit")
 {
 Print '<h2>Editar Contatos</h2>
 <p>
 <form action=';
 echo $_SERVER['PHP_SELF'];
 Print '
 method=post>
 <table>


 <tr><td>Nome:</td><td><input style="color:black" type="text" value="';
 Print $firstname;
 print '" name="firstname" /></td></tr>
 <tr><td>Sobrenome:</td><td><input style="color:black" type="text" value="';
 Print $lastname;
 print '" name="lastname" /></td></tr>
 <tr><td>Telefone:</td><td><input style="color:black" type="text" value="';
 Print $phone;
 print '" name="phone" /></td></tr>
 <tr><td>Email:</td><td><input style="color:black" type="text" value="';
 Print $email;
 print '" name="email" /></td></tr>
 <tr><td></td><td colspan="3" align="center"><input class="btn btn-primary btn-sm btn-block" type="submit" /></td></tr>
 <input type=hidden name=mode value=edited>
 <input type=hidden name=id value=';
 Print $id;
 print '>
 </table>
 </form> <p>';
 }

 if ( $mode=="edited")
 {
 mysqli_query ($conexao, "UPDATE address SET lastname = '$lastname', firstname = '$firstname', phone = '$phone', email = '$email' WHERE id = $id");
 Print "Dados Atualizados!!!<p>";
 }

if ( $mode=="remove")
 {
 mysqli_query ($conexao, "DELETE FROM address where id=$id");
 Print "Contato removido com sucesso... <p>";
 }

 $data = mysqli_query($conexao, "SELECT * FROM address ORDER BY lastname ASC")
 or die(mysqli_error());
 Print "<table border cellpadding=10>";
 Print "<tr><th width=100>Nome:</th> " .
   "<th width=100>Sobrenome</th> " .
   "<th width=100>Telefone</th> " .
   "<th width=200>Email</th> " .
   "<th width=100 colspan=3>Administrar</th></tr>";
 Print "<td colspan=6 align=right> " .
   "<a href=" .$_SERVER['PHP_SELF']. "?mode=add>Adicionar Contatos</a></td>";
 while($info = mysqli_fetch_array( $data ))
 {
 Print "<tr><td>".$info['firstname'] . "</td> ";
 Print "<td>".$info['lastname'] . "</td> ";
 Print "<td>".$info['phone'] . "</td> ";
 Print "<td> <a href=mailto:".$info['email'] . ">" .$info['email'] . "</a></td>";
 Print "<td><a href=" .$_SERVER['PHP_SELF']. "?id=" . $info['id'] ."&lastname=" . $info['lastname'] . "&firstname=" . $info['firstname'] . "&phone=" . $info['phone'] ."&email=" . $info['email'] . "&mode=edit>Editar</a></td>";
 Print "<td><a href=" .$_SERVER['PHP_SELF']. "?id=" . $info['id'] ."&mode=remove>Remover</a></td></tr>";
 }
 Print "</table>";
?>
