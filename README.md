zendesk
========

A Symfony project created on September 17, 2016, 1:09 pm.

Symfony v3.1

php modules needed other than required by symfony installation
    - pdo_sqlite

run `php bin/console server:run`

all links on my answers are on `http://127.0.0.1:8000`

database is sqlite (for simplicity) and is in app/data/olympics.sqlitedb
    - to have a fresh db you can delete the file and then
      run `php bin/console doctrine:schema:update --force` and then
      run `php bin/console doctrine:fixtures:load`
    - data for olympic games is pre-populated. Feel free to add new
      one in src/AppBundle/DataFixtures/ORM
    - run `php bin/console doctrine:fixtures:load` if
      you want to refesh the data especially when you add new
      entries in the fixtures

-krain143

