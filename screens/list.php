<h1> Listar Contatos </h1>
<div class="table-fluid">
<table class="table rounded" style="background-color: #FFF">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <? 
    foreach($contacts as $index => $contact) {
        $parts = explode(';', $contact);

        echo "<tr>";
        echo "<td> </td>";
        foreach($parts as $part) {
        
            echo "<td>{$part}</td>";
        }
        echo "<td> <a href='/remove?id={$index}' class='btn btn-danger btn-sm'>Excluir</a></td>";
        echo "<td> <a href='/update?id={$index}' class='btn btn-warning btn-sm'>Editar</a></td>";
        echo "</tr>";
    };
    
    ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div>