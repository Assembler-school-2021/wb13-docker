# wb13-docker

Instalar docker según el repo oficial:
https://docs.docker.com/engine/install/debian/



> Ejercicio: Usando un one liner de bash , encuentra una forma de parar todos los contenedores.

	docker container stop $(docker ps -aq)

> Ejercicio: Usando un one liner de bash , encuentra una forma de borrar todos los contenedores.

	docker container prune (borra todos los contenedores parados)

> Ejercicio: En el servidor que estamos usando para practicar docker, crea una carpeta e coloca un archivo index.html con algun contenido para hacer pruebas. A continuación ejecuta un contenedor nginx con ese punto de montaje bindeando al puerto 8080 del host. Comprueba que todo funciona. Una vez funcione todo, entra dentro del contenedor y comprueba que NO se puede escribir en el path bindeado del host.

Usamos la documentación en HTML de nano de ejemplo para montar la carpeta:

	docker container run --name some-nginx -v /usr/share/doc/nano:/usr/share/nginx/html:ro -p 8080:80 -d nginx

Y si accedemos a http://188.34.203.66:8080/nano.html veremos la documentación de nano


> Pregunta 1 : En el Dockerfile que hemos hecho sobra calaramente un layer. Limpia el archivo de acuerdo las buenas prácticas.

Podemos meter el apt update e install en un layer:
```
  RUN apt-get update -y && apt-get install -y python3-pip python3-dev build-essential
```
> Pregunta 2 : Crea otro servidor cx11, instala docker en él y baja la imagen que has subido y prueba que se ejecuta correctamente.


> Pregunta 3 : Crea una imagen custom de wordpress usando la imagen basal de debian. La carpeta con los datos del mysql será una carpeta externa.

