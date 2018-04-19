CREATE TABLE `products` (
`id` int(11) NOT NULL AUTO_INCREMENT, 
  
`name` varchar(100) NOT NULL, 
  
`image` varchar(100) NOT NULL,  
  
`price` float NOT NULL, 
  
PRIMARY KEY (id) 
);



INSERT INTO `products` 
(`id`, `name`, `price`, `image`) 
VALUES
(1, 'MARGHERITA', 90, 'M.jpg'),
(2, 'DOUBLE CHEESE MARGHERITA', 125, 'DCM.jpg'),
(3, 'FARM HOUSE', 180, 'FH.jpg'),
(4, 'PEPPY PANEER', 270, 'PP.jpg'),
(6,'MEXICAN GREEN WAVE',230,'MGV.jpg'),
(7,'DELUXE VEGGIE',230,'DV.jpg'),
(8,'5 PEPPER',230,'5P.jpg'),
(9,'VEG EXTRAVAGANZA',200,'VE.jpg'),
(10,'CHEESE N CORN',210,'CNC.jpg'),
(11,'PANEER MAKHANI',220,'PM.jpg'),
(12,'VEGGIE PARADISE',500,'VP.jpg'),
(13,'FRESH VEGGIE',150,'FV.jpg'),
(14,'PANEER MAKHANI',220,'PM.jpg'),
(15,'VEGGIE PARADISE',500,'VP.jpg'),
(16,'FRESH VEGGIE',150,'FV.jpg'),
(17,'COKE',55,'C.jpg')
;



INSERT INTO `products` (`id`, `name`, `price`, `image`) 
VALUES
(5, 'AMD RYZEN 7 1700 8-Core 3.0 GHz Socket AM4 CPU', 299.99, 'ryzen7.jpg'),

(6, 'NZXT H700i Mid Tower Chassis Tempered Glass Case', 199.99, 'nzxth700i.jpg'),

(7, 'Razer Blackwidow Gaming  Mechanical Keyboard', 109.99, 'razer-blackwidow.jpg'),

(8, 'Samsung 850EVO BULK Solid State Drive', 108.45, 'samsung-850evo.jpg');