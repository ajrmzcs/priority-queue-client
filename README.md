## Priority Queue Project Client

Small and simple client to send POST requests to priority-queue app in [http://localhost:8000](http://localhost:8000) 

## Installation steps
1. Clone repository
2. cd to project folder and run: 
```
composer install
```
3. copy .env.example to .env
4. Run:
```
php artisan key:generate
```
4. Serve in local environment on port *9000*
```
php artisan serve --port=9000
```
5. open this url with a browser:
[http://localhost:9000/sendpriorityjobs](http://localhost:9000/sendpriorityjobs)
6. In case you want to change how post calls are made you can adapt this code to your needs on `sendpriorityjobs` route on `routes/web.php`

