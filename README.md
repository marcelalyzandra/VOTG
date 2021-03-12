<p align="center">
    <img src="https://github.com/Hernandes-Silva/VOTG/blob/main/imgsGit/gif-votg.gif">
</p>

# VOTG

O VOTG é um sistema para a votação do grêmio estudantil do IFRN Campus Caicó. Como as votações ainda estão sendo feitas em cedulas, esse sistema foi feito com intuito tirar as várias dificuldades que existem nesse modo de votação, criando-se assim um software para agilizar esse processo de votação e também da apuração dos resultados. 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.


### Pré-requisitos

 Para executar esse projeto é necessario ter instalado na sua maquina o [PHP 7](https://www.php.net/downloads) e o [Xampp](https://www.apachefriends.org/pt_br/index.html).

#### Executando o sistema

```bash

# coloque o projeto na pasta htdocs do Xampp. Além disso lembre-se de colocar as dependencias de um projeto laravel como por exemplo a pasta vendor

#acesse a pasta do projeto com o terminal/cmd e de o comando:
$ composer install
 
#crie o arquivo .env com o conteúdo do arquivvo .env.exemple na pasta raiz do projeto e configure o banco de dados

#gere a api_key
$ php artisan key:generate

#faça as migrações do banco
$ php artisan migrate

#inicie o servidor apache no painel do Xampp e acesse: http://localhost/'nome da pasta do projeto'/public/



```

---

## Contruido com

* [Laravel](https://laravel.com/) - o framework web usado
* [MySQL](https://www.mysql.com/) - o banco de dados usado


## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc
