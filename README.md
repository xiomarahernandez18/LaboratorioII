# LaboratorioII
Este repositorio es para enttretar el lab 2

UNIVERSIDAD GERRADO BARRIOS
ACTIVIDAD EVALIUADA DE PROGRAMACION IV

INTEGRANTES:
MARIA ELENA MARTINEZ MARTINEZ
CARMEN XIOMARA HERNANDEZ CASTILLO
GENESIS MARIBEL CRUZ ORTIZ

_______________________________________________
                   PREGUNTAS
______________________________________________
1. ¿De qué forma manejaste el login de usuarios?
El login se manejó utilizando consultas SQL con sentencias preparadas y el uso de sesiones en PHP.

Al ingresar usuario y contraseña, se verifica contra la tabla usuarios.

La contraseña se almacena encriptada con password_hash y se valida con password_verify.

Si los datos son correctos, se crea una sesión que mantiene al usuario autenticado mientras navega.

Justificación: Este método garantiza seguridad contra inyección SQL y persistencia de la autenticación, evitando que el usuario tenga que iniciar sesión en cada página.

2. ¿Por qué es necesario para las aplicaciones web utilizar bases de datos en lugar de variables?
Las bases de datos permiten persistencia, escalabilidad y organización de la información.

Las variables en PHP son temporales y se eliminan al cerrar la ejecución del script.

Una base de datos guarda la información de manera permanente y estructurada, accesible en cualquier momento.

Justificación: Sin bases de datos, los datos de usuarios y registros se perderían al cerrar la página, lo que haría imposible mantener sistemas como login, historial o reportes.

3. ¿En qué casos sería mejor utilizar bases de datos para su solución y en cuáles utilizar otro tipo de datos temporales como cookies o sesiones?
Bases de datos:

Cuando se necesita almacenar información permanente (usuarios, productos, registros, historial).

Ejemplo: credenciales de login, datos de clientes, inventarios.

Cookies o sesiones:

Cuando se requiere información temporal o de contexto.

Ejemplo: mantener al usuario logueado mientras navega, guardar preferencias de idioma, carrito de compras antes de confirmar.

Justificación: Bases de datos garantizan permanencia y consistencia; cookies/sesiones son útiles para personalización y datos que no necesitan guardarse de forma definitiva.

4. Describa brevemente sus tablas y los tipos de datos utilizados en cada campo; justifique la elección del tipo de dato para cada uno.
Tabla usuarios:

id → INT AUTO_INCREMENT (identificador único).

usuario → VARCHAR(50) (texto corto, nombre de usuario).

contraseña → VARCHAR(255) (almacena hash encriptado, requiere espacio suficiente).

Tabla datos:

id → INT AUTO_INCREMENT (identificador único).

nombre → VARCHAR(100) (texto, admite nombres completos).

correo → VARCHAR(100) (texto, formato de email).

edad → INT (número entero, adecuado para edades).

Justificación: Se eligieron tipos de datos que garantizan eficiencia y coherencia: enteros para identificadores y edades, cadenas de longitud variable para texto y correos, y un campo amplio para contraseñas encriptadas.
