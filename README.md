# Tema Kadima
> “O espaço entre a teoria e a prática não é tão grande como é, a teoria na prática.”

<img style="height: 450px; width: 100%; object-fit: contain" src="https://raw.githubusercontent.com/Kadima-Comp/wp-kadima-theme/master/kadimatheme/screenshot.png">

## Ambiente de desenvolvimento
O uso do docker é opcional, porém irá facilitar muito o desenvolvimento.

* [Docker](https://www.docker.com/) - Criação de containers
* [docker-compose](https://docs.docker.com/compose/) - Orquestração de containers
* [git](https://git-scm.com/) - Motivos obvios

**Checando a dependências:**
```sh
$ docker -v
Docker version 18.09.5, build e8ff056

$ docker-compose --version
docker-compose version 1.23.1, build b02f1306

$ git --version
git version 2.20.1
```

## Setup do Projeto
Primeiro é necessário realizar um clone desse repositório.

```sh
$ git clone https://github.com/Kadima-Comp/wp-kadima-theme.git
```

Após o clone realizaremos o build de nossas imagens:

```sh
$ cd wp-kadima-theme
$ docker-compose up -d
```
**Observações:**
- O comando **'up'** será sempre utilizado para levantar os containers, porém caso seja o primeiro uso primeiro o docker realizara o download das dependências, em seguida o build das imagens e só então os containers serão levantados.
- A flag **'-d'** serve para que os containers sejam rodados em background, caso ela não seja passada seu terminal ficará preso nesse processo, e caso o mesmo seja fechado os containers cairão.
- O Wordpress poderá ser acessado pela url **http://localhost:8000**
- O PhpMyAdmin poderá ser acessado pela url **http://localhost:8080**
- A senha de root no mysql é **root**

Para listar os containers que estão levantados utilize:

```sh
$ docker ps
```

Para derrubar containers que estão rodando em background utilize:

```sh
$ docker-compose down
```
**Observações:**
- Você pode passar a flag **"--volumes"**, para realizar um reset

