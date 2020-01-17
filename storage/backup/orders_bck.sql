-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table abovestyle.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `shipment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_price` decimal(8,2) DEFAULT NULL,
  `weight_charge` decimal(8,2) DEFAULT NULL,
  `delivery_charge` decimal(8,2) DEFAULT NULL,
  `product_cost` decimal(8,2) DEFAULT NULL,
  `weight_cost` decimal(8,2) DEFAULT NULL,
  `advance_pay` decimal(8,2) DEFAULT NULL,
  `cod_credit` decimal(8,2) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table abovestyle.orders: ~26 rows (approximately)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `order_id`, `shipment_id`, `name`, `phone_number`, `email`, `address`, `category`, `product_name`, `quantity`, `product_price`, `weight_charge`, `delivery_charge`, `product_cost`, `weight_cost`, `advance_pay`, `cod_credit`, `user_id`, `created_at`, `updated_at`) VALUES
	(5, 2019016, 'JAN2020', 'Fabiha Tanzeem', '01682503498', NULL, '41/3-4 Purana paltan culvert road', '1', NULL, 2, 350.00, 200.00, 70.00, 0.00, 0.00, 0.00, 0.00, 1, '2020-01-16 08:17:49', '2020-01-16 08:17:49'),
	(6, 2019017, 'JAN2020', 'Nishat Rahman', '01990855057', NULL, '457, South Kafrul, Dhaka.', '1', 'Hijab', 2, 350.00, 200.00, 70.00, 0.00, 0.00, 0.00, 0.00, 1, '2020-01-16 08:20:48', '2020-01-16 08:20:48'),
	(7, 2019018, NULL, 'Rubiyat Shilvi', '01705600061', NULL, '48/6/C Buet teacher\'s quarter(red campus), Palashi.', '1', 'Hijab - 5, Hijab pin - 4', 1, 2510.00, 250.00, 70.00, 0.00, 0.00, 1020.00, 0.00, 1, '2020-01-16 08:45:54', '2020-01-16 08:47:06');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
