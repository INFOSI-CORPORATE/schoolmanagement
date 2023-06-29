-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2023 às 11:22
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

--
-- Extraindo dados da tabela `ativities`
--

INSERT INTO `ativities` (`id`, `title`, `details`, `location`, `duration`, `price`, `status`, `start`, `end`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Passeio na Baia', 'Vamos passear na baia mesmo, de verdade.', 'Baia de Luanda', '5 horas', 1500, 'Em Andamento', '2023-07-01 09:55:00', '2023-07-02 00:00:00', '2023-06-29 07:55:54', '2023-06-29 08:14:21', NULL);

--
-- Extraindo dados da tabela `classes`
--

INSERT INTO `classes` (`id`, `name`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A1', 'Turma A1 se descrição', '2023-06-29 07:49:11', '2023-06-29 07:49:11', NULL),
(2, 'A2', 'Detalhes minimalistas da turma A2', '2023-06-29 08:12:38', '2023-06-29 08:12:38', NULL);


--
-- Extraindo dados da tabela `courses`
--

INSERT INTO `courses` (`id`, `name`, `details`, `duration`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Informática', 'Sem descrição', '4 anos', '2023-06-29 07:48:55', '2023-06-29 07:48:55', NULL);


--
-- Extraindo dados da tabela `departments`
--

INSERT INTO `departments` (`id`, `name`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TI', 'Técnicas de Informática', '2023-06-29 07:50:15', '2023-06-29 07:50:15', NULL);


--
-- Extraindo dados da tabela `employees`
--

INSERT INTO `employees` (`id`, `name`, `nBi`, `address`, `country`, `contact`, `contactAlter`, `email`, `admission`, `office`, `sex`, `dateBirth`, `fk_departments_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pinto Paulo', '087435423nd321', 'Rua Comandante Nzaji 94, Luanda', 'Angola', '987765432', '982347654', 'pinto@gmail.com', '2023-06-01', 'Técnico', 'Male', NULL, 1, NULL, '2023-06-29 07:50:58', '2023-06-29 07:50:58');


--
-- Extraindo dados da tabela `grades`
--

INSERT INTO `grades` (`id`, `name`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '10º Classe', 'Primeira classe da instituição', '2023-06-29 07:49:31', '2023-06-29 07:49:31', NULL);

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id`, `level`, `REMOTE_ADDR`, `PATH_INFO`, `USER_NAME`, `USER_ID`, `HTTP_USER_AGENT`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/student/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Alunos', '2023-06-29 07:47:45', '2023-06-29 07:47:45', NULL),
(2, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/schoolyear/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Ano Lectivo', '2023-06-29 07:47:52', '2023-06-29 07:47:52', NULL),
(3, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/schoolyear/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Anos Lectivos', '2023-06-29 07:47:53', '2023-06-29 07:47:53', NULL),
(4, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/teacher/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Professores', '2023-06-29 07:47:56', '2023-06-29 07:47:56', NULL),
(5, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/teacher/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Professor', '2023-06-29 07:47:57', '2023-06-29 07:47:57', NULL),
(6, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/teacher', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Professor', '2023-06-29 07:48:12', '2023-06-29 07:48:12', NULL),
(7, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/teacher/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Professor', '2023-06-29 07:48:12', '2023-06-29 07:48:12', NULL),
(8, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/rule/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Cargo', '2023-06-29 07:48:16', '2023-06-29 07:48:16', NULL),
(9, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/rule', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Cargo', '2023-06-29 07:48:40', '2023-06-29 07:48:40', NULL),
(10, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/rule/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Cargo', '2023-06-29 07:48:40', '2023-06-29 07:48:40', NULL),
(11, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/course/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Curso', '2023-06-29 07:48:44', '2023-06-29 07:48:44', NULL),
(12, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/course', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Curso', '2023-06-29 07:48:55', '2023-06-29 07:48:55', NULL),
(13, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/course/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Curso', '2023-06-29 07:48:55', '2023-06-29 07:48:55', NULL),
(14, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/classe/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Turma', '2023-06-29 07:48:59', '2023-06-29 07:48:59', NULL),
(15, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/classe', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Turma', '2023-06-29 07:49:11', '2023-06-29 07:49:11', NULL),
(16, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/classe/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Turma', '2023-06-29 07:49:11', '2023-06-29 07:49:11', NULL),
(17, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/grade/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Classe', '2023-06-29 07:49:13', '2023-06-29 07:49:13', NULL),
(18, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/grade', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Classe', '2023-06-29 07:49:31', '2023-06-29 07:49:31', NULL),
(19, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/grade/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Classe', '2023-06-29 07:49:31', '2023-06-29 07:49:31', NULL),
(20, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/subject/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Disciplina', '2023-06-29 07:49:34', '2023-06-29 07:49:34', NULL),
(21, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/subject', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Disciplina', '2023-06-29 07:49:57', '2023-06-29 07:49:57', NULL),
(22, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/subject/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Disciplina', '2023-06-29 07:49:57', '2023-06-29 07:49:57', NULL),
(23, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/department/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Departamento', '2023-06-29 07:50:01', '2023-06-29 07:50:01', NULL),
(24, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/department', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Departamento', '2023-06-29 07:50:15', '2023-06-29 07:50:15', NULL),
(25, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/department/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Departamento', '2023-06-29 07:50:15', '2023-06-29 07:50:15', NULL),
(26, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/employee/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Funcionário', '2023-06-29 07:50:17', '2023-06-29 07:50:17', NULL),
(27, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/employee', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou um Funcionário', '2023-06-29 07:50:58', '2023-06-29 07:50:58', NULL),
(28, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/employee/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Funcionário', '2023-06-29 07:50:58', '2023-06-29 07:50:58', NULL),
(29, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/departmentboss/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Chefe de Departamento', '2023-06-29 07:51:00', '2023-06-29 07:51:00', NULL),
(30, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/departmentboss', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou um Chefe de Departamento', '2023-06-29 07:51:04', '2023-06-29 07:51:04', NULL),
(31, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/departmentboss/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Chefe de Departamento', '2023-06-29 07:51:04', '2023-06-29 07:51:04', NULL),
(32, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transport/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Transporte', '2023-06-29 07:51:07', '2023-06-29 07:51:07', NULL),
(33, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transport', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Transporte', '2023-06-29 07:52:01', '2023-06-29 07:52:01', NULL),
(34, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transport/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Transporte', '2023-06-29 07:52:01', '2023-06-29 07:52:01', NULL),
(35, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matricular Aluno', '2023-06-29 07:52:05', '2023-06-29 07:52:05', NULL),
(36, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matriculou um Aluno', '2023-06-29 07:52:14', '2023-06-29 07:52:14', NULL),
(37, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matricular Aluno', '2023-06-29 07:52:14', '2023-06-29 07:52:14', NULL),
(38, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matriculou um Aluno', '2023-06-29 07:52:22', '2023-06-29 07:52:22', NULL),
(39, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matricular Aluno', '2023-06-29 07:52:22', '2023-06-29 07:52:22', NULL),
(40, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matriculou um Aluno', '2023-06-29 07:52:28', '2023-06-29 07:52:28', NULL),
(41, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matricular Aluno', '2023-06-29 07:52:29', '2023-06-29 07:52:29', NULL),
(42, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matriculou um Aluno', '2023-06-29 07:52:38', '2023-06-29 07:52:38', NULL),
(43, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matricular Aluno', '2023-06-29 07:52:38', '2023-06-29 07:52:38', NULL),
(44, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matriculou um Aluno', '2023-06-29 07:52:48', '2023-06-29 07:52:48', NULL),
(45, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matricular Aluno', '2023-06-29 07:52:48', '2023-06-29 07:52:48', NULL),
(46, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matriculou um Aluno', '2023-06-29 07:53:00', '2023-06-29 07:53:00', NULL),
(47, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matricular Aluno', '2023-06-29 07:53:00', '2023-06-29 07:53:00', NULL),
(48, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/teacherSubjectClasseRuleSchoolyear/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Admitir Professor', '2023-06-29 07:53:04', '2023-06-29 07:53:04', NULL),
(49, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/teacherSubjectClasseRuleSchoolyear', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Admitiu o Professor', '2023-06-29 07:53:18', '2023-06-29 07:53:18', NULL),
(50, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/teacherSubjectClasseRuleSchoolyear/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Admitir Professor', '2023-06-29 07:53:19', '2023-06-29 07:53:19', NULL),
(51, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseSubjectGrade/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Associação do Curso', '2023-06-29 07:53:29', '2023-06-29 07:53:29', NULL),
(52, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseSubjectGrade', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Associou o Curso', '2023-06-29 07:53:33', '2023-06-29 07:53:33', NULL),
(53, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseSubjectGrade/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Associação do Curso', '2023-06-29 07:53:34', '2023-06-29 07:53:34', NULL),
(54, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseSubjectGrade/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Associação do Curso', '2023-06-29 07:54:25', '2023-06-29 07:54:25', NULL),
(55, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/exam/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Exame', '2023-06-29 07:54:32', '2023-06-29 07:54:32', NULL),
(56, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/exam', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Exame', '2023-06-29 07:54:58', '2023-06-29 07:54:58', NULL),
(57, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/exam/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Exame', '2023-06-29 07:54:58', '2023-06-29 07:54:58', NULL),
(58, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/ativities/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Atividade', '2023-06-29 07:55:03', '2023-06-29 07:55:03', NULL),
(59, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/ativities', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Atividade', '2023-06-29 07:55:54', '2023-06-29 07:55:54', NULL),
(60, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/ativities/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Atividade', '2023-06-29 07:55:54', '2023-06-29 07:55:54', NULL),
(61, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Propina', '2023-06-29 07:55:59', '2023-06-29 07:55:59', NULL),
(62, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Propina', '2023-06-29 07:56:12', '2023-06-29 07:56:12', NULL),
(63, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Propina', '2023-06-29 07:56:12', '2023-06-29 07:56:12', NULL),
(64, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Propina', '2023-06-29 07:56:19', '2023-06-29 07:56:19', NULL),
(65, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Propina', '2023-06-29 07:56:19', '2023-06-29 07:56:19', NULL),
(66, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Propina', '2023-06-29 07:56:32', '2023-06-29 07:56:32', NULL),
(67, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Propina', '2023-06-29 07:56:32', '2023-06-29 07:56:32', NULL),
(68, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Propina', '2023-06-29 07:56:42', '2023-06-29 07:56:42', NULL),
(69, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Propina', '2023-06-29 07:56:42', '2023-06-29 07:56:42', NULL),
(70, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Propina', '2023-06-29 07:56:50', '2023-06-29 07:56:50', NULL),
(71, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Propina', '2023-06-29 07:56:50', '2023-06-29 07:56:50', NULL),
(72, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Propina', '2023-06-29 07:57:09', '2023-06-29 07:57:09', NULL),
(73, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Propina', '2023-06-29 07:57:09', '2023-06-29 07:57:09', NULL),
(74, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Propina', '2023-06-29 07:57:19', '2023-06-29 07:57:19', NULL),
(75, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Propina', '2023-06-29 07:57:20', '2023-06-29 07:57:20', NULL),
(76, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Propina', '2023-06-29 07:57:31', '2023-06-29 07:57:31', NULL),
(77, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Propina', '2023-06-29 07:57:31', '2023-06-29 07:57:31', NULL),
(78, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 07:57:35', '2023-06-29 07:57:35', NULL),
(79, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:02:00', '2023-06-29 08:02:00', NULL),
(80, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:02:00', '2023-06-29 08:02:00', NULL),
(81, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:02:30', '2023-06-29 08:02:30', NULL),
(82, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:04:40', '2023-06-29 08:04:40', NULL),
(83, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Pagamento de Transporte', '2023-06-29 08:04:51', '2023-06-29 08:04:51', NULL),
(84, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:04:51', '2023-06-29 08:04:51', NULL),
(85, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:05:10', '2023-06-29 08:05:10', NULL),
(86, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:05:19', '2023-06-29 08:05:19', NULL),
(87, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:06:39', '2023-06-29 08:06:39', NULL),
(88, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:06:54', '2023-06-29 08:06:54', NULL),
(89, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:07:02', '2023-06-29 08:07:02', NULL),
(90, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:07:12', '2023-06-29 08:07:12', NULL),
(91, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Pagamento de Transporte', '2023-06-29 08:07:31', '2023-06-29 08:07:31', NULL),
(92, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:07:31', '2023-06-29 08:07:31', NULL),
(93, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Alunos Matriculados', '2023-06-29 08:07:38', '2023-06-29 08:07:38', NULL),
(94, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/teacherSubjectClasseRuleSchoolyear/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Admissão de Professores', '2023-06-29 08:07:45', '2023-06-29 08:07:45', NULL),
(95, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/student/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Alunos', '2023-06-29 08:07:53', '2023-06-29 08:07:53', NULL),
(96, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/schoolyear/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Anos Lectivos', '2023-06-29 08:08:21', '2023-06-29 08:08:21', NULL),
(97, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/classe/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Turma', '2023-06-29 08:08:25', '2023-06-29 08:08:25', NULL),
(98, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/department/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Departamentos', '2023-06-29 08:08:31', '2023-06-29 08:08:31', NULL),
(99, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transport/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Transportes', '2023-06-29 08:08:35', '2023-06-29 08:08:35', NULL),
(100, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Alunos Matriculados', '2023-06-29 08:08:39', '2023-06-29 08:08:39', NULL),
(101, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/classe/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Turma', '2023-06-29 08:12:24', '2023-06-29 08:12:24', NULL),
(102, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/classe', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Turma', '2023-06-29 08:12:38', '2023-06-29 08:12:38', NULL),
(103, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/classe/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Turma', '2023-06-29 08:12:38', '2023-06-29 08:12:38', NULL),
(104, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Matricular Aluno', '2023-06-29 08:12:41', '2023-06-29 08:12:41', NULL),
(105, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/courseClasseGradeStudentSchoolyear/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Alunos Matriculados', '2023-06-29 08:12:43', '2023-06-29 08:12:43', NULL),
(106, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/teacherSubjectClasseRuleSchoolyear/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Admissão de Professores', '2023-06-29 08:13:01', '2023-06-29 08:13:01', NULL),
(107, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/exam/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Calendario de Exames', '2023-06-29 08:13:37', '2023-06-29 08:13:37', NULL),
(108, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/ativities/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Calendario de Atividades', '2023-06-29 08:14:03', '2023-06-29 08:14:03', NULL),
(109, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/ativities/show/1', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Detalhes da Atividade', '2023-06-29 08:14:14', '2023-06-29 08:14:14', NULL),
(110, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/ativities/show/1', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Detalhes da Atividade', '2023-06-29 08:14:14', '2023-06-29 08:14:14', NULL),
(111, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/ativities/edit/1', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Editar Atividade', '2023-06-29 08:14:16', '2023-06-29 08:14:16', NULL),
(112, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/ativities/update/1', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Actualizou Atividade', '2023-06-29 08:14:21', '2023-06-29 08:14:21', NULL),
(113, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/ativities/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Calendario de Atividades', '2023-06-29 08:14:21', '2023-06-29 08:14:21', NULL),
(114, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/tuition/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Propinas', '2023-06-29 08:14:52', '2023-06-29 08:14:52', NULL),
(115, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Pagamentos de Transportes', '2023-06-29 08:15:37', '2023-06-29 08:15:37', NULL),
(116, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Pagamentos de Transportes', '2023-06-29 08:15:38', '2023-06-29 08:15:38', NULL),
(117, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Pagamentos de Transportes', '2023-06-29 08:16:10', '2023-06-29 08:16:10', NULL),
(118, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Pagamentos de Transportes', '2023-06-29 08:17:35', '2023-06-29 08:17:35', NULL),
(119, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Pagamentos de Transportes', '2023-06-29 08:19:01', '2023-06-29 08:19:01', NULL),
(120, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/list', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Lista de Pagamentos de Transportes', '2023-06-29 08:19:20', '2023-06-29 08:19:20', NULL),
(121, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:20:41', '2023-06-29 08:20:41', NULL),
(122, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Cadastrou Pagamento de Transporte', '2023-06-29 08:20:52', '2023-06-29 08:20:52', NULL),
(123, 'info', '127.0.0.1', 'http://127.0.0.1:8000/admin/transportPay/create', 'Eliude Quintas', '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'Criar Pagamento de Transporte', '2023-06-29 08:20:52', '2023-06-29 08:20:52', NULL);



--
-- Extraindo dados da tabela `rules`
--

INSERT INTO `rules` (`id`, `name`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Director de Turma', 'Sem registro adicionais', '2023-06-29 07:48:40', '2023-06-29 07:48:40', NULL);


--
-- Extraindo dados da tabela `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Matemática', 'A disciplina que tem mais ênfase', '2023-06-29 07:49:57', '2023-06-29 07:49:57', NULL);

--
-- Extraindo dados da tabela `teachers`
--

INSERT INTO `teachers` (`id`, `nBi`, `name`, `email`, `contact`, `contactAlter`, `literary`, `specialty`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '08767732LA321', 'Andre João', 'andre@infosi.com', '987765432', '987777654', 'Engenheiro do Petróleo', 'Cálculos Matemáticos', '2023-06-29 07:48:12', '2023-06-29 07:48:12', NULL);

--
-- Extraindo dados da tabela `transports`
--

INSERT INTO `transports` (`id`, `plate`, `model`, `capacity`, `route`, `state`, `safe`, `documentation`, `details`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'LD-89-12-PD', 'Toyota Coyote', 20, 'Camama-Viana', 'Em Manutenção', 'IBM - 12/06/2025', 'transport/HXz390A3M781G9Oq70qOok6UUo60zppNcmKvrVAy.pdf', 'Carro com apenas 100 lugares', NULL, '2023-06-29 07:52:01', '2023-06-29 07:52:01');


--
-- Extraindo dados da tabela `contracts`
--

INSERT INTO `contracts` (`id`, `season`, `fk_teachers_id`, `fk_subjects_id`, `fk_classes_id`, `fk_rules_id`, `fk_schoolyears_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Manhã', 1, 1, 1, 1, 1, '2023-06-29 07:53:18', '2023-06-29 07:53:18', NULL);


--
-- Extraindo dados da tabela `transport_pays`
--



INSERT INTO `transport_pays` (`id`, `month`, `price`, `state`, `fk_students_id`, `fk_schoolyears_id`, `fk_transports_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Janeiro', 35500, 'Pago', 1, 1, 1, NULL, '2023-06-29 08:04:51', '2023-06-29 08:04:51'),
(2, 'Fevereiro', 35500, 'Pago', 1, 1, 1, NULL, '2023-06-29 08:07:31', '2023-06-29 08:07:31'),
(3, 'Janeiro', 35500, 'Pago', 1, 1, 1, NULL, '2023-06-29 08:20:52', '2023-06-29 08:20:52');

--
-- Extraindo dados da tabela `courses_subjects_grades`
--

INSERT INTO `courses_subjects_grades` (`id`, `fk_courses_id`, `fk_subjects_id`, `fk_grades_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, '2023-06-29 07:53:33', '2023-06-29 07:53:33', NULL);

--
-- Extraindo dados da tabela `departments_bosses`
--

INSERT INTO `departments_bosses` (`id`, `details`, `fk_employees_id`, `fk_departments_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 1, NULL, '2023-06-29 07:51:04', '2023-06-29 07:51:04');


--
-- Extraindo dados da tabela `registrations`
--

INSERT INTO `registrations` (`id`, `season`, `fk_courses_id`, `fk_classes_id`, `fk_grades_id`, `fk_students_id`, `fk_schoolyears_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Manhã', 1, 1, 1, 1, 1, '2023-06-29 07:52:14', '2023-06-29 07:52:14', NULL),
(2, 'Manhã', 1, 1, 1, 2, 1, '2023-06-29 07:52:22', '2023-06-29 07:52:22', NULL),
(3, 'Manhã', 1, 1, 1, 3, 1, '2023-06-29 07:52:28', '2023-06-29 07:52:28', NULL),
(4, 'Manhã', 1, 1, 1, 4, 1, '2023-06-29 07:52:38', '2023-06-29 07:52:38', NULL),
(5, 'Manhã', 1, 1, 1, 6, 1, '2023-06-29 07:52:48', '2023-06-29 07:52:48', NULL),
(6, 'Manhã', 1, 1, 1, 10, 1, '2023-06-29 07:53:00', '2023-06-29 07:53:00', NULL);


--
-- Extraindo dados da tabela `exams`
--

INSERT INTO `exams` (`id`, `name`, `season`, `duration`, `start`, `end`, `fk_teachers_id`, `fk_classes_id`, `fk_courses_id`, `fk_grades_id`, `fk_subjects_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Exame de Mat', 'Manhã', '120min', '2023-07-03 09:54:00', '2023-07-04 00:00:00', 1, 1, 1, 1, 1, '2023-06-29 07:54:58', '2023-06-29 07:54:58', NULL);


--
-- Extraindo dados da tabela `tuitions`
--

INSERT INTO `tuitions` (`id`, `month`, `price`, `state`, `fk_students_id`, `fk_schoolyears_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Janeiro', 12000, 'Pago', 1, 1, NULL, '2023-06-29 07:56:12', '2023-06-29 07:56:12'),
(2, 'Fevereiro', 12000, 'Pago', 1, 1, NULL, '2023-06-29 07:56:19', '2023-06-29 07:56:19'),
(3, 'Abril', 12000, 'Pago', 1, 1, NULL, '2023-06-29 07:56:32', '2023-06-29 07:56:32'),
(4, 'Junho', 12000, 'Pendente', 1, 1, NULL, '2023-06-29 07:56:42', '2023-06-29 07:56:42'),
(5, 'Janeiro', 12000, 'Pago', 2, 1, NULL, '2023-06-29 07:56:50', '2023-06-29 07:56:50'),
(6, 'Março', 12000, 'Cancelado', 2, 1, NULL, '2023-06-29 07:57:09', '2023-06-29 07:57:09'),
(7, 'Janeiro', 12000, 'Cancelado', 4, 1, NULL, '2023-06-29 07:57:19', '2023-06-29 07:57:19'),
(8, 'Março', 12000, 'Cancelado', 4, 1, NULL, '2023-06-29 07:57:31', '2023-06-29 07:57:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
