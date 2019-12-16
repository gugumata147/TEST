# TEST
  Para rodar este projeto e necessário possuir o php instalado em sua máquina com esta versão do PHP >= 7.3.0.
  https://windows.php.net/download#php-7.4. Pode baixar qualquer versão mais atual.
  Para instalar no Windows, você precisará baixar e extrair o arquivo php-7.3.3-nts-Win32=VC15-x64.zip. Em seguida, você deverá abrir o menu Iniciar e procurar por "Editar as variáveis de ambiente para a sua conta".
  Na janela que se abrirá, você procurará por "Path" e clicará em "Editar", exibindo uma lista de caminhos. Clicando em "Novo", você terá que adicionar o caminho da pasta onde acabou de extrair o arquivo zipado. O próximo passo é abrir o Prompt de Comandoe digitar o comando php -v para indicar a versão do PHP que está sendo utilizada. Isso confirmará que o PHP foi instalado com sucesso.
  Após a instalação do php, basta entrar na pasta teste com o cmd do windows ou terminal do linux e executar o comando 
(php artisan serve).


  Após escrever o comando php artisan serve. Entre no navegador chrome ou firefox e digite http://localhost:8000/. A porta pode estar diferente dependendo se já estiver em uso.
  
  Como utilizar a API http://localhost:8000/api/google/search/{ParametroDeBusca}, caso tenha espaço devera utilizar a mesma sintaxe do google exemplo parametro+de+busca. Ela retornara uma resposta 200 com uma lista json contendo paramêtros title e url.
