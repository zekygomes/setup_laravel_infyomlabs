<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Pré-requisitos

Necessita estar instalado:

- Composer
- VirtualBox última versão
- Vagrant última versão

## Passo-a-passo para rodar projeto

1. composer install
2. php vendor/bin/homestead make
2. vagrant up
3. cp .env.example .env
4. vagrant ssh
5. cd /vagrant/
7. php artisan key:generate
8. php artisan migrate --seed
9. configurar o hosts para homestead.test

## Comandos príncipais do InfyLobs

Comando para gerar scaffold generico:
- php artisan infyom:scaffold $MODEL_NAME --datatables=true

Comando para gerar scaffold atráves de arquivo json:
- php artisan infyom:scaffold $MODEL_NAME --fieldsFile=filename_from_model_schema_directory_OR_path_from_base_directory_OR_absolute_file_path --datatables=true

Para mais informações acesse a documentação:
- http://labs.infyom.com/laravelgenerator/docs/5.6/introduction

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
