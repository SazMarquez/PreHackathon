Proyecto: Sistema Web de Seguimiento a la Gestión Territorial
=============================================================

Descripción:
-------------
Este proyecto consiste en un sistema web desarrollado en PHP con arquitectura MVC y PostgreSQL, destinado al registro, consulta y análisis de visitas realizadas a centros escolares por parte del equipo de gestión territorial del Portal de Formación Docente.

Objetivos:
----------
- Facilitar el registro digital de visitas a centros escolares.
- Consolidar la información para análisis y toma de decisiones.
- Mostrar los datos en mapas interactivos.
- Permitir la generación de reportes y exportación de datos.

Tecnologías utilizadas:
-----------------------
- PHP (backend)
- HTML, CSS, JavaScript (frontend)
- PostgreSQL (base de datos)
- Arquitectura MVC
- Librerías externas: Leaflet.js (para mapas), FPDF o PhpSpreadsheet (para exportar reportes)

Estructura del proyecto:
-------------------------

/public/        → Archivos accesibles desde el navegador (index.php, CSS, JS)  
/config/        → Archivo de configuración general 
/pages/         → Paginas PHP especificas  
/includes/      → Archivos PHP reutilizables 
/uploads/       → Archivos subidos por los usuarios

Requisitos:
-----------
- Servidor web XAMPP con PHP 8.2
- PostgreSQL 12 o superior
- Composer (opcional)
- Navegador moderno (Chrome, Firefox)

Instalación:
------------
1. Clonar o descargar el repositorio en tu servidor web.
2. Crear una base de datos en PostgreSQL (nombre sugerido: gestion_territorial).
3. Importar el archivo SQL con la estructura (ubicado en /config o /docs).
4. Configurar la conexión en `/config/config.php`.
5. Asegúrate de que la carpeta `public/` sea la raíz del servidor (DocumentRoot).
6. Accede al sistema desde tu navegador: http://localhost/

Credenciales por defecto:
--------------------------
Usuario: admin  
Contraseña: admin123

Licencia:
---------
Este proyecto es de uso educativo y puede ser adaptado para fines institucionales del Ministerio de Educación, Ciencia y Tecnología.
Hackathon 2025

Autor / Equipo:
------
[Tu nombre][Institución donde estudias]
1-Jose Perez, Instituto Nacional Metropolitano 
2-
3-
