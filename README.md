# Biersal(notreally)

having colletion of beers and bars

## Description

Small implementation of beers and bars in map created during the [Modern Web Application II](https://harbour.space/computer-science/courses/modern-web-application-2-431) course 

## Getting Started

### Installing

Clone the repository
```
git clone https://github.com/mc-pixel/notreally.git
```

Go into the app directory & install composer dependencies

```
composer install
```

Copy <code>.env.example</code> to <code>.env</code> and make sure to set the application name, application url and database parameters.

Set the application key

```
php artisan key:generate
```

Migrate so the tables are created

```
php artisan migrate
```

If wanted, you can seed the app with some test data

```
php artisan db:seed
```

Install npm dependencies and compile assets

```
npm install && npm run dev
```

## Authors

mc-pixel
- github: [mc-pixel] (https://github.com/mc-pixel)

## Help
If somethings not clear or theres a problem feel free to contactme or file a github issue in case you found a bug or something that can be upgraded.

## Version History

* 0.1
    * Initial Release (tba)

## License

This project is licensed under the [NAME HERE] License - see the LICENSE.md file for details

## Acknowledgments

Thanks you to Nico Deblauwe for teaching us and being patient 
