-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour contact
CREATE DATABASE IF NOT EXISTS `contact` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `contact`;

-- Listage de la structure de table contact. contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `civilite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dnaissance` date DEFAULT NULL,
  `telephone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `societe` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinataire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `adresseip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table contact.contacts : ~3 rows (environ)
INSERT INTO `contacts` (`id`, `civilite`, `prenom`, `nom`, `email`, `dnaissance`, `telephone`, `adresse`, `cp`, `ville`, `pays`, `societe`, `destinataire`, `message`, `newsletter`, `adresseip`, `created_at`, `updated_at`) VALUES
	(1, 'Monsieur', 'fatima', 'driouch', 'aaaa@gmail.com', NULL, NULL, NULL, NULL, NULL, 'Choisir...', NULL, 'k.benani@cosmed.ma', NULL, 0, '127.0.0.1', '2023-01-24 23:29:19', '2023-01-24 23:29:19'),
	(2, 'Monsieur', 'fatima', 'driouch', 'aaaa@gmail.com', NULL, NULL, NULL, NULL, NULL, 'Choisir...', NULL, 'k.benani@cosmed.ma', NULL, 0, '127.0.0.1', '2023-01-24 23:31:14', '2023-01-24 23:31:14'),
	(3, 'Madame', 'fatima', 'driouch', 'aaaa@gmail.com', NULL, NULL, NULL, NULL, NULL, 'Choisir...', NULL, 'k.benani@cosmed.ma', NULL, 0, '127.0.0.1', '2023-01-24 23:33:45', '2023-01-24 23:33:45');

-- Listage de la structure de table contact. destinataires
CREATE TABLE IF NOT EXISTS `destinataires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table contact.destinataires : ~4 rows (environ)
INSERT INTO `destinataires` (`id`, `email`, `service`, `created_at`, `updated_at`) VALUES
	(1, 'aaa@gmail.com', 'service comptabilite', '2023-01-20 15:03:55', '2023-01-20 15:03:58'),
	(2, 'k.benani@cosmed.ma', 'Directeur commercial', '2023-01-20 15:28:38', '2023-01-20 15:28:08'),
	(3, 'h.mourad@cosmed.ma', 'Responsable SAV', '2023-01-20 15:28:36', '2023-01-20 15:28:37'),
	(4, 'a.jouda@cosmed.ma', 'Responsable ressources humaines', '2023-01-20 15:29:10', '2023-01-20 15:29:09');

-- Listage de la structure de table contact. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table contact.failed_jobs : ~0 rows (environ)

-- Listage de la structure de table contact. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table contact.migrations : ~7 rows (environ)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(9, '2023_01_19_112100_create_destinataires_table', 2),
	(12, '2023_01_20_155419_create_pays_table', 4),
	(13, '2023_01_20_141753_create_contacts_table', 5);

-- Listage de la structure de table contact. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table contact.password_resets : ~0 rows (environ)

-- Listage de la structure de table contact. pays
CREATE TABLE IF NOT EXISTS `pays` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pay_nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table contact.pays : ~20 rows (environ)
INSERT INTO `pays` (`id`, `pay_nom`, `created_at`, `updated_at`) VALUES
	(1, 'Russian Federation', '2023-01-20 16:49:13', '2023-01-20 16:49:13'),
	(2, 'New Caledonia', '2023-01-20 16:49:13', '2023-01-20 16:49:13'),
	(3, 'British Virgin Islands', '2023-01-20 16:49:13', '2023-01-20 16:49:13'),
	(4, 'Guyana', '2023-01-20 16:49:13', '2023-01-20 16:49:13'),
	(5, 'Guinea-Bissau', '2023-01-20 16:49:13', '2023-01-20 16:49:13'),
	(6, 'Russian Federation', '2023-01-20 16:49:13', '2023-01-20 16:49:13'),
	(7, 'Tajikistan', '2023-01-20 16:49:13', '2023-01-20 16:49:13'),
	(8, 'Uruguay', '2023-01-20 16:49:13', '2023-01-20 16:49:13'),
	(9, 'Cocos (Keeling) Islands', '2023-01-20 16:49:13', '2023-01-20 16:49:13'),
	(10, 'Malawi', '2023-01-20 16:49:13', '2023-01-20 16:49:13'),
	(11, 'Monaco', '2023-01-20 16:49:48', '2023-01-20 16:49:48'),
	(12, 'Cameroon', '2023-01-20 16:49:48', '2023-01-20 16:49:48'),
	(13, 'Sierra Leone', '2023-01-20 16:49:48', '2023-01-20 16:49:48'),
	(14, 'Morocco', '2023-01-20 16:49:48', '2023-01-20 16:49:48'),
	(15, 'Czech Republic', '2023-01-20 16:49:48', '2023-01-20 16:49:48'),
	(16, 'Antarctica (the territory South of 60 deg S)', '2023-01-20 16:49:48', '2023-01-20 16:49:48'),
	(17, 'Uganda', '2023-01-20 16:49:48', '2023-01-20 16:49:48'),
	(18, 'Bahrain', '2023-01-20 16:49:48', '2023-01-20 16:49:48'),
	(19, 'Philippines', '2023-01-20 16:49:48', '2023-01-20 16:49:48'),
	(20, 'Lithuania', '2023-01-20 16:49:48', '2023-01-20 16:49:48');

-- Listage de la structure de table contact. personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table contact.personal_access_tokens : ~0 rows (environ)

-- Listage de la structure de table contact. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table contact.users : ~0 rows (environ)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$YloHfbTIsc8bcOfUFRXx2uL0xHrEQucVH8nqJBViHySYvs5uUSvye', NULL, '2023-01-22 21:50:24', '2023-01-22 21:50:24');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
