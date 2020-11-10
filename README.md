#Tailwind install instructions and example login design for Laravel 8

##Installation 

- npm install tailwindcss --save-dev
- npm install 
- npx tailwindcss init

Add following to resources/css/app.css

```
@import "tailwindcss/base";
@import "tailwindcss/components";
@import "tailwindcss/utilities";
```

Add following to webpack.mix.js

```
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ]);
```

To limit size of compiled app.css configure purge  property in tailwind.config.js

```
  purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php', './resources/views/**/*.vue'],
```

- npm run dev (compile for developement)
- npm run prod (compile for production)
- npm run watch & php artisan serve


