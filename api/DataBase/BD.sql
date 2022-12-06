DROP DATABASE Verificador;
CREATE DATABASE sistema_verificador;
USE sistema_verificador;

CREATE TABLE Productos(
id_producto INT UNSIGNED NOT NULL UNIQUE,
nombre_producto VARCHAR(100) NOT NULL,
precio_producto FLOAT(12,2) UNSIGNED NOT NULL,
imagen_producto VARCHAR(255)
);

INSERT INTO Productos() Values(1,   "Call Of Duty",    69.62,    "callofduty.jpg");
INSERT INTO Productos() Values(2,   "Crash Bandicoot",         59.62,    "crash.jpg");
INSERT INTO Productos() Values(3,   "Destiny",           39.61,    "destiny.jpg");
INSERT INTO Productos() Values(4,   "Dragon Ball Kakarot",       49.59,    "Dragonball.jpg");
INSERT INTO Productos() Values(5,   "Final Fantasy 14",            49.54,    "ff14.jpg");
INSERT INTO Productos() Values(6,   "God Of War Ragnarok",     49.54,    "GODR.jpg");
INSERT INTO Productos() Values(7,   "Resident Evil 3",              48.54,    "re3.jpg");
INSERT INTO Productos() Values(8,   "Resident Evil 8",         59.54,    "residen8.jpg");
INSERT INTO Productos() Values(9,   "Tekken 7",            48.54,     "tekken.jpg");
INSERT INTO Productos() Values(10,  "Uncharted",        69.54,    "uncharted.jpg");