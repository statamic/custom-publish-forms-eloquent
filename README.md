# Custom Publish Forms + Eloquent
> An example of using [Custom Publish forms](https://docs.statamic.com/addons/publish-forms#main) powered by Eloquent models in a Statamic addon.

## Set up the database

Create a database and add the credentials to your `.env` file.

```
DB_HOST=localhost
DB_DATABASE=statamic-eloquent
DB_USERNAME=root
DB_PASSWORD=
```

You would then create your migrations, like any Laravel install.
[We have included one in this repo](site/database/migrations/2018_05_31_200716_create_products_table.php).

```
php please migrate
```


## Sidebar Navigation

We have a [Listener file](site/addons/Products/ProductsListener.php) that takes care of adding an item to the navigation. Click the `Products` item in the sidebar to view the listing.


## Fieldset

When creating or editing a product, the publish component will be rendered according to the provided [product fieldset](site/settings/fieldsets/product.yaml).

To add more fields, you should create a migration (or update the original one) to add the columns to the table, and also add fields to the fieldset so they are rendered on the publish page.


## Validation

This repo assumes you want to use validation defined as in the fieldset.

If you want, you may bypass that entirely and write your own validator. Be aware that the fields will be submitted in a nested `fields` array. You will need to do something like this:

``` php
Validator::make($request->all(), [
    'fields.title' => 'required'
]);
```


## Front-end

The `/products` route is a [page](site/content/pages/6.products/index.md) that loads a [template](site/themes/redwood/templates/products/index.html) containing a [simple custom tag](site/addons/Products/ProductsTags.php#L9-L14).

The `/products/{slug}` route is a [wildcard route](site/settings/routes.yaml#L24) that loads a [template](site/themes/redwood/templates/products/product.html) with another [simple custom tag](site/addons/Products/ProductsTags.php#L16-L21).
