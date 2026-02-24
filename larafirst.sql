-- --------------------------------------------------------
-- Host:                         192.168.56.56
-- Server version:               8.0.35-0ubuntu0.22.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table laraafirst.cache: ~0 rows (approximately)

-- Dumping data for table laraafirst.cache_locks: ~0 rows (approximately)

-- Dumping data for table laraafirst.failed_jobs: ~0 rows (approximately)

-- Dumping data for table laraafirst.jobs: ~0 rows (approximately)

-- Dumping data for table laraafirst.job_batches: ~0 rows (approximately)

-- Dumping data for table laraafirst.migrations: ~9 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2025_08_23_093131_create_permission_tables', 1),
	(6, '2026_02_23_131830_create_products_table', 2),
	(7, '2026_02_23_132742_create_product_variants_table', 2),
	(8, '2026_02_23_133426_create_variant_prices_table', 2),
	(9, '2026_02_23_133656_create_variant_images_table', 2);

-- Dumping data for table laraafirst.model_has_permissions: ~0 rows (approximately)

-- Dumping data for table laraafirst.model_has_roles: ~0 rows (approximately)

-- Dumping data for table laraafirst.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table laraafirst.permissions: ~0 rows (approximately)

-- Dumping data for table laraafirst.personal_access_tokens: ~0 rows (approximately)

-- Dumping data for table laraafirst.products: ~3 rows (approximately)
INSERT INTO `products` (`id`, `name`, `slug`, `description`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'business cards', 'Create the best Business Cards online in a few easy steps.', 'Premium as standard Thicker than your average card, Original Business Cards set a new standard...', NULL, '2026-02-23 22:02:44', '2026-02-23 22:02:45'),
	(7, 'postcards', 'postcards', 'xyz', NULL, '2026-02-24 09:00:54', '2026-02-24 09:00:54'),
	(8, 'booklet', 'create the best booklet', 'abc', NULL, '2026-02-24 09:25:09', '2026-02-24 09:25:09');

-- Dumping data for table laraafirst.product_variants: ~5 rows (approximately)
INSERT INTO `product_variants` (`id`, `product_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Original Business Cards', 'Premium as standard Thicker than your average card, Original Business Cards set a new standard...', '2026-02-23 22:33:16', '2026-02-23 22:33:17'),
	(2, 1, 'Luxe Business Cards', 'Extraordinarily luxury Business Cards Luxury Business Cards crafted from four layers of archival-...', '2026-02-23 22:34:26', '2026-02-23 22:34:27'),
	(3, 1, 'Super Business Cards', 'Impressively strong Business Cards. Non-bendy they may be, but Super Business Cards have a slim p...', '2026-02-23 22:35:07', '2026-02-23 22:35:09'),
	(10, 8, 'Perfect Bound Booklets', 'Pages are glued to the spine, offering a thicker, book-like appearance.', '2026-02-24 09:33:18', '2026-02-24 09:33:18'),
	(11, 8, 'Saddle-Stitch Booklets', 'Staples along the spine, ideal for 8-64 pages (manuals, catalogs, programs).', '2026-02-24 10:10:12', '2026-02-24 10:10:12');

-- Dumping data for table laraafirst.roles: ~0 rows (approximately)

-- Dumping data for table laraafirst.role_has_permissions: ~0 rows (approximately)

-- Dumping data for table laraafirst.sessions: ~0 rows (approximately)

-- Dumping data for table laraafirst.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'happy vekariya', 'happy@gmail.com', '2026-02-23 13:15:48', '$2y$10$5SW5Ulf/blHw5G7mnSfMtu5bUoex7VgCF.UpSA2F2aynIdxQfC9Ra', '3byxfOAXPVax7bvHz2TSc77ptBnUFlQgLwbkj5B70mrGzChZ2W31IMsEh4VA', '2026-02-23 13:14:56', '2026-02-24 05:25:17'),
	(2, 'hepi vekariya', 'hepi@gmail.com', '2026-02-24 05:26:14', '$2y$10$Jmk3DVzwBaSY3yHZ9KJSPOxLxVEkonTqPCBn/t87L0Vo6PDNnhb7K', NULL, '2026-02-24 05:26:01', '2026-02-24 05:26:14');

-- Dumping data for table laraafirst.variant_images: ~5 rows (approximately)
INSERT INTO `variant_images` (`id`, `product_variant_id`, `image`, `created_at`, `updated_at`) VALUES
	(1, 1, 'images/products/card.png', '2026-02-23 22:49:07', '2026-02-23 22:49:08'),
	(2, 2, 'images/products/card-2.png', '2026-02-24 11:46:11', '2026-02-24 11:46:12'),
	(3, 3, 'images/products/card-3.png', '2026-02-24 11:57:34', '2026-02-24 11:57:35'),
	(4, 11, 'images/products/booklet.png', '2026-02-24 15:55:29', '2026-02-24 15:55:30'),
	(5, 10, 'images/products/booklet-1.png', '2026-02-24 15:56:13', '2026-02-24 15:56:14');

-- Dumping data for table laraafirst.variant_prices: ~5 rows (approximately)
INSERT INTO `variant_prices` (`id`, `product_variant_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, 32.00, '2026-02-24 06:33:00', '2026-02-24 06:33:00'),
	(2, 2, 1, 13.00, '2026-02-24 12:33:41', '2026-02-24 12:33:42'),
	(3, 3, 2, 22.00, '2026-02-24 12:35:44', '2026-02-24 12:35:45'),
	(9, 10, 1, 14.00, '2026-02-24 09:33:18', '2026-02-24 09:33:18'),
	(10, 11, 3, 14.00, '2026-02-24 10:10:12', '2026-02-24 10:10:12');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
