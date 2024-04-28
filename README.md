# docker-php-info

Simple container for test purposes to show above info about enviorment.

- Container Name
- Server IP
- Client IP
- User Agent
- Country IP Info
- System Operation
- Webserver
- PHP Version

To build:

```
docker image build -t <name>:<tag> .
``` 

To run:

```
docker run -d -p 80:80 <name>:<tag>
```

Return in a simple cURL request:

```html
ext@DESKTOP-1A6NC2F:~/$ curl http://localhost
<span style="font-size: 18px;"><b>INFO:</span><br></b>Container Name:<b> fa9bf0b7cad7
</b><br>Container IP:<b> 172.17.0.4
</b><br>Client IP:<b> 172.17.0.1
</b><br>User agent:<b> curl/7.81.0
</b><br>Sorry. Does not possible to find geolocation info.
</b><br>Operarion System not identified
Webserver:<b> Apache/2.4.59 (Debian)
</b><br>PHP Version:<b> 8.3.7RC1</b><br>
```
