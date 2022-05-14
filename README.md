
PT-BR(README-PT-BR.md)
## Description
- api in laravel to get images, videos, likes and descriptions of Instagram user POST

## Requirements
- Docker (https://www.docker.com/)
- Docker Compose (https://docs.docker.com/compose/install/)

## Ready environment system
- Clone repository
- Install docker
- Install docker-compose
- BotInstagramGetPosts/src/.env.example modify SESSIONIDINSTAGRAM with your instagram sessionid
    - to get the sessionid go to instagram log in and press F12 in the menu click on Application select Cookies and copy the sessionid value

## Run

```cd BotInstagramGetPosts && docker-compose up --build -d```

## Routes
```http://127.0.0.1:8000/api/insta/limit/$limit```
    - $limit: number of posts to get

```http://127.0.0.1:8000/api/insta/all``

```http://localhost:8000/api/checkpoint```
    - Checkpoint to check if the api is working 

## Documentation
 -  (https://documenter.getpostman.com/view/6339482/UyxjEkox)