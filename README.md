# Dev_php

Este projeto foi desenvolvido em PHP, utilizando o Visual Studio Code como editor de código e o XAMPP para configurar um servidor local e realizar testes nas páginas. O banco de dados foi criado em MySQL, permitindo o armazenamento e gerenciamento eficiente das informações necessárias para o funcionamento do sistema.

Para testar este projeto, os envolvidos no teste devem seguir os seguintes passos detalhados para garantir que o ambiente esteja configurado corretamente:

Instalação do XAMPP : Certifique-se de que o XAMPP está instalado na máquina de teste. O XAMPP é uma ferramenta que fornece um servidor Apache, além de suporte ao MySQL, permitindo que você execute e teste aplicativos web localmente.

Ativação do Apache e MySQL : Abra o painel de controle do XAMPP e ative os módulos Apache e MySQL . Isso é essencial para criar um servidor local e permitir que o PHP se comunique com o banco de dados.

Preparação do Banco de Dados :

Extraia a pasta sistema_loja para o diretório do MySQL no XAMPP. Esse diretório normalmente fica dentro da pasta xampp/mysql/, que contém o subdiretório data .
Dentro da pasta data , coloque o banco de dados necessário para o funcionamento do projeto.

Configuração do Projeto :

Após configurar o banco de dados, extraia a pasta do projeto Dev_php para o diretório htdocs/que está localizado na pasta de instalação do XAMPP (geralmente em xampp/htdocs/). Este diretório é onde os arquivos PHP precisam ser colocados para serem acessados ​​através do servidor Apache.

Acesso ao Projeto no Navegador :

Abra o navegador e na barra de pesquisa, digite o seguinte caminho: localhost/Dev_php/. Isso fará com que o navegador se conecte ao servidor local do XAMPP e carregue seu projeto PHP.

certifique-se de que o servidor Apache está rodando na porta 80 (padrão), que é uma porta usada para acessar o projeto localmente.
Ao seguir essas etapas, os testadores serão capazes de acessar e testar o sistema corretamente no ambiente de desenvolvimento local. Lembre-se de que o XAMPP deve estar configurado corretamente, com Apache e MySQL em funcionamento, para que o sistema e o banco de dados se comuniquem sem problemas.