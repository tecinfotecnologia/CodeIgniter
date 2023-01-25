<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
 </head>
 <body>
    <h1>Produtos</h1>

    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
        <thead>
            <tr>
                 <th>Código</th>
                 <th>Nome</th>
                 <th>Preço</th>
             </tr>
        </thead>
        <tbody>
        <?php
            foreach($produtos as $p){
             echo "<tr>".
                   "   <td>".$p->codigo."</td>".
                   "   <td>".$p->nome."</td>".
                   "   <td>".$p->preco."</td>".
                   "   </tr>";
             }
            
             
        ?>
        </tbody>
    </table>
</body>
</html>