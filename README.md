<p align="center"><a href="#" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## How To Use This Repo

<ol>
    <li>Clone This Repo using following Command</li>
    <p align="center"><strong>git clone zuhaibranaa/blogApp</strong></p>
    <li>cd into project directory</li>
    <li>Install Dependencies using Following Command</li>
    <p align="center"><strong>composer install && npm install</strong></p>
    <li>Create a copy of your .env file using</li>
    <p align="center"><strong>cp .env.example .env</strong></p>
    <li>Generate an app encryption key</li>
    <p align="center"><strong>php artisan key:generate</strong></p>
    <li>
    In the .env file, add database information to allow Laravel to connect to the database
    </li>
    <p align="center"><strong>In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. </strong></p>
    <li>Migrate the database using</li>
    <p align="center"><strong>php artisan migrate</strong></p>
</ol>

## Thanks For Using This Project

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
