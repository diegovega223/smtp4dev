# smtp4dev
Para ejecutar el contenedor de **smtp4dev**, utiliza el siguiente comando:
```
sudo docker-compose up -d
```
- El servicio estará disponible en el puerto `3100`, así que puedes acceder a él en `http://localhost:3100/`.
- **smtp4dev** utiliza una base de datos **SQLite**, y la persistencia de datos se almacena en `/smtp4dev/database.db`.

Si vas a usar **smtp4dev** en un proyecto de Laravel, asegúrate de actualizar el archivo **.env** con la siguiente configuración:

```
MAIL_MAILER=smtp
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=correo@email.com
MAIL_FROM_NAME="Remitente"
```
## Dockercompose.yml

```
version: '3.8'
services:
  smtp4dev:
    container_name: smtp4dev
    image: rnwood/smtp4dev:latest
    ports:
      - "2525:25"
      - "3100:80"
    volumes:
      - ./smtp4dev-data:/smtp4dev

volumes:
  smtp4dev-data:
```
