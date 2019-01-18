-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- ����: localhost:3306
-- ����� ��������: ��� 27 2018 �., 21:46
-- ������ �������: 10.0.35-MariaDB
-- ������ PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- ���� ������: `codetoge_cabinet`
--

-- --------------------------------------------------------

--
-- ��������� ������� `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `news`
--

INSERT INTO `news` (`id`, `title`, `description`) VALUES
(1, '������ � ��� ���� ��������� ����������', '�������� ������� - ������ �� ������ �������� � ������ ��������� ����� ��������� ����������'),
(2, '���� �������� ������ ������������ ���������. ��� ���', '������ ���� �������� ������ ���.����. ����������� �� 10 ������');

-- --------------------------------------------------------

--
-- ��������� ������� `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- ��������� ������� `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'iphone x', 75000),
(2, 'iphone 8s', 80000),
(3, 'Samsung galaxy s9', 70000),
(4, 'Google glass', 140000),
(5, 'macBook', 80000),
(6, 'ipad air', 23000),
(7, '����� ��� iPad', 2000),
(8, '�������� ������ ��� iphone', 700),
(9, 'Nokia 3310', 1700),
(10, '����� 1', 10000),
(11, '����� 2', 11000),
(12, '����� 3', 12000),
(13, '����� 4', 13000),
(14, '����� 5', 14000),
(15, '����� 6', 15000),
(16, '����� 7', 16000),
(17, '����� 8', 17000),
(18, '����� 9', 18000),
(19, '����� 10', 19000),
(20, '����� 11', 20000),
(21, 'Iphone 11', 350000),
(22, 'klk', 10000),
(23, '����� 23', 10),
(24, '����� 24', 11),
(25, '����� 25', 12),
(26, '����� 26', 13),
(27, '����� 27', 14),
(28, '����� 28', 15),
(29, '����� 29', 16),
(30, '����� 30', 17),
(31, '����� 31', 18);

-- --------------------------------------------------------

--
-- ��������� ������� `productsInOrders`
--

CREATE TABLE `productsInOrders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- ��������� ������� `role`
--

CREATE TABLE `role` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, '�������������'),
(2, '��������');

-- --------------------------------------------------------

--
-- ��������� ������� `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(30) NOT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `users`
--

INSERT INTO `users` (`id`, `login`, `fullName`, `email`, `password`, `role_id`) VALUES
(1, 'kam', '������� ������', 'mail@kamil-abzalov.ru', '93279e3308bdbbeed946fc965017f67a', 1),
(2, 'petr', '���� ������', 'mail@kamil-abzalov.ru', 'e10adc3949ba59abbe56e057f20f883e', 2),
(3, 'ivan', '������ ���� ��������', 'ok_kam90@mail.ru', '93279e3308bdbbeed946fc965017f67a', 2),
(13, 'roman', '������� ����� ���������', 'ok_kam90@mail.ru', '93279e3308bdbbeed946fc965017f67a', 2),
(27, 'roman', '������� ������', 'roman_stepan@gmail.com', 'ae5eb824ef87499f644c3f11a7176157', 2),
(28, 'ignat', '�������� ������', 'ignat@gmail.com', '168be531cac4b12983fe56d520495d7e', 2),
(29, 'ignat', '�������� ������', 'ignat@gmail.com', '168be531cac4b12983fe56d520495d7e', 2),
(30, 'ignat', '�������� ������', 'ignat@gmail.com', '168be531cac4b12983fe56d520495d7e', 2),
(31, 'ignat', '�������� ������', 'ignat@gmail.com', '81812c5ad6643a03f646027946a7a115', 1),
(32, 'ignat', '�������� ������', 'ignat@gmail.com', '81812c5ad6643a03f646027946a7a115', 1),
(33, 'ignat', '�������� ������', 'ignat@gmail.com', '81812c5ad6643a03f646027946a7a115', 1),
(34, 'ignat', '�������� ������', 'ignat@gmail.com', '81812c5ad6643a03f646027946a7a115', 1),
(35, 'ignat', '�������� ������', 'ignat@gmail.com', '81812c5ad6643a03f646027946a7a115', 1),
(36, 'ignat', '�������� ������', 'ignat@gmail.com', '81812c5ad6643a03f646027946a7a115', 1),
(37, 'ignat', '�������� ������', 'ignat@gmail.com', '81812c5ad6643a03f646027946a7a115', 1),
(38, 'ignat', '�������� ������', 'ignat@gmail.com', '81812c5ad6643a03f646027946a7a115', 1),
(39, 'ignat', '�������� ������', 'ignat@gmail.com', '81812c5ad6643a03f646027946a7a115', 1),
(40, 'ignat', '�������� ������', 'ignat@gmail.com', '81812c5ad6643a03f646027946a7a115', 1),
(41, 'ignat', '�������� ������', 'ignat@gmail.com', '81812c5ad6643a03f646027946a7a115', 1),
(42, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(43, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(44, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(45, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(46, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(47, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(48, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(49, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(50, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(51, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(52, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(53, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(54, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(55, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(56, 'ignat', '�������� ������', 'ignat@gmail.com', '424a25489e1a9f5abd57c4aeaa1ce71e', 2),
(66, 'kam', 'kam', 'ok_kam90@mail.ru', '96e79218965eb72c92a549dd5a330112', 1),
(67, 'wergutt', 'wergut', 'wergut@wergut.ru', 'b0486b477a1699cbfe7a7a19f2a60ee0', 2);

--
-- ������� ���������� ������
--

--
-- ������� ������� `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- ������� ������� `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- ������� ������� `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- ������� ������� `productsInOrders`
--
ALTER TABLE `productsInOrders`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- ������� ������� `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- ������� ������� `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT ��� ���������� ������
--

--
-- AUTO_INCREMENT ��� ������� `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT ��� ������� `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT ��� ������� `role`
--
ALTER TABLE `role`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT ��� ������� `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- ����������� �������� ����� ����������� ������
--

--
-- ����������� �������� ����� ������� `productsInOrders`
--
ALTER TABLE `productsInOrders`
  ADD CONSTRAINT `productsInOrders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productsInOrders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE;

--
-- ����������� �������� ����� ������� `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;