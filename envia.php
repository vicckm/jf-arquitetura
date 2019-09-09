


<td>
   <?php 


echo 

include('conexao.php');
    
$sql = "SELECT * FROM servicos";

$busca = mysqli_query($con, $sql);

while($array = mysqli_fetch_array($busca)) {   

?>
    <tr><?php echo $array['titulo'] ?></tr>
    <br>
    <tr><?php echo $array['descricao'] ?></tr>
    <br>
    
    <?php } ?> 
</td>