# Homeopatía GuiGar

Homeopatía GuiGar es una applicación web que permite organizar ventas de productos de belleza y cuidado personal. Se pretende que sea un punto de venta online, donde el dueño (o dueños) puedan añadir nuevos productos y los clientes puedan observar dichos productos y generar órdenes.

---
## Instrucciones de instalación 
1. Clonar proyecto `git clone https://github.com/raaul19/homeopatiaguigar.git `
2. Cambiarse a directorio `cd homeopatiaguigar` 
3. Instalar dependiencias mediante composer: `composer install`
4. Crear archivo de variables de entorno: `cp .env.example .env`
5. Crear llave: `php artisan key:generate`
6. Configurar nombre de base de datos en .env
7. Ejecutar las migraciones: `php artisan migrate`
8. Ejectuar seeders `php artisan migrate:fresh --seed` // Solo se añaden categorías

### Extra

Adicionalmente, se pueden ejecutar los seeders para testing: `php artisan db:seed --class=TestsSeeder`.

Se cargan 3 Usuarios de tipo 'Admin' y 50 usuarios de tipo 'Client'; además, se crean 20 productos, y las 5 categorías.

---

## Desarrollo
- Implementado con Laravel (v8)
- Desarrollado por: Raúl García

*Derechos reservados.*
