-- Insertar datos en la tabla Cliente
INSERT INTO Cliente (Codcliente, Nit, Nombre, Telefono, Direccion, Correo, Compras, NoTransacciones, CanalPreferido, Empresa) 
VALUES (122224133, 1234567890, 'Kevin', 3203919392, 'Cl36#56a-86', 'kevin10391983@gmail.com', 'arroz,huevo', 1, 'Bancolombia', 'ReyPAN');

-- Insertar datos en la tabla Factura
INSERT INTO Factura (NoFactura, Fecha, Codcliente, TotalFacturar, Caducidad, DireccionEmitida, MetodoPago, Iva, Referencias) 
VALUES (13233534, '2012-03-25', 1224133, 300.23, '2024-03-24', 'kevin20@gmail.com', 'Tarjeta', 19, 'Carlitos');

-- Insertar datos en la tabla Proveedor1
INSERT INTO Proveedor1 (CodProvedor, Nit, ProveedorN, Telefono, Direccion, NombreProv, ContactoEmrg, ContactoFamiliar, Horarios, Sugerencias) 
VALUES (1234233, 1234567890, 'Proveedor1', 3203919392, 'Cl36#56a-86', 'NombreProveedor1', 1234567890, 9876543210, '2024-03-05', 'SugerenciaProveedor1');

-- Insertar datos en la tabla Producto
INSERT INTO Producto (CodProducto, Descripcion, CodProvedor, PrecioCosto, Preventa, Estado, Cantidadreq, Tamaño, FechaVenc, Adiciones) 
VALUES (1, 'Producto1', 1234233, 100, 150, 'Activo', 10, 'Mediano', '2025-01-01', 'AdicionProducto1');

-- Insertar datos en la tabla Detalles_de_Factura
INSERT INTO Detalles_de_Factura (id, Fecha, NoFactura, CodProducto, CantidadPedida, PrecioTotal, UnidadesAsig, SaldoAnterior, SaldoActual, Puntos) 
VALUES (1, '2012-03-25', 13233534, 1, 2, 200.46, 2, 0.00, 200.46, 10);
