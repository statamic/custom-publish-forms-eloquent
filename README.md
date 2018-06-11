# Statamic ❤️ Eloquent

Create a database and add the credentials to your `.env` file.

```
DB_HOST=localhost
DB_DATABASE=statamic-eloquent
DB_USERNAME=root
DB_PASSWORD=
```

You would then create your migrations, like any Laravel install.
[We have included one in this repo](site/database/migrations/2018_05_31_200716_create_products_table).

```
php please migrate
```

We have a [Listener file](site/addons/Products/ProductsListener.php) that takes care of adding an item to the navigation. Click the `Products` item in the sidebar to view the listing.
