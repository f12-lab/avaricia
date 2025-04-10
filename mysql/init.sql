USE banco;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50),
    password VARCHAR(50),
    nombre_completo VARCHAR(100),
    cuenta VARCHAR(20),
    saldo DECIMAL(10,2)
);

INSERT INTO usuarios (usuario, password, nombre_completo, cuenta, saldo) 
VALUES ('admin', 'admin123', 'Dante Alighieri', 'ES76207700240031', 6666.66);

INSERT INTO usuarios (usuario, password, nombre_completo, cuenta, saldo) 
VALUES ('user', 'password', 'Dama Tentadora', 'ES93210004184502', 1243.82);
