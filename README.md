<p align="center">
    <img src="https://github.com/Hernandes-Silva/VOTG/blob/main/imgsGit/gif-votg.gif" width='80%'>
    <img src="https://github.com/Hernandes-Silva/VOTG/blob/main/imgsGit/git-votg2.gif" width="80%">
    
</p>
<p align="center">
</p>

# VOTG

O VOTG é um sistema para a votação do grêmio estudantil do IFRN Campus Caicó. Como as votações ainda estão sendo feitas em cedulas, esse sistema foi feito com intuito tirar as várias dificuldades que existem nesse modo de votação, criando-se assim um software para agilizar esse processo de votação e também da apuração dos resultados. 



## Pré-requisitos

 Para executar esse projeto é necessario ter instalado na sua maquina o [PHP 7](https://www.php.net/downloads) e o [Xampp](https://www.apachefriends.org/pt_br/index.html).

### Executando o sistema

```bash

# coloque o projeto na pasta htdocs do Xampp. Além disso lembre-se de colocar as dependencias de um projeto laravel como por exemplo a pasta vendor

#acesse a pasta do projeto com o terminal/cmd e de o comando:
$ composer install
 
#gere a api_key
$ php artisan key:generate

#faça as migrações do banco
$ php artisan migrate

#inicie o servidor apache no painel do Xampp e acesse: http://localhost/'nome da pasta do projeto'/public/



```

---
## Features
- Os usuários podem:
   - [x] Votar
   - [x] Ver os resultados
- os não usuários podem:
   - [x] Ver os resultado
   


## Construido com

* [Laravel](https://laravel.com/) - o framework web usado
* [MySQL](https://www.mysql.com/) - o banco de dados usado


## Authors

* [**Hernandes Matheus**](https://github.com/Hernandes-Silva) - *Desenvolvedor*
* [**Daniel Lucas**](https://github.com/Hernandes-Silva) - *Analista*
* [**Eduardo Alencar**](https://github.com/Hernandes-Silva) - *Designer*
* [**Marcela Lyzandra**](https://github.com/marcelalyzandra) - *Gerência*

## License

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE.md](LICENSE.md) para detalhes

