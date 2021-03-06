# Portabilis

[![Build Status](https://travis-ci.org/mrprompt/exemplo-portabilis.svg?branch=master)](https://travis-ci.org/mrprompt/exemplo-portabilis)

Projeto Teste com Symfony 4.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/mrprompt/portabilis/tree/master)

## Install

1 - Install dependencies

```console
composer.phar install
```

2 - Create database

```console
./bin/console doctrine:schema:create
```

## Running

```console
./bin/console server:start
```

## Stoping

```console
./bin/console server:stop
```

## Importing Courses

```console
./bin/console app:import:courses content/courses_file.csv
```

## Importing Students

```console
./bin/console app:import:students content/students_file.csv
```

## Testing

1 - Create database structure

```console
DATABASE_URL="sqlite:///%kernel.project_dir%/var/test.db" ./bin/console doctrine:schema:create
```

2 - Run tests

```console
./bin/phpunit
```
