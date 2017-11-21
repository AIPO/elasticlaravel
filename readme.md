##Install ElasticSearch to Ubuntu 160.4 LTS
https://www.elastic.co/guide/en/elasticsearch/reference/current/deb.html

Or use Terminal:

`sudo apt-get update`
`wget -qO - https://artifacts.elastic.co/GPG-KEY-elasticsearch | sudo apt-key add -`
`sudo apt-get install apt-transport-https`
`echo "deb https://artifacts.elastic.co/packages/6.x/apt stable main" | sudo tee -a /etc/apt/sources.list.d/elastic-6.x.list`
`sudo apt-get update && sudo apt-get install elasticsearch`
`sudo update-rc.d elasticsearch defaults 95 10`
`sudo -i service elasticsearch start`
Test your ElasticSearch at http://localhost:9200 
### For using this example add:
ELASTICSEARCH_INDEX=scout
ELASTICSEARCH_HOST=http://localhost:9200

to .env and set up MySQL connection in youe .env file.
###Install composer dependencies
`composer install`
###Run Account model migration with only 'name'.
`php artisan migrate`
###Fill Database with fake data
`php artisan db:seed`
###Run server
`php artisan serve`