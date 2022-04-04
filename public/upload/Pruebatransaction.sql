start transaction;

INSERT INTO ventas VALUES ('', 101500, 5, 47000, 102.900, '2022-02-28', 1006, 'Efectivo');

INSERT INTO ventas VALUES ('', 101800, 2, 45000, 90.000, '2022-02-29', 1006, 'PSE');

SAVEPOINT save1;

INSERT INTO ventas VALUES ('', 101800, 2, 45000, 90.000, '2022-02-29', 1006, 'Tarjeta');

UPDATE TipoPago SET 'PSE' FROM ventas WHERE iDVentas = 1;

SAVEPOINT save2;

INSERT INTO ventas VALUES ('', 101200, 4, 37500, 150.000, '2022-02-29', 1006, 'Efectivo');

UPDATE cantidad set 7 from ventas WHERE iDVentas = 2;

SAVEPOINT save3;

ROLLBACK to save2;