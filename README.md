# Material Admin

Material Admin base package offer a blank admin panel using material [TIM adminPanel](https://demos.creative-tim.com/material-dashboard/examples/dashboard.html)

### Made by TIM Creative
![Product Gif](https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-dashboard-html/material-dashboard-free.gif)

## Installation

Into your laravel aplication folder run:

```bash
composer require atiladanvi/laravel-material-admin
```

## Publish files

```bash
php artisan vendor:publish --provider="MaterialAdmin\MaterialAdminServiceProvider"
```

### Finish
You can customize the route prefix and middleware default in `config/material.php
`
#### Customize views:
If you published the vendor files you can extend the main template in your views:
`/resource/views/vendor/material/index.blade.php`
## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
