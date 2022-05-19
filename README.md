# BASE DE DATOS
CREATE DATABASE `totality_laravel` /*!40100 COLLATE 'utf8_spanish_ci' */;
-- DATOS DE LA TABLA SALONES
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (1, 'PRIMERO GRADO', '2022-05-18 17:51:50', '2022-05-18 17:51:51');
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (2, 'SEGUNDO GRADO', '2022-05-18 17:51:59', '2022-05-18 17:52:00');
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (3, 'TERCERO GRADO', '2022-05-18 17:52:08', '2022-05-18 17:52:09');
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (4, 'CUARTO GRADO', '2022-05-18 17:52:19', '2022-05-18 17:52:20');
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (5, 'QUINTO GRADO', '2022-05-18 17:52:28', '2022-05-18 17:52:29');
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (6, 'SEXTO GRADO', '2022-05-18 17:52:42', '2022-05-18 17:52:43');
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (7, 'SEPTIMO GRADO', '2022-05-18 17:53:06', '2022-05-18 17:53:07');
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (8, 'OCTAVO GRADO', '2022-05-18 17:53:16', '2022-05-18 17:53:17');
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (9, 'NOVENO GRADO', '2022-05-18 17:53:44', '2022-05-18 17:53:45');
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (10, 'DECIMO GRADO', '2022-05-18 17:53:56', '2022-05-18 17:53:58');
INSERT INTO `salones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (11, 'DECIMO PRIMERO GRADO', '2022-05-18 17:54:09', '2022-05-18 17:54:09');
-- DATOS DE LA TABLA PROFESORES
INSERT INTO `profesores` (`id`, `nombre`, `asignatura`, `created_at`, `updated_at`) VALUES (1, 'CARLOS', 'TODAS', '2022-05-18 17:56:21', '2022-05-18 17:56:22');
INSERT INTO `profesores` (`id`, `nombre`, `asignatura`, `created_at`, `updated_at`) VALUES (2, 'ELIZABET', 'TODAS', '2022-05-18 17:56:44', '2022-05-18 17:56:45');
INSERT INTO `profesores` (`id`, `nombre`, `asignatura`, `created_at`, `updated_at`) VALUES (3, 'ANDREA', 'TODAS', '2022-05-18 17:57:05', '2022-05-18 17:57:06');
INSERT INTO `profesores` (`id`, `nombre`, `asignatura`, `created_at`, `updated_at`) VALUES (4, 'JUAN', 'TODAS', '2022-05-18 17:57:25', '2022-05-18 17:57:25');
INSERT INTO `profesores` (`id`, `nombre`, `asignatura`, `created_at`, `updated_at`) VALUES (5, 'LUCILA', 'TODAS', '2022-05-18 17:57:42', '2022-05-18 17:57:43');
INSERT INTO `profesores` (`id`, `nombre`, `asignatura`, `created_at`, `updated_at`) VALUES (6, 'YEFFER', 'TODAS', '2022-05-18 17:58:01', '2022-05-18 17:58:02');
INSERT INTO `profesores` (`id`, `nombre`, `asignatura`, `created_at`, `updated_at`) VALUES (7, 'CAMILO', 'TODAS', '2022-04-18 17:58:51', '2022-05-18 17:58:51');
INSERT INTO `profesores` (`id`, `nombre`, `asignatura`, `created_at`, `updated_at`) VALUES (8, 'YENNY', 'TODAS', '2022-05-18 17:59:17', '2022-05-18 17:59:18');
INSERT INTO `profesores` (`id`, `nombre`, `asignatura`, `created_at`, `updated_at`) VALUES (9, 'FABIAN', 'TODAS', '2022-05-18 17:59:45', '2022-05-18 17:59:46');
INSERT INTO `profesores` (`id`, `nombre`, `asignatura`, `created_at`, `updated_at`) VALUES (10, 'NANCY', 'TODAS', '2022-05-18 18:00:35', '2022-05-18 18:00:36');
-- DATOS DE LA TABLA ETARIO
INSERT INTO `etario` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (1, 'PRIMERA INFANCIA', '2022-05-18 18:03:23', '2022-05-18 18:03:24');
INSERT INTO `etario` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (2, 'INFANTE', '2022-05-18 18:03:25', '2022-05-18 18:03:25');
INSERT INTO `etario` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (3, 'PREADOLECENTE', '2022-05-18 18:03:44', '2022-05-18 18:03:44');
INSERT INTO `etario` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (4, 'ADOLECENTE', '2022-05-18 18:04:02', '2022-05-18 18:04:03');
INSERT INTO `etario` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (5, 'ADULTO', '2022-05-18 18:04:21', '2022-05-18 18:04:22');
-- DATOS DE LA TABLA CURSOS
INSERT INTO `cursos` (`id`, `nombre`, `fch_inicio`, `fch_fin`, `salon_id`, `profesor_id`, `created_at`, `updated_at`) VALUES (1, 'PRIMERO', '2022-05-18 18:07:21', '2022-05-18 18:07:22', 1, 3, '2022-05-18 18:07:40', '2022-05-18 18:07:41');
INSERT INTO `cursos` (`id`, `nombre`, `fch_inicio`, `fch_fin`, `salon_id`, `profesor_id`, `created_at`, `updated_at`) VALUES (2, 'SEGUNDO', '2022-05-18 18:08:19', '2022-05-18 18:08:20', 2, 2, '2022-05-18 18:08:35', '2022-05-18 18:08:35');
INSERT INTO `cursos` (`id`, `nombre`, `fch_inicio`, `fch_fin`, `salon_id`, `profesor_id`, `created_at`, `updated_at`) VALUES (3, 'TERCERO', '2022-05-18 18:08:48', '2022-05-18 18:08:49', 3, 2, '2022-05-18 18:09:02', '2022-05-18 18:09:03');
INSERT INTO `cursos` (`id`, `nombre`, `fch_inicio`, `fch_fin`, `salon_id`, `profesor_id`, `created_at`, `updated_at`) VALUES (4, 'CUARTO', '2022-05-18 18:09:16', '2022-05-18 18:09:16', 4, 9, '2022-05-18 18:09:28', '2022-05-18 18:09:29');
INSERT INTO `cursos` (`id`, `nombre`, `fch_inicio`, `fch_fin`, `salon_id`, `profesor_id`, `created_at`, `updated_at`) VALUES (5, 'QUINTO', '2022-05-18 18:09:38', '2022-05-18 18:09:39', 5, 1, '2022-05-18 18:09:50', '2022-05-18 18:09:51');
INSERT INTO `cursos` (`id`, `nombre`, `fch_inicio`, `fch_fin`, `salon_id`, `profesor_id`, `created_at`, `updated_at`) VALUES (6, 'SEXTO', '2022-05-18 18:09:59', '2022-05-18 18:10:00', 6, 3, '2022-05-18 18:10:12', '2022-05-18 18:10:12');
INSERT INTO `cursos` (`id`, `nombre`, `fch_inicio`, `fch_fin`, `salon_id`, `profesor_id`, `created_at`, `updated_at`) VALUES (7, 'SEPTIMO', '2022-05-18 18:10:21', '2022-05-18 18:10:22', 7, 10, '2022-05-18 18:10:35', '2022-05-18 18:10:36');
INSERT INTO `cursos` (`id`, `nombre`, `fch_inicio`, `fch_fin`, `salon_id`, `profesor_id`, `created_at`, `updated_at`) VALUES (8, 'OCTAVO', '2022-05-18 18:10:46', '2022-05-18 18:10:46', 8, 8, '2022-05-18 18:10:58', '2022-05-18 18:10:58');
INSERT INTO `cursos` (`id`, `nombre`, `fch_inicio`, `fch_fin`, `salon_id`, `profesor_id`, `created_at`, `updated_at`) VALUES (9, 'NOVENO', '2022-05-18 18:11:08', '2022-05-18 18:11:08', 9, 2, '2022-05-18 18:11:16', '2022-05-18 18:11:16');
INSERT INTO `cursos` (`id`, `nombre`, `fch_inicio`, `fch_fin`, `salon_id`, `profesor_id`, `created_at`, `updated_at`) VALUES (10, 'DECIMO', '2022-05-18 18:11:26', '2022-05-18 18:11:27', 10, 5, '2022-05-18 18:11:40', '2022-05-18 18:11:40');
INSERT INTO `cursos` (`id`, `nombre`, `fch_inicio`, `fch_fin`, `salon_id`, `profesor_id`, `created_at`, `updated_at`) VALUES (11, 'DECIMO PRIMERO', '2022-05-18 18:11:54', '2022-05-18 18:11:54', 11, 6, '2022-05-18 18:12:04', '2022-05-18 18:12:05');
