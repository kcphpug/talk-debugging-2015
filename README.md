# Modern Debugging in PHP - 2015
## Presented to Kansas City's PHP User Group
### April 1, 2015

#### Pre-rendered slides
Because this presentation was a mix of content and running examples, I'll need to do some
work to generate a "slidedeck".  When I do I'll post it here and to the comments section on our meetup.

####Slide system uses:
* npm
* php 5.4+
* composer
* reveal.js
* lmtm/prez
* slim (php)

####To Start Presentation:
php / slim backend
````bash
cd php-example/public
composer install
php -S 127.0.0.1:8888
````

prez/reveal front-end
````bash
npm install -g prez
prez --server --watch
````
Code and markdown may be updated to easily update slides.
