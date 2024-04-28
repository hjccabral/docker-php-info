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
