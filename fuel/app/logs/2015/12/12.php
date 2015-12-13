<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2015-12-12 01:31:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 01:31:14 --> Notice - Array to string conversion in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\model\Articles.php on line 25
WARNING - 2015-12-12 01:32:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 01:32:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 01:36:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 01:36:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 01:36:45 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COALESCE(A.text_en, text_en) AS text
U.username as user_name
FROM articles AS ' at line 4 with query: "SELECT
A.*,
COALESCE(A.name_en, name_en) AS name
COALESCE(A.text_en, text_en) AS text
U.username as user_name
FROM articles AS A
LEFT JOIN users AS U
ON U.id = A.user_id
WHERE is_deleted = false
ORDER BY A.id DESC
LIMIT 10
OFFSET 0" in Q:\OpenServer\domains\fair-price-fuel\fuel\core\classes\database\pdo\connection.php on line 272
WARNING - 2015-12-12 01:37:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 01:37:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 01:37:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 01:37:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 01:37:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:29:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:29:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:29:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:29:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:29:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:29:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:29:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:32:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:32:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:33:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:36:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:36:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:36:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:36:43 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 02:36:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:36:44 --> Notice - Undefined property: Controller_Ajax_Articles::$lang in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\controller\ajax\Articles.php on line 51
WARNING - 2015-12-12 02:37:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:37:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:37:54 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 02:37:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:37:58 --> Fatal Error - Call to a member function get() on a non-object in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\controller\ajax\Baseajax.php on line 11
WARNING - 2015-12-12 02:38:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:38:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:38:47 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 02:38:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:38:49 --> Error - In table articles. Not supported field: text_en in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\model\Base.php on line 56
WARNING - 2015-12-12 02:39:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:39:20 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 02:39:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:39:25 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 02:39:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:39:28 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 02:39:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:39:30 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 02:39:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:39:32 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 02:39:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:39:34 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 02:39:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 02:39:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 02:39:36 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:37:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:39:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:39:42 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:44:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:44:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:44:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:44:48 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:44:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:44:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:44:49 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'text_ua' in 'field list' with query: "SELECT
sys_name,
COALESCE(text_ua, text_en) AS text
FROM translations" in Q:\OpenServer\domains\fair-price-fuel\fuel\core\classes\database\pdo\connection.php on line 272
WARNING - 2015-12-12 16:45:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:45:54 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'text_ua' in 'field list' with query: "SELECT
sys_name,
COALESCE(text_ua, text_en) AS text
FROM translations" in Q:\OpenServer\domains\fair-price-fuel\fuel\core\classes\database\pdo\connection.php on line 272
WARNING - 2015-12-12 16:47:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:47:04 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:47:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:47:08 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:47:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:47:11 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:47:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:47:13 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:47:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:47:15 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:47:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:47:17 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:47:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:47:19 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:47:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:47:35 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:47:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:47:37 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:47:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:47:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 16:47:39 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 16:49:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:49:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:51:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:51:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:52:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:52:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:52:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:52:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:52:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:52:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:53:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:55:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:55:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:56:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:56:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:56:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:57:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:57:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:57:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:58:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:58:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:59:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:59:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:59:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:59:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:59:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:59:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:59:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 16:59:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:00:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:00:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:23:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:23:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:24:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:24:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:24:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:24:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:25:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:25:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:25:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:26:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:26:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:27:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:27:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:29:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:43:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:52:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:52:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 17:52:58 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 17:53:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:53:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:53:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:53:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:53:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:53:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:53:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 17:53:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:10:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:12:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:13:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:13:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:13:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:13:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:13:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:13:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:15:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:15:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:16:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:20:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:21:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:22:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:23:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:23:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 18:23:10 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 18:23:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:23:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 18:23:39 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 18:23:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:23:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 18:23:41 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 18:23:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 18:23:44 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 18:23:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:23:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 18:23:54 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 18:23:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 18:23:57 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 18:38:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 18:38:24 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 18:49:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:49:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:49:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 18:49:17 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 18:59:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 18:59:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 18:59:52 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:01:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:01:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:01:40 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:01:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:01:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:01:46 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:03:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:03:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:03:10 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:05:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:05:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:05:26 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:06:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:06:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:06:30 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:07:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:07:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:07:31 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:07:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:07:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:07:42 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:08:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:08:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:08:30 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:09:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:09:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:09:09 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:09:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:09:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:09:15 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:11:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:11:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:11:00 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:11:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:11:07 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:11:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:11:46 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:12:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:12:00 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:12:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:12:05 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:12:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:12:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:12:08 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:12:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:12:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 19:12:12 --> Error - Error Processing Request main/404 in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\AuthModule.php on line 231
WARNING - 2015-12-12 19:12:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 19:13:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:28:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:28:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:29:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:29:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:29:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:29:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:52:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:52:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:53:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:53:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:53:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:53:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:53:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:53:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:53:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:53:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:53:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:53:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:55:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:55:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:55:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:55:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:56:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:56:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:56:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 20:56:50 --> Parsing Error - syntax error, unexpected 'if' (T_IF) in Q:\OpenServer\domains\fair-price-fuel\fuel\app\views\user_edit.php on line 63
WARNING - 2015-12-12 20:56:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:57:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:57:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:57:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 20:57:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:13:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:13:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:13:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:13:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2015-12-12 21:13:49 --> Parsing Error - syntax error, unexpected 'Model_Avatars' (T_STRING) in Q:\OpenServer\domains\fair-price-fuel\fuel\app\classes\controller\ajax\Users.php on line 149
WARNING - 2015-12-12 21:14:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:14:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:15:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:15:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:16:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:16:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:16:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:16:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:16:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:16:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 21:16:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:15:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:16:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:16:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:29:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:29:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:29:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:30:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:31:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:32:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:32:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:32:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:34:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:35:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:35:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:36:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:36:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:36:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:36:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:37:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:37:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:37:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:37:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:37:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:37:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:38:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:38:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:41:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:41:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:42:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:42:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:43:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:43:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:45:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:45:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:46:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2015-12-12 23:46:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
