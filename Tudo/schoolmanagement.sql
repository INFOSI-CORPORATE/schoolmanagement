-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Abr-2023 às 11:00
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `schoolmanagement`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `classes`
--

INSERT INTO `classes` (`id`, `name`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A1005', 'averevabbgfbafgbabafd \r\nbdfbadfbvbadbaerbaerfergaedgvaertgbsafhgaerthbrtbartahbrthbrtbartmstmdttusmtyjmstjkjmstjytjsutsjxthhnxfgartstnatrhasrnsrnahsbawtsyndfzbasgaerggegregaebadbabgf', '2023-04-13 11:31:47', '2023-04-13 11:52:03', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `courses`
--

INSERT INTO `courses` (`id`, `name`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Informática', 'Curso destinado para quem gosta de tecnologia e programação', '2023-04-13 12:00:57', '2023-04-13 12:00:57', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses_classes_grades_students`
--

CREATE TABLE `courses_classes_grades_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fk_courses_id` bigint(20) UNSIGNED NOT NULL,
  `fk_classes_id` bigint(20) UNSIGNED NOT NULL,
  `fk_grades_id` bigint(20) UNSIGNED NOT NULL,
  `fk_students_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses_subjects`
--

CREATE TABLE `courses_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fk_courses_id` bigint(20) UNSIGNED NOT NULL,
  `fk_subjects_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses_teachers`
--

CREATE TABLE `courses_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fk_courses_id` bigint(20) UNSIGNED NOT NULL,
  `fk_teachers_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `grades`
--

INSERT INTO `grades` (`id`, `name`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12º Classe', 'Decima Segunda do Ensino Secundário', '2023-04-13 12:01:40', '2023-04-13 12:01:40', NULL),
(2, '11º Classe', 'Decima primeira do Ensino Secundário', '2023-04-13 12:01:52', '2023-04-13 12:02:24', NULL),
(3, '10º Classe', 'Decima do Ensino Secundário', '2023-04-13 12:02:04', '2023-04-13 12:02:42', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_03_130738_create_courses_table', 1),
(6, '2023_04_03_164500_create_schoolyears_table', 1),
(7, '2023_04_04_164410_create_teachers_table', 1),
(8, '2023_04_04_164436_create_classes_table', 1),
(9, '2023_04_04_164523_create_subjects_table', 1),
(10, '2023_04_05_104702_create_grades_table', 1),
(11, '2023_04_05_164336_create_students_table', 1),
(12, '2023_04_06_140952_create_teachers_subjects_table', 1),
(13, '2023_04_06_141051_create_courses_subjects_table', 1),
(14, '2023_04_06_141104_create_courses_teachers_table', 1),
(15, '2023_04_06_141116_create_students_schoolyear_table', 1),
(16, '2023_04_06_141127_create_courses_classes_grades_students_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `schoolyears`
--

CREATE TABLE `schoolyears` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `schoolyears`
--

INSERT INTO `schoolyears` (`id`, `name`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2021-2022', 'Ano Lectivo depois da Pandemia', '2023-04-14 08:06:38', '2023-04-14 08:06:38', NULL),
(2, '2021-2022', 'Sem detalhes', '2023-04-14 07:57:05', '2023-04-14 07:57:05', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nProcess` int(11) NOT NULL,
  `nBi` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateBirth` date NOT NULL,
  `schoolYear` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `students`
--

INSERT INTO `students` (`id`, `nProcess`, `nBi`, `name`, `email`, `dateBirth`, `schoolYear`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 432, 'qfv54gref', 'Tartaruga', 'vcer5gf3f@ervae.veav', '2023-03-29', '2021-2022', NULL, '2023-04-13 09:08:07', '2023-04-13 09:08:21'),
(2, 13800, '004367283LA035', 'Marcio Andre', 'marcio@hotmail.com', '2004-05-14', '2021-2022', NULL, '2023-04-14 08:07:26', '2023-04-14 08:07:26'),
(4, 12900, '08767732BG321', 'Fernando António', 'fernandoantonio@gmail.com', '2022-11-02', '2020-2021', NULL, '2023-04-14 07:44:19', '2023-04-14 07:44:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `students_schoolyears`
--

CREATE TABLE `students_schoolyears` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fk_students_id` bigint(20) UNSIGNED NOT NULL,
  `fk_schoolyears_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `students_schoolyears`
--

INSERT INTO `students_schoolyears` (`id`, `fk_students_id`, `fk_schoolyears_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, '2023-04-14 08:08:49', '2023-04-14 08:08:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Matemática', 'Discilpina de Cálculos e lógica e muito mais', '2023-04-13 12:03:31', '2023-04-13 12:03:31', NULL),
(2, 'Língua Portuguesa', 'Disciplina para o aprendizado da Língua Portuguesa', '2023-04-13 12:04:12', '2023-04-13 12:04:12', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nBi` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `teachers`
--

INSERT INTO `teachers` (`id`, `nBi`, `name`, `email`, `contact`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '000000e0000', 'Uchiha Itachi', 'uchiha@folha.kunai', 'caef54356236', '2023-04-13 09:08:56', '2023-04-13 09:11:18', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teachers_subjects`
--

CREATE TABLE `teachers_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fk_teachers_id` bigint(20) UNSIGNED NOT NULL,
  `fk_subjects_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Eliude', 'admin@admin.com', NULL, '$2y$10$fAB5GBwTgnFTn3PeDKQfSOaYJt3rfcGS0gzFvIN7fi5dA/ajosKBy', 'oTrj4jnyGlDyiXfqYOCFcT4yLoF8Eqt9hE3jIQ6ptoJ4rHh2uZBGbeneiomj', '2023-04-10 08:01:01', '2023-04-10 08:01:01', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `courses_classes_grades_students`
--
ALTER TABLE `courses_classes_grades_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_classes_grades_students_fk_courses_id_foreign` (`fk_courses_id`),
  ADD KEY `courses_classes_grades_students_fk_classes_id_foreign` (`fk_classes_id`),
  ADD KEY `courses_classes_grades_students_fk_grades_id_foreign` (`fk_grades_id`),
  ADD KEY `courses_classes_grades_students_fk_students_id_foreign` (`fk_students_id`);

--
-- Índices para tabela `courses_subjects`
--
ALTER TABLE `courses_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_subjects_fk_courses_id_foreign` (`fk_courses_id`),
  ADD KEY `courses_subjects_fk_subjects_id_foreign` (`fk_subjects_id`);

--
-- Índices para tabela `courses_teachers`
--
ALTER TABLE `courses_teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_teachers_fk_courses_id_foreign` (`fk_courses_id`),
  ADD KEY `courses_teachers_fk_teachers_id_foreign` (`fk_teachers_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `schoolyears`
--
ALTER TABLE `schoolyears`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Índices para tabela `students_schoolyears`
--
ALTER TABLE `students_schoolyears`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_schoolyears_fk_students_id_foreign` (`fk_students_id`),
  ADD KEY `students_schoolyears_fk_schoolyears_id_foreign` (`fk_schoolyears_id`);

--
-- Índices para tabela `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Índices para tabela `teachers_subjects`
--
ALTER TABLE `teachers_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_subjects_fk_teachers_id_foreign` (`fk_teachers_id`),
  ADD KEY `teachers_subjects_fk_subjects_id_foreign` (`fk_subjects_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `courses_classes_grades_students`
--
ALTER TABLE `courses_classes_grades_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `courses_subjects`
--
ALTER TABLE `courses_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `courses_teachers`
--
ALTER TABLE `courses_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `schoolyears`
--
ALTER TABLE `schoolyears`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `students_schoolyears`
--
ALTER TABLE `students_schoolyears`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `teachers_subjects`
--
ALTER TABLE `teachers_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `courses_classes_grades_students`
--
ALTER TABLE `courses_classes_grades_students`
  ADD CONSTRAINT `courses_classes_grades_students_fk_classes_id_foreign` FOREIGN KEY (`fk_classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_classes_grades_students_fk_courses_id_foreign` FOREIGN KEY (`fk_courses_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_classes_grades_students_fk_grades_id_foreign` FOREIGN KEY (`fk_grades_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_classes_grades_students_fk_students_id_foreign` FOREIGN KEY (`fk_students_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `courses_subjects`
--
ALTER TABLE `courses_subjects`
  ADD CONSTRAINT `courses_subjects_fk_courses_id_foreign` FOREIGN KEY (`fk_courses_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_subjects_fk_subjects_id_foreign` FOREIGN KEY (`fk_subjects_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `courses_teachers`
--
ALTER TABLE `courses_teachers`
  ADD CONSTRAINT `courses_teachers_fk_courses_id_foreign` FOREIGN KEY (`fk_courses_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_teachers_fk_teachers_id_foreign` FOREIGN KEY (`fk_teachers_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `students_schoolyears`
--
ALTER TABLE `students_schoolyears`
  ADD CONSTRAINT `students_schoolyears_fk_schoolyears_id_foreign` FOREIGN KEY (`fk_schoolyears_id`) REFERENCES `schoolyears` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_schoolyears_fk_students_id_foreign` FOREIGN KEY (`fk_students_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `teachers_subjects`
--
ALTER TABLE `teachers_subjects`
  ADD CONSTRAINT `teachers_subjects_fk_subjects_id_foreign` FOREIGN KEY (`fk_subjects_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teachers_subjects_fk_teachers_id_foreign` FOREIGN KEY (`fk_teachers_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
