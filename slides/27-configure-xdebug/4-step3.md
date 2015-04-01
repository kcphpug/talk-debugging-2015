Step 3: Make some Bookmarklets
https://www.jetbrains.com/phpstorm/marklets/

Start Debug
```
javascript:(
/** @version 0.5.2 */
    function() {
        document.cookie='XDEBUG_SESSION='+'PHPSTORM'+';path=/;';
    }
)()
```
Stop Debug
```
javascript:(
/** @version 0.5.2 */
    function() {
        document.cookie='XDEBUG_SESSION='+''
        +';expires=Mon, 05 Jul 2000 00:00:00 GMT;path=/;';
    }
)()
```