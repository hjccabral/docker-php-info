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

```bash
ext@DESKTOP-1A6NC2F:~/docker-php-info$ curl --no-progress-meter http://localhost | html2text
INFO:
Container Name:fa9bf0b7cad7
Container IP:172.17.0.4
Client IP:172.17.0.1
User agent:curl/7.81.0
Sorry. Does not possible to find geolocation info.
Operarion System not identified Webserver:Apache/2.4.59 (Debian)
PHP Version:8.3.7RC1
```
