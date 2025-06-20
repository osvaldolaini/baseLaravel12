<p align="center"><a href="https://github.com/osvaldolaini" target="_blank"><img src="https://avatars.githubusercontent.com/u/75580327?v=4" width="100" alt="Laravel Logo"></a></p>

## Versão Base

## 'Plugin Tailwind'

-npm i -D daisyui@latest
-plugins: [require("daisyui")],
-npm run build

## 'Portugues para o laravel (lucascudo/laravel-pt-br-localization)

-php artisan lang:publish'
-composer require lucascudo/laravel-pt-br-localization --dev
-php artisan vendor:publish --tag=laravel-pt-br-localization
//https://github.com/opcodesio/log-viewer
-composer require opcodesio/log-viewer
-php artisan log-viewer:publish

## 'Pacote LOG activitylog'

composer require spatie/laravel-activitylog
php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="activitylog-migrations"
php artisan migrate
php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="activitylog-config"

# Laravel + Livewire Starter Kit

## License

The Laravel + Livewire starter kit is open-sourced software licensed under the MIT license.
