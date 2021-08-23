Laravel Database Translations
---
---

This package provides simple database implementation of Laravel' Loader interface used for translations
and a few helper methods that can be exploit to use translations stored in your DB.

### Installation
`require 4lexvav/laravel-db-translations`

Run migrations to create `db_translations` table:
```
php artisan vendor:publish --provider="Vav\Translation\DBTranslationServiceProvider" --tag=migrations
php artisan migrate
```

### Usage

Populate your `db_translations` table with records, so that you can use the helper functions below
to display translations.

```
__db('some.key', ['Placeholder' => 'value'])
```

```
trans_db('some.key', ['Placeholder' => 'value'])
```


```
trans_choice_db('some.key', count($array), ['Placeholder' => 'value'])
```
