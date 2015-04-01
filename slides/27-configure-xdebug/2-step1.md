Step 1. Register xDebug and settings with PHP
```bash
apt-get install php5-xdebug; # download xdebug
vim /etc/php/cli/conf.d/20-xdebug.ini # configure xdebug
```
```
zend_extension=xdebug.so
xdebug.remote_enable=1
xdebug.remote_port=9900
xdebug.profiler_enable=1
```