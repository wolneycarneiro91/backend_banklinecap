# DESAFIO TÉCNICO: Desenvolvedor PHP
Este projeto é parte de um desafio para vaga de desenvolvedor sênior php na Capgemini
## Executando o projeto
 
- Abra um terminal do windows (Power Shell, CMD ou Bash)
- Vá até a pasta raiz do projeto `cd caminho-do-projeto/banklinecap`
- Execute o comando `./start.sh`
 
Aguarde a instalação das dependências e inicialização do projeto.
 
Em seguida, o endereço do projeto será aberto automaticamente em um dos seus navegadores.
 
Caso a execução do script `./start.sh` não ocorra com sucesso, execute os seguintes comandos abaixo:
 
``composer install``
``php artisan config:cache && php artisan config:clear``
``php artisan route:clear``
``php artisan migrate --seed``
``php artisan serve``

Em seguida abra seu navegador no endereço indicado, na linha de comando para acessar a aplicação.