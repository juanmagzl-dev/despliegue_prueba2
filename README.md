# Analizador de Texto

## Requisitos

- PHP 7.4 o superior
- Composer
- Xdebug (para la cobertura de código)

## Instalación

1. Clona el repositorio:
   ```
   git clone [URL_REPOSITORIO]
   ```

2. Instala las dependencias:
   ```
   composer install
   ```

3. Configura Xdebug para la cobertura de código:
   - Asegúrate de que Xdebug esté instalado. En XAMPP, se puede habilitar descomentando la línea `zend_extension=xdebug` en el archivo php.ini.
   - Copia las configuraciones de `xdebug.ini` a tu php.ini o carga este archivo desde tu php.ini.

## Tests

Para ejecutar los tests:

```
vendor/bin/phpunit
```

Para generar un informe de cobertura:

```
vendor/bin/phpunit --coverage-html coverage
```

## Git Hooks

Este proyecto utiliza un Git hook pre-push que verifica:
- Que todos los tests pasen
- Que la cobertura de código esté entre 80-90%

Si no se cumplen estas condiciones, no se permitirá hacer push al repositorio.

### Instalación manual del Git hook

Si el hook no está configurado automáticamente:

1. Asegúrate de que el archivo `.git/hooks/pre-push` tenga permisos de ejecución:
   ```
   chmod +x .git/hooks/pre-push
   ```

## Prácticas de desarrollo

- Mantén las buenas prácticas de uso de Git
- La cobertura de código debe estar entre 80-90%
- Testea cada parte del proyecto de forma independiente
- No omitas pruebas porque ya se han probado en una parte anterior 