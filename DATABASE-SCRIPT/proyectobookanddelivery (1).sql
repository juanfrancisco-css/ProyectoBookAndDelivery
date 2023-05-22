-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 10:39:59
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectobookanddelivery`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_05_08_143538_create_reservas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `NumPersonas` int(11) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `hora` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `nombre`, `telefono`, `email`, `NumPersonas`, `fecha`, `hora`, `created_at`, `updated_at`) VALUES
(34, 'katy', '289956', 'katy@gmail.com', 2, '21 Mayo 2023', '16:00:00', '2023-05-10 09:10:48', '2023-05-18 14:32:46'),
(35, 'tata', '667', 'tata@gmail.com', 3, '21 Mayo 2023', '11:00:00', '2023-05-10 09:16:01', '2023-05-17 07:56:28'),
(37, 'cristina', '669', 'cristinalaguna@gmail.com', 8, '21 Mayo 2023', '21:30:00', '2023-05-10 09:22:49', '2023-05-17 07:56:39'),
(38, 'alondra', '700', 'alondritabarbie@gmail.com', 2, '11 Mayo 2023', '12:00:00', '2023-05-10 09:24:35', '2023-05-16 13:56:46'),
(39, 'leonardo', '771', 'leo@gmail.com', 2, '11 Mayo 2023', '11:00:00', '2023-05-10 09:27:02', '2023-05-10 09:27:02'),
(40, 'tata', '666', 'tata@gmail.com', 2, '11 Mayo 2023', '10:30:00', '2023-05-14 17:50:09', '2023-05-17 08:28:34'),
(41, 'pepe', '668', 'pepe@gmail.com', 5, '20 Mayo 2023', '15:30:00', '2023-05-14 17:56:23', '2023-05-16 14:24:49'),
(42, 'yuri', '603859488', 'yuri@gmail.com', 5, '15 Mayo 2023', '14:00:00', '2023-05-14 17:58:06', '2023-05-16 14:01:29'),
(43, 'gabriel', '603859488', 'gabriel@gmail.com', 2, '27 Mayo 2023', '11:30:00', '2023-05-14 18:01:42', '2023-05-17 09:48:46'),
(44, 'luis fonsi', '603859487', 'luisfonsi@gmail.com', 2, '21 Mayo 2023', '16:30:00', '2023-05-16 09:20:11', '2023-05-17 07:56:16'),
(45, 'prueba', '603859487', 'prueba@gmail.com', 2, '20 Mayo 2023', '23:00:00', '2023-05-16 09:22:18', '2023-05-16 09:22:18'),
(46, 'gabriel', '603859487', 'gabriel@gmail.com', 2, '20 Mayo 2023', '14:00:00', '2023-05-16 09:23:17', '2023-05-16 09:23:17'),
(47, 'leo', '6666', 'leo@gmail.com', 2, '10 Mayo 2023', '12:35:00', '2023-05-16 11:04:19', '2023-05-16 11:04:19'),
(48, 'juan gabriel', '666', 'juangabriel@gmail.com', 2, '21 Mayo 2023', '11:00:00', NULL, NULL),
(49, 'leo', '289956', 'le98@gmail.com', 2, '20 Mayo 2023', '15:00:00', NULL, NULL),
(50, 'leo', '289956', 'le98@gmail.com', 2, '20 Mayo 2023', '15:00:00', NULL, NULL),
(51, 'luis', '289956', 'luis@gmail.com', 2, '20 Mayo 2023', '19:00:00', NULL, NULL),
(52, 'juan', '289956', 'juanfranciscorojascampo5@gmail.com', 2, '20 Mayo 2023', '19:35:00', NULL, NULL),
(53, 'juan', '289956', 'juan@gmail.com', 2, '18 Mayo 2023', '16:30:00', NULL, NULL),
(54, 'Katy Josefina', '289956', 'katy@gmail.com', 2, '20 Mayo 2023', '17:35:00', NULL, NULL),
(55, 'Katy Josefina', '289956', 'katy@gmail.com', 2, '20 Mayo 2023', '21:30:00', NULL, NULL),
(56, 'juan', '289956', 'juanfranciscorojascampo5@gmail.com', 2, '20 Mayo 2023', '21:00:00', NULL, NULL),
(58, 'juan', '289956', 'juanfranciscorojascampo5@gmail.com', 2, '19 Mayo 2023', '12:35:00', NULL, NULL),
(59, 'juan francisco', '6666', 'juanfranciscorojascampo5@gmail.com', 2, '20 Mayo 2023', '11:30:00', '2023-05-18 07:01:10', '2023-05-18 07:01:10'),
(60, 'tata', '555', 'tata@gmail.com', 2, '21 Mayo 2023', '12:00:00', '2023-05-18 07:02:37', '2023-05-18 07:02:37'),
(61, 'tata', '555', 'tata@gmail.com', 2, '21 Mayo 2023', '12:00:00', '2023-05-18 07:04:06', '2023-05-18 07:04:06'),
(62, 'tata', '555', 'tata@gmail.com', 2, '21 Mayo 2023', '12:00:00', '2023-05-18 07:04:50', '2023-05-18 07:04:50'),
(63, 'tata', '555', 'tata@gmail.com', 2, '21 Mayo 2023', '12:00:00', '2023-05-18 07:06:06', '2023-05-18 07:06:06'),
(64, 'tata', '603859487', 'tata@gmail.com', 2, '20 Mayo 2023', '12:00:00', '2023-05-18 07:08:07', '2023-05-18 07:08:07'),
(65, 'juan francisco', '603859487', 'juan34_8@gmail.com', 2, '20 Mayo 2023', '16:30:00', '2023-05-18 07:34:26', '2023-05-18 07:34:26'),
(66, 'juan francisco', '56', 'juanfranciscorojascampo5@gmail.com', 2, '20 Mayo 2023', '11:00:00', '2023-05-18 08:25:54', '2023-05-18 08:25:54'),
(67, 'juan', '603859487', 'juanfranciscorojascampo5@gmail.com', 2, '20 Mayo 2023', '17:00:00', '2023-05-18 08:36:06', '2023-05-18 08:36:06'),
(68, 'juan', '603859488', 'juanfranciscorojascampo5@gmail.com', 2, '20 Mayo 2023', '13:05:00', '2023-05-18 08:59:23', '2023-05-18 08:59:23'),
(70, 'juan', '6666', 'juan@gmail.com', 2, '20 Mayo 2023', '12:35:00', '2023-05-18 09:10:18', '2023-05-18 09:10:18'),
(71, 'juan francisco', '34', 'juan34_8@gmail.com', 2, '19 Mayo 2023', '11:00:00', '2023-05-18 09:44:36', '2023-05-18 09:44:36'),
(72, 'jorge guillermo', '603859487', 'jorgue@gmail.com', 2, '20 Mayo 2023', '18:35:00', '2023-05-18 12:42:16', '2023-05-18 12:42:16'),
(73, 'juan', '289956', 'juanfranciscorojascampo5@gmail.com', 2, '18 Mayo 2023', '16:00:00', '2023-05-19 09:07:26', '2023-05-19 09:07:26'),
(74, 'test', '1', 'tets@gail.com', 2, '27 Mayo 2023', '10:30:00', '2023-05-19 09:32:48', '2023-05-19 09:32:48'),
(75, 'test', '2', 'tets@gail.com', 2, '27 Mayo 2023', '10:30:00', '2023-05-19 09:33:51', '2023-05-19 09:33:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'juan francisco', 'rojas campo', 'juanfranciscorojascampo5@gmail.com', NULL, '$2y$10$mlaSOrWxUz6JVCps1WpdauNMGiCz4YwNizZ0meOdUC//fNSAUOm/i', NULL, '2023-05-09 05:20:47', '2023-05-09 05:20:47'),
(2, 'katy', 'campos', 'katy@gmail.com', NULL, '$2y$10$xH7e9dJHRTQndzzjMzL1Tey9C0dFN3aNFpckc121//tGxuPiKoD6G', NULL, '2023-05-09 06:11:24', '2023-05-09 06:11:24'),
(3, 'francisca', 'morgado', 'tata@gmail.com', NULL, '$2y$10$hecTdctck1/fSzhXIITGouAbtQxFw87QIExvzsGZ58I98eFchbv5q', NULL, '2023-05-09 06:30:23', '2023-05-09 06:30:23'),
(4, 'juan', 'rojas', 'juan@gmail.com', NULL, 'vistaalegre', NULL, '2023-05-09 06:30:23', '2023-05-09 06:30:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
