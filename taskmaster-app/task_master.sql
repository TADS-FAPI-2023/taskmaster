-- phpMyAdmin SQL Dump

-- version 5.2.1

-- https://www.phpmyadmin.net/

--

-- Host: 127.0.0.1

-- Tempo de geração: 01/10/2023 às 22:19

-- Versão do servidor: 10.4.28-MariaDB

-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Banco de dados: `task_master`

--

-- --------------------------------------------------------

--

-- Estrutura para tabela `files`

--


CREATE TABLE
    `files` (
        `id` int(11) NOT NULL,
        `filename` varchar(255) NOT NULL,
        `description` varchar(255) NOT NULL,
        `updated_at` datetime NOT NULL,
        `created_at` datetime NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;


--

-- Despejando dados para a tabela `files`

--

INSERT INTO
    `files` (
        `id`,
        `filename`,
        `description`,
        `updated_at`,
        `created_at`
    )
VALUES (
        14,
        'task_master.sql',
        'Banco',
        '2023-10-01 20:08:07',
        '2023-10-01 20:08:07'
    );

-- --------------------------------------------------------

--

-- Estrutura para tabela `projects`

--

CREATE TABLE
    `projects` (
        `id` int(11) NOT NULL,
        `name` varchar(255) NOT NULL,
        `description` text DEFAULT NULL,
        `status` varchar(50) DEFAULT NULL,
        `updated_at` datetime NOT NULL,
        `created_at` datetime NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Estrutura para tabela `tasks`

--

CREATE TABLE
    `tasks` (
        `id` int(11) NOT NULL,
        `name` varchar(255) NOT NULL,
        `type` varchar(50) DEFAULT NULL,
        `file` varchar(255) DEFAULT NULL,
        `description` text DEFAULT NULL,
        `finished` tinyint(1) DEFAULT NULL,
        `start_date` date DEFAULT NULL,
        `end_date` date DEFAULT NULL,
        `time_limit` datetime DEFAULT NULL,
        `difficulty` varchar(50) DEFAULT NULL,
        `updated_at` datetime NOT NULL,
        `created_at` datetime NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Estrutura para tabela `tasks_projects`

--

CREATE TABLE
    `tasks_projects` (
        `id` int(11) NOT NULL,
        `project_id` int(11) DEFAULT NULL,
        `task_id` int(11) DEFAULT NULL,
        `updated_at` datetime NOT NULL,
        `created_at` datetime NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Estrutura para tabela `tasks_users`

--

CREATE TABLE
    `tasks_users` (
        `id` int(11) NOT NULL,
        `user_id` int(11) DEFAULT NULL,
        `task_id` int(11) DEFAULT NULL,
        `updated_at` datetime NOT NULL,
        `created_at` datetime NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Estrutura para tabela `users`

--

CREATE TABLE
    `users` (
        `id` int(11) NOT NULL,
        `username` varchar(50) NOT NULL,
        `email` varchar(100) NOT NULL,
        `password` varchar(100) NOT NULL,
        `cpf` varchar(14) DEFAULT NULL,
        `is_admin` tinyint(1) DEFAULT NULL,
        `is_active` tinyint(1) DEFAULT NULL,
        `last_login` datetime DEFAULT NULL,
        `updated_at` datetime NOT NULL,
        `created_at` datetime NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Índices para tabelas despejadas

--

--

-- Índices de tabela `files`

--

ALTER TABLE `files` ADD PRIMARY KEY (`id`);

--

-- Índices de tabela `projects`

--

ALTER TABLE `projects` ADD PRIMARY KEY (`id`);

--

-- Índices de tabela `tasks`

--

ALTER TABLE `tasks` ADD PRIMARY KEY (`id`);

--

-- Índices de tabela `tasks_projects`

--

ALTER TABLE `tasks_projects`
ADD PRIMARY KEY (`id`),
ADD
    KEY `project_id` (`project_id`),
ADD KEY `task_id` (`task_id`);

--

-- Índices de tabela `tasks_users`

--

ALTER TABLE `tasks_users`
ADD PRIMARY KEY (`id`),
ADD KEY `user_id` (`user_id`),
ADD KEY `task_id` (`task_id`);

--

-- Índices de tabela `users`

--

ALTER TABLE `users`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `cpf` (`cpf`);

--

-- AUTO_INCREMENT para tabelas despejadas

--

--

-- AUTO_INCREMENT de tabela `files`

--

ALTER TABLE
    `files` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 16;

--

-- AUTO_INCREMENT de tabela `projects`

--

ALTER TABLE `projects` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT de tabela `tasks`

--

ALTER TABLE `tasks` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT de tabela `tasks_projects`

--

ALTER TABLE
    `tasks_projects` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT de tabela `tasks_users`

--

ALTER TABLE
    `tasks_users` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT de tabela `users`

--

ALTER TABLE `users` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--

-- Restrições para tabelas despejadas

--

--

-- Restrições para tabelas `tasks_projects`

--

ALTER TABLE `tasks_projects`
ADD
    CONSTRAINT `task_project_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
ADD
    CONSTRAINT `task_project_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

--

-- Restrições para tabelas `tasks_users`

--

ALTER TABLE `tasks_users`
ADD
    CONSTRAINT `task_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
ADD
    CONSTRAINT `task_user_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;
