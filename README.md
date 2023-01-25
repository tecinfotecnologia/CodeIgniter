# CodeIgniter

# Codigo simples de consulta de produtos no banco de dados Mysql e CodeIgniter.

# AMBIENTE
UBUNTU=20.04
MYSQL=8.0


# CONTROLLERS
produtos.php

# MODELS
ProdutosModel.php

# VIEW 
#    > PRODUTOS
       lista_tabela.php
       lista.php

# MYSQL > 
#       database.php
        'hostname' => 'localhost:3366',
        'username' => 'deploy',
        'password' => '',
        'database' => 'db_aula',
        
#       autoload.php      
        $autoload['libraries'] = array('database','session');