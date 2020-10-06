# MVC-framework
**This MVC framework is based on the following YouTube playlist. Please watch it.**

https://www.youtube.com/watch?v=9pa_PV2LUlw&ab_channel=TheCodingTrain

## Important !
1. Fork the repository.
1. Make sure that the root directory name matches with **URL** in **config/paths.php**
```
   define('URL', 'http://localhost/mvc-framework/');
```
1. Change database settings in **config/database **.
``` 
    define('DB_TYPE', 'mysql');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'mvc');
    define('DB_USER', 'ddhash');
    define('DB_PASS', '1234');
```
## SQL Tables

```
    users
    ------

    Field       Type            Null        Key     Default     Extra
    ------------------------------------------------------------------------
    id	        int(11)	        NO	    PRI	    NULL	auto_increment	
    login	varchar(25)	NO		    NULL	
    password	varchar(32)	NO		    NULL

    data
    -----

    Field       Type            Null        Key     Default     Extra
    ------------------------------------------------------------------------

    id	    int(11)	            NO	        PRI	    NULL     	auto_increment	
    text	varchar(255)	    NO		            NULL
		

    
		
```
