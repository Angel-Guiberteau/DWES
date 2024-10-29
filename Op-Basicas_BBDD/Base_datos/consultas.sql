USE escuela;

-- 1. Seleccionar todos los alumnos

SELECT * FROM Alumnos;

-- 2. Seleccionar un alumno por su ID

SELECT * FROM Alumnos WHERE id = 1;

-- 3. Seleccionar alumnos por nombre

SELECT * FROM Alumnos WHERE nombre = 'Angel';

-- 4. Seleccionar alumnos por apellido

SELECT * FROM Alumnos WHERE apellido = 'Guiberteau';

-- 5. Seleccionar alumnos nacidos después de una fecha específica

SELECT * FROM Alumnos WHERE fecha_nacimiento > '2000-01-01';

-- 6. Seleccionar alumnos con un email específico

SELECT * FROM Alumnos WHERE email LIKE '%@example.com';

-- 7. Seleccionar alumnos cuyo nombre empieza con una letra específica

SELECT * FROM Alumnos WHERE nombre LIKE 'A%';

-- 8. Seleccionar alumnos cuyo apellido contiene una cadena específica

SELECT * FROM Alumnos WHERE apellido LIKE '%a%';

-- 9. Seleccionar alumnos ordenados por fecha de nacimiento

SELECT * FROM Alumnos ORDER BY fecha_nacimiento;

-- 10. Seleccionar alumnos ordenados por apellido en orden descendente

SELECT * FROM Alumnos ORDER BY apellido DESC;

-- 11. Contar el número de alumnos

SELECT COUNT(*) FROM Alumnos;

-- 12. MAXIMOS Y MINIMOS

SELECT MAX(id) AS Maximo
FROM Alumnos;

SELECT MIN(id) AS Minimo
FROM Alumnos;

-- 13. Con day, month y day

SELECT DAY(fecha_nacimiento) AS Dia,
       MONTH(fecha_nacimiento) AS Mes,
       YEAR(fecha_nacimiento) AS Anio
FROM Alumnos
WHERE id = 1;
