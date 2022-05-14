## Descrição
- Api em Laravel para pegar imagens, videos, likes e descrições de usuários do Instagram

## Requisitos
- Docker (https://www.docker.com/)
- Docker Compose (https://docs.docker.com/compose/install/)

## Preparando ambiente
- Clonar repositório
- Instalar docker
- Instalar docker-compose
- BotInstagramGetPosts/src/.env.example modificar SESSIONIDINSTAGRAM com o seu sessionid
    - para pegar o sessionid acesse o instagram logue em sua conta e pressione F12 no menu clique em Application selecione a opção Cookies e copie o sessionid value

## Executar
``` cd BotInstagramGetPosts && docker-compose up --build -d```

## Rotas
```http://127.0.0.1:8000/api/insta/limit/$limit```
    - $limit: número de posts a serem obtidos

```http://127.0.0.1:8000/api/insta/all``

```http://localhost:8000/api/checkpoint```
    - Checkpoint para verificar se a api está funcionando

## Documentação
- (https://documenter.getpostman.com/view/6339482/UyxjEkox)