-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 18 sep. 2023 à 15:37
-- Version du serveur : 8.0.28
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_app_location`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cin` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `permis` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adresse` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tele` int NOT NULL,
  `gsm` int NOT NULL,
  `matricule` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `marque` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `duree` smallint NOT NULL,
  `message` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_locat` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matricule` (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `cin`, `permis`, `adresse`, `tele`, `gsm`, `matricule`, `marque`, `duree`, `message`, `date_locat`) VALUES
(1, 'Oussama Chorfi', 'AD123456', 'T115522', 'Hay Alghazali N 22- Temara', 662448752, 552414569, '45287-6-و', '', 2, '', '2023-03-23 18:08:34'),
(13, 'aa', 'aa', 'aa', 'aa', 0, 0, '28451-4-أ', '', 11, '', '2023-04-13 13:22:35');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tele` int NOT NULL,
  `gsm` int NOT NULL,
  `matricule` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` smallint NOT NULL,
  `comm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_matricule_unique` (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `cin`, `permis`, `adresse`, `tele`, `gsm`, `matricule`, `total`, `modele`, `marque`, `duree`, `comm`, `created_at`, `updated_at`) VALUES
(38, 'Oussama Chorfi', 'AD987456', 'T65987', 'Hay Alghzali N 265, Temara', 682698755, 0, '65984-4-أ', '750', 'Clio 4', 'Renault', 3, 'il n\'y pas de rayures sur la voiture\r\nCarburant de voiture: 1/4', '2023-05-19 11:44:36', NULL),
(39, 'Khalid Alaoui', 'X65987', 'T878', 'Av Mohammed V , N 45 Rabat', 69878546, 0, '24887-4-أ', '1600', 'Megane Sedan', 'Renault', 4, ': il n\'y pas de rayures sur la voiture\r\nCarburant de voiture: 1/2', '2023-05-15 11:52:48', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

DROP TABLE IF EXISTS `connexion`;
CREATE TABLE IF NOT EXISTS `connexion` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_16_112244_create_voitures_table', 2),
(6, '2023_04_01_144103_create_clients_table', 3),
(7, '2023_04_03_121911_add_comm_to_clients_table', 4),
(8, '2023_04_04_131735_create_connexion_table', 5),
(9, '2023_04_10_144722_create_reserver_table', 6),
(10, '2023_04_10_145029_create_reservers_table', 7),
(11, '2023_04_15_111131_add_modele_to_voitures_table', 8),
(12, '2023_04_15_112700_add_marque_to_clients_table', 9),
(13, '2023_04_16_113732_create_reserver_table', 10);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservers`
--

DROP TABLE IF EXISTS `reservers`;
CREATE TABLE IF NOT EXISTS `reservers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `matricule` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `nom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tele` int NOT NULL,
  `gsm` int NOT NULL,
  `dateDebut` date NOT NULL,
  `duree` smallint NOT NULL,
  `message` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

DROP TABLE IF EXISTS `voitures`;
CREATE TABLE IF NOT EXISTS `voitures` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `carburant` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stereo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `climatisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maxpassagers` int NOT NULL,
  `bagages` int NOT NULL,
  `dispo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desPortes` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `voitures_matricule_unique` (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `voitures`
--

INSERT INTO `voitures` (`id`, `matricule`, `marque`, `modele`, `image`, `prix`, `carburant`, `transmission`, `stereo`, `climatisation`, `maxpassagers`, `bagages`, `dispo`, `desPortes`, `created_at`, `updated_at`) VALUES
(2, '65984-4-أ', 'Renault', 'Clio 4', 'RenaultClio..png', '250.00', 'Diesel', 'Manuel', 'Radio / CD', ' Oui', 5, 2, 'Non', 4, NULL, '2023-05-19 11:44:36'),
(3, '69875-6-ه', 'Hyundai', 'Tucson', 'HyundaiTucson.png', '500.00', 'Diesel', 'Manuel', 'Radio / CD', ' Oui', 5, 3, 'Oui', 4, NULL, NULL),
(4, '87875-6-ه', 'Hyundai', 'Tucson', 'HyundaiTucson..png', '500.00', 'Diesel', 'Manuel', 'Radio / CD', ' Oui', 5, 3, 'Non', 4, NULL, '2023-06-16 08:41:40'),
(5, '5487-38-ب', 'Hyundai', 'Accent', 'HyundaiAccent.png', '350.00', 'Diesel', 'Manuel', 'Radio / CD', ' Oui', 5, 2, 'Oui', 4, NULL, NULL),
(6, '8792-38-ب', 'Renault', 'Megane Sedan', 'RenaultMegane.png', '400.00', 'Diesel', 'Manuel', 'Radio / CD', ' Oui', 5, 2, 'Oui', 4, NULL, NULL),
(7, '24887-4-أ', 'Renault', 'Megane Sedan', 'RenaultMegane.png', '400.00', 'Diesel', 'Automatic', 'Radio / CD', ' Oui', 5, 2, 'Non', 4, NULL, '2023-05-19 11:52:48'),
(8, '35785-4-أ', 'Citroen', 'C3', 'CitroenC3.png', '250.00', 'Essence', 'Manuel', 'Radio / CD', ' Oui', 5, 2, 'Oui', 4, NULL, NULL),
(9, '96875-4-أ', 'Dacia', 'Logan', 'DaciaLogan.png', '200.00', 'Essence', 'Manuel', 'Radio / CD', ' Oui', 5, 2, 'Oui', 4, NULL, NULL),
(10, '54885-6-ه', 'Ford', 'Fiesta', 'FordFiesta.png', '250.00', 'Diesel', 'Manuel', 'Radio / CD', ' Oui', 5, 2, 'Oui', 4, NULL, NULL),
(11, '87987-4-أ', 'Dacia', 'Duster', 'DaciaDuster.png', '250.00', 'Diesel', 'Manuel', 'Radio / CD', ' Oui', 5, 2, 'Oui', 4, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
