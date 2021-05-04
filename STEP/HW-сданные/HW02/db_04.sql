INSERT INTO `brand` (`title`, `img`, `description`)
VALUES 
('ASUS','images/asus.jpg','ASUS'),
('ACER','images/acer.jpg','ACER'),
('Lenovo','images/lenovo.jpg','Lenovo'),
('Intel','images/intel.jpg','Intel'),
('Samsung','images/samsung.jpg','Samsung');
INSERT INTO  `type_products` (`title`, `img`, `description`)
VALUES 
('PC','images/pc.jpg','Персональные компьютеры'),
('MB','images/mb.jpg','Материнские платы'),
('VC','images/vc.jpg','Видео карты'),
('MC','images/mc.jpg','Карты памяти'),
('CPU','images/cpu.jpg','Процессоры'),
('Phones','images/mp.jpg','Мобильные телефоны');
INSERT INTO  `categories` (`title`,`keywords`,`description` )
VALUES 
('PC','компьютеры','Персональные компьютеры в сборе'),
('Notebook','Ноутбуки','Ноутбуки лаптопы'),
('Components','Комплектрующие','Комплектующие запчасти'),
('Mobile', 'Мобильные устройства', 'Телефоны, планшеты'),
('Accessories', 'Аксессуары', 'Чехлы Защитные стекла пленки и прочие аксессуары');
INSERT INTO `products` (`id_brand`, `id_type_product`, `model`, `price`,`old_price`,`status`,`keywords`,`description`,`id_category`, `about`,`img`)
VALUES
(1,1, 'ZEVS', 9000, 8500, 1, 'компьютеры', 'Персональные компьютеры', 1, 'Игровой компьютер','images/pc.jpg'),
(2,2, 'Acer', 2500, 2600, 1, 'Комплектрующие', 'Комплектрующие', 3, 'Материнская плата','images/mb.jpg'),
(3,1, 'Lenovo', 9000, 8500, 1, 'Ноутбуки', 'Ноутбук', 1,'Ноутбук','images/notebook.jpg'),
(4,1, 'Core i7', 6500, 6600, 1,  'Комплектрующие', 'Комплектующие', 3, 'Процессор','images/cpu.jpg'),
(5,1, 'Galaxy s20', 9000, 8500, 1, 'Мобильные устройства', 'Мобильные телефоны', 4, 'Смартфон','images/s20.jpg');