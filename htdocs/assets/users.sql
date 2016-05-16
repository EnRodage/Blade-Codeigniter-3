SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `migrations` (`version`) VALUES
(1);

CREATE TABLE `users` (
  `user_id` int(5) UNSIGNED NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `user_login` varchar(80) NOT NULL,
  `user_email` varchar(80) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`user_id`, `user_name`, `user_login`, `user_email`, `user_password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', ENCRYPT('admin'), '2016-05-15 16:44:59', NULL);


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `users`
  MODIFY `user_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
