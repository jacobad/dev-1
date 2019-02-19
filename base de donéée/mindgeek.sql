-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 19 Février 2019 à 16:23
-- Version du serveur :  5.7.25-0ubuntu0.16.04.2
-- Version de PHP :  7.0.33-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mindgeek`
--

-- --------------------------------------------------------

--
-- Structure de la table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Un commentateur WordPress', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2019-01-22 14:20:05', '2019-01-22 13:20:05', 'Bonjour, ceci est un commentaire.\nPour débuter avec la modération, la modification et la suppression de commentaires, veuillez visiter l’écran des Commentaires dans le Tableau de bord.\nLes avatars des personnes qui commentent arrivent depuis <a href="https://gravatar.com">Gravatar</a>.', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/wordpress', 'yes'),
(2, 'home', 'http://localhost/wordpress', 'yes'),
(3, 'blogname', '', 'yes'),
(4, 'blogdescription', '', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'admin@mindgeek.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j F Y', 'yes'),
(24, 'time_format', 'G \\h i \\m\\i\\n', 'yes'),
(25, 'links_updated_date_format', 'j F Y G \\h i \\m\\i\\n', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:89:{s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:21:"^index.php/wp-json/?$";s:22:"index.php?rest_route=/";s:24:"^index.php/wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:20:"search/(.+)/embed/?$";s:34:"index.php?s=$matches[1]&embed=true";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:58:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:68:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:88:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:64:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:53:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$";s:91:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$";s:85:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1";s:77:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:65:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]";s:61:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]";s:47:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:57:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:77:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:53:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]";s:51:"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]";s:38:"([0-9]{4})/comment-page-([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&cpage=$matches[2]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:1:{i:0;s:31:"wp-google-maps/wpGoogleMaps.php";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:2:{i:0;s:65:"/home/wabap33/sites/wordpress/wp-content/themes/oblique/style.css";i:1;s:0:"";}', 'no'),
(40, 'template', 'mindgeek-base', 'yes'),
(41, 'stylesheet', 'mindgeek-base', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '43764', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '1', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'posts', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:"title";s:0:"";s:5:"count";i:0;s:12:"hierarchical";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', 'Europe/Paris', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '0', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '33', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'show_comments_cookies_opt_in', '0', 'yes'),
(93, 'initial_db_version', '43764', 'yes'),
(94, 'wp_user_roles', 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:61:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}', 'yes'),
(95, 'fresh_site', '0', 'yes'),
(96, 'WPLANG', 'fr_FR', 'yes'),
(97, 'widget_search', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(98, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(99, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(100, 'widget_archives', 'a:2:{i:2;a:3:{s:5:"title";s:0:"";s:5:"count";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(101, 'widget_meta', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(102, 'sidebars_widgets', 'a:2:{s:19:"wp_inactive_widgets";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:13:"array_version";i:3;}', 'yes'),
(103, 'widget_pages', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(104, 'widget_calendar', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(105, 'widget_media_audio', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(106, 'widget_media_image', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(107, 'widget_media_gallery', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(108, 'widget_media_video', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(109, 'widget_tag_cloud', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(110, 'widget_nav_menu', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(111, 'widget_custom_html', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(112, 'cron', 'a:5:{i:1548256806;a:1:{s:34:"wp_privacy_delete_old_export_files";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:6:"hourly";s:4:"args";a:0:{}s:8:"interval";i:3600;}}}i:1548292806;a:3:{s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1548336023;a:2:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}s:25:"delete_expired_transients";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1548337374;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}s:7:"version";i:2;}', 'yes'),
(113, 'theme_mods_twentynineteen', 'a:2:{s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1548165849;s:4:"data";a:2:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}}}}', 'yes'),
(124, '_site_transient_timeout_browser_4b955584e50caaad19332d9dfaa06fa7', '1548768024', 'no'),
(125, '_site_transient_browser_4b955584e50caaad19332d9dfaa06fa7', 'a:10:{s:4:"name";s:6:"Chrome";s:7:"version";s:13:"69.0.3497.100";s:8:"platform";s:5:"Linux";s:10:"update_url";s:29:"https://www.google.com/chrome";s:7:"img_src";s:43:"http://s.w.org/images/browsers/chrome.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/chrome.png?1";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}', 'no'),
(140, 'can_compress_scripts', '1', 'no'),
(147, 'current_theme', 'Mindgeek', 'yes'),
(148, 'theme_mods_oblique', 'a:4:{i:0;b:0;s:18:"nav_menu_locations";a:0:{}s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1548168100;s:4:"data";a:2:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}}}}', 'yes'),
(149, 'theme_switched', '', 'yes'),
(150, '_transient_timeout_plugin_slugs', '1548252392', 'no'),
(151, '_transient_plugin_slugs', 'a:2:{i:0;s:19:"akismet/akismet.php";i:1;s:9:"hello.php";}', 'no'),
(152, 'recently_activated', 'a:0:{}', 'yes'),
(157, 'WPGMZA_OTHER_SETTINGS', 'a:7:{s:30:"wpgmza_settings_map_streetview";s:3:"yes";s:24:"wpgmza_settings_map_zoom";s:3:"yes";s:23:"wpgmza_settings_map_pan";s:3:"yes";s:24:"wpgmza_settings_map_type";s:3:"yes";s:27:"wpgmza_settings_marker_pull";s:1:"0";s:18:"wpgmza_maps_engine";s:11:"google-maps";s:30:"wpgmza_maps_engine_dialog_done";b:1;}', 'yes'),
(158, 'wpgmza_temp_api', 'AIzaSyChPphumyabdfggISDNBuGOlGVBgEvZnGE', 'yes'),
(159, 'wpgmza_xml_location', '{uploads_dir}/wp-google-maps/', 'yes'),
(160, 'wpgmza_xml_url', '{uploads_url}/wp-google-maps/', 'yes'),
(161, 'wpgmza_db_version', '7.10.58', 'yes'),
(162, 'wpgmaps_current_version', '7.10.58', 'yes'),
(163, 'WPGM_V6_FIRST_TIME', '1', 'yes'),
(164, 'widget_wpgmza_map_widget', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(165, 'WPGMZA_FIRST_TIME', '7.10.58', 'yes'),
(166, 'wpgmza_stats', 'a:2:{s:15:"list_maps_basic";a:3:{s:5:"views";i:3;s:13:"last_accessed";s:19:"2019-01-22 14:11:02";s:14:"first_accessed";s:19:"2019-01-22 14:09:22";}s:9:"dashboard";a:3:{s:5:"views";i:3;s:13:"last_accessed";s:19:"2019-01-22 14:10:51";s:14:"first_accessed";s:19:"2019-01-22 14:09:37";}}', 'yes'),
(167, 'WPGMZA_SETTINGS', 'a:10:{s:24:"map_default_starting_lat";s:9:"5.3599517";s:24:"map_default_starting_lng";s:18:"-4.008256299999971";s:18:"map_default_height";s:3:"400";s:17:"map_default_width";s:3:"100";s:16:"map_default_zoom";i:2;s:20:"map_default_max_zoom";i:1;s:16:"map_default_type";i:1;s:21:"map_default_alignment";i:1;s:22:"map_default_width_type";s:2:"\\%";s:23:"map_default_height_type";s:2:"px";}', 'yes'),
(175, 'theme_mods_quality', 'a:4:{i:0;b:0;s:18:"nav_menu_locations";a:0:{}s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1548170826;s:4:"data";a:4:{s:19:"wp_inactive_widgets";a:0:{}s:15:"sidebar-primary";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:18:"footer-widget-area";a:0:{}s:11:"woocommerce";a:0:{}}}}', 'yes'),
(181, 'quality_pro_options', 'a:1:{s:17:"upload_image_logo";s:62:"http://localhost/wordpress/wp-content/uploads/2019/01/logo.png";}', 'yes'),
(182, 'nav_menu_options', 'a:1:{s:8:"auto_add";a:1:{i:0;i:3;}}', 'yes'),
(190, 'theme_mods_stacy', 'a:5:{i:0;b:0;s:18:"nav_menu_locations";a:0:{}s:18:"custom_css_post_id";i:-1;s:11:"custom_logo";i:31;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1548171509;s:4:"data";a:7:{s:19:"wp_inactive_widgets";a:0:{}s:15:"sidebar_primary";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:23:"footer_widget_area_left";a:0:{}s:25:"footer_widget_area_center";a:0:{}s:24:"footer_widget_area_right";a:0:{}s:11:"woocommerce";a:0:{}s:24:"wdl_contact_page_sidebar";a:0:{}}}}', 'yes'),
(193, 'category_children', 'a:0:{}', 'yes'),
(197, 'theme_mods_multiple-business', 'a:10:{i:0;b:0;s:18:"nav_menu_locations";a:1:{s:7:"primary";i:3;}s:18:"custom_css_post_id";i:-1;s:16:"background_image";s:68:"http://localhost/wordpress/wp-content/uploads/2019/01/background.jpg";s:21:"background_position_x";s:6:"center";s:21:"background_position_y";s:6:"center";s:12:"header_image";s:76:"http://localhost/wordpress/wp-content/uploads/2019/01/cropped-background.jpg";s:17:"header_image_data";O:8:"stdClass":5:{s:13:"attachment_id";i:38;s:3:"url";s:76:"http://localhost/wordpress/wp-content/uploads/2019/01/cropped-background.jpg";s:13:"thumbnail_url";s:76:"http://localhost/wordpress/wp-content/uploads/2019/01/cropped-background.jpg";s:6:"height";i:851;s:5:"width";i:1920;}s:11:"custom_logo";i:40;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1548237374;s:4:"data";a:6:{s:19:"wp_inactive_widgets";a:0:{}s:13:"right-sidebar";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:34:"multiple-business-footer-sidebar-1";a:0:{}s:34:"multiple-business-footer-sidebar-2";a:0:{}s:34:"multiple-business-footer-sidebar-3";a:0:{}s:34:"multiple-business-footer-sidebar-4";a:0:{}}}}', 'yes'),
(207, 'theme_mods_Green Office', 'a:4:{i:0;b:0;s:18:"nav_menu_locations";a:0:{}s:16:"sidebars_widgets";a:2:{s:4:"time";i:1548251836;s:4:"data";a:1:{s:19:"wp_inactive_widgets";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}}}s:18:"custom_css_post_id";i:-1;}', 'yes'),
(227, '_site_transient_update_core', 'O:8:"stdClass":4:{s:7:"updates";a:1:{i:0;O:8:"stdClass":10:{s:8:"response";s:6:"latest";s:8:"download";s:65:"https://downloads.wordpress.org/release/fr_FR/wordpress-5.0.3.zip";s:6:"locale";s:5:"fr_FR";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:65:"https://downloads.wordpress.org/release/fr_FR/wordpress-5.0.3.zip";s:10:"no_content";b:0;s:11:"new_bundled";b:0;s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"5.0.3";s:7:"version";s:5:"5.0.3";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"5.0";s:15:"partial_version";s:0:"";}}s:12:"last_checked";i:1548251817;s:15:"version_checked";s:5:"5.0.3";s:12:"translations";a:0:{}}', 'no'),
(228, '_site_transient_update_themes', 'O:8:"stdClass":4:{s:12:"last_checked";i:1548256022;s:7:"checked";a:10:{s:13:"Green Office ";s:3:"1.0";s:13:"mindgeek-base";s:3:"1.1";s:17:"multiple-business";s:5:"1.0.1";s:7:"oblique";s:6:"2.0.18";s:7:"quality";s:5:"2.2.7";s:10:"spicepress";s:5:"1.5.5";s:5:"stacy";s:7:"1.2.5.2";s:14:"twentynineteen";s:3:"1.2";s:15:"twentyseventeen";s:3:"2.0";s:13:"twentysixteen";s:3:"1.8";}s:8:"response";a:0:{}s:12:"translations";a:5:{i:0;a:7:{s:4:"type";s:5:"theme";s:4:"slug";s:7:"oblique";s:8:"language";s:5:"fr_FR";s:7:"version";s:6:"2.0.18";s:7:"updated";s:19:"2017-06-27 09:19:28";s:7:"package";s:74:"https://downloads.wordpress.org/translation/theme/oblique/2.0.18/fr_FR.zip";s:10:"autoupdate";b:1;}i:1;a:7:{s:4:"type";s:5:"theme";s:4:"slug";s:7:"quality";s:8:"language";s:5:"fr_FR";s:7:"version";s:5:"1.9.7";s:7:"updated";s:19:"2018-02-26 14:33:58";s:7:"package";s:73:"https://downloads.wordpress.org/translation/theme/quality/1.9.7/fr_FR.zip";s:10:"autoupdate";b:1;}i:2;a:7:{s:4:"type";s:5:"theme";s:4:"slug";s:10:"spicepress";s:8:"language";s:5:"fr_FR";s:7:"version";s:5:"1.5.1";s:7:"updated";s:19:"2018-07-09 09:05:28";s:7:"package";s:76:"https://downloads.wordpress.org/translation/theme/spicepress/1.5.1/fr_FR.zip";s:10:"autoupdate";b:1;}i:3;a:7:{s:4:"type";s:5:"theme";s:4:"slug";s:5:"stacy";s:8:"language";s:5:"fr_FR";s:7:"version";s:3:"1.2";s:7:"updated";s:19:"2018-06-07 10:21:25";s:7:"package";s:69:"https://downloads.wordpress.org/translation/theme/stacy/1.2/fr_FR.zip";s:10:"autoupdate";b:1;}i:4;a:7:{s:4:"type";s:5:"theme";s:4:"slug";s:14:"twentynineteen";s:8:"language";s:5:"fr_FR";s:7:"version";s:3:"1.2";s:7:"updated";s:19:"2019-01-10 12:30:55";s:7:"package";s:78:"https://downloads.wordpress.org/translation/theme/twentynineteen/1.2/fr_FR.zip";s:10:"autoupdate";b:1;}}}', 'no'),
(229, '_site_transient_update_plugins', 'O:8:"stdClass":5:{s:12:"last_checked";i:1548251818;s:7:"checked";a:3:{s:19:"akismet/akismet.php";s:3:"4.1";s:9:"hello.php";s:5:"1.7.1";s:31:"wp-google-maps/wpGoogleMaps.php";s:7:"7.10.58";}s:8:"response";a:0:{}s:12:"translations";a:1:{i:0;a:7:{s:4:"type";s:6:"plugin";s:4:"slug";s:11:"hello-dolly";s:8:"language";s:5:"fr_FR";s:7:"version";s:3:"1.6";s:7:"updated";s:19:"2018-04-27 10:03:32";s:7:"package";s:76:"https://downloads.wordpress.org/translation/plugin/hello-dolly/1.6/fr_FR.zip";s:10:"autoupdate";b:1;}}s:9:"no_update";a:3:{s:19:"akismet/akismet.php";O:8:"stdClass":9:{s:2:"id";s:21:"w.org/plugins/akismet";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:3:"4.1";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:54:"https://downloads.wordpress.org/plugin/akismet.4.1.zip";s:5:"icons";a:2:{s:2:"2x";s:59:"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272";s:2:"1x";s:59:"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272";}s:7:"banners";a:1:{s:2:"1x";s:61:"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904";}s:11:"banners_rtl";a:0:{}}s:9:"hello.php";O:8:"stdClass":9:{s:2:"id";s:25:"w.org/plugins/hello-dolly";s:4:"slug";s:11:"hello-dolly";s:6:"plugin";s:9:"hello.php";s:11:"new_version";s:3:"1.6";s:3:"url";s:42:"https://wordpress.org/plugins/hello-dolly/";s:7:"package";s:58:"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip";s:5:"icons";a:2:{s:2:"2x";s:63:"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=969907";s:2:"1x";s:63:"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=969907";}s:7:"banners";a:1:{s:2:"1x";s:65:"https://ps.w.org/hello-dolly/assets/banner-772x250.png?rev=478342";}s:11:"banners_rtl";a:0:{}}s:31:"wp-google-maps/wpGoogleMaps.php";O:8:"stdClass":9:{s:2:"id";s:28:"w.org/plugins/wp-google-maps";s:4:"slug";s:14:"wp-google-maps";s:6:"plugin";s:31:"wp-google-maps/wpGoogleMaps.php";s:11:"new_version";s:7:"7.10.58";s:3:"url";s:45:"https://wordpress.org/plugins/wp-google-maps/";s:7:"package";s:57:"https://downloads.wordpress.org/plugin/wp-google-maps.zip";s:5:"icons";a:2:{s:2:"2x";s:66:"https://ps.w.org/wp-google-maps/assets/icon-256x256.png?rev=970398";s:2:"1x";s:66:"https://ps.w.org/wp-google-maps/assets/icon-128x128.png?rev=970398";}s:7:"banners";a:1:{s:2:"1x";s:68:"https://ps.w.org/wp-google-maps/assets/banner-772x250.jpg?rev=792293";}s:11:"banners_rtl";a:0:{}}}}', 'no'),
(231, 'theme_mods_mindgeek-base', 'a:3:{i:0;b:0;s:18:"nav_menu_locations";a:0:{}s:18:"custom_css_post_id";i:-1;}', 'yes'),
(235, '_site_transient_timeout_theme_roots', '1548257821', 'no'),
(236, '_site_transient_theme_roots', 'a:11:{s:13:"Green Office ";s:7:"/themes";s:12:"green-office";s:7:"/themes";s:13:"mindgeek-base";s:7:"/themes";s:17:"multiple-business";s:7:"/themes";s:7:"oblique";s:7:"/themes";s:7:"quality";s:7:"/themes";s:10:"spicepress";s:7:"/themes";s:5:"stacy";s:7:"/themes";s:14:"twentynineteen";s:7:"/themes";s:15:"twentyseventeen";s:7:"/themes";s:13:"twentysixteen";s:7:"/themes";}', 'no');

-- --------------------------------------------------------

--
-- Structure de la table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 5, '_edit_lock', '1548254860:1'),
(6, 7, '_wp_attached_file', '2019/01/paper.png'),
(7, 7, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:500;s:6:"height";i:593;s:4:"file";s:17:"2019/01/paper.png";s:5:"sizes";a:2:{s:9:"thumbnail";a:4:{s:4:"file";s:17:"paper-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:17:"paper-253x300.png";s:5:"width";i:253;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(8, 10, '_wp_attached_file', '2019/01/background.jpg'),
(9, 10, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1920;s:6:"height";i:933;s:4:"file";s:22:"2019/01/background.jpg";s:5:"sizes";a:5:{s:9:"thumbnail";a:4:{s:4:"file";s:22:"background-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:22:"background-300x146.jpg";s:5:"width";i:300;s:6:"height";i:146;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:22:"background-768x373.jpg";s:5:"width";i:768;s:6:"height";i:373;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:23:"background-1024x498.jpg";s:5:"width";i:1024;s:6:"height";i:498;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:23:"background-1568x762.jpg";s:5:"width";i:1568;s:6:"height";i:762;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:3:"1.2";s:6:"credit";s:15:"Dario Lo Presti";s:6:"camera";s:20:"Canon EOS 5D Mark II";s:7:"caption";s:56:"Network servers in a data center. Swallow depth of Field";s:17:"created_timestamp";s:10:"1298995681";s:9:"copyright";s:11:"DLP Network";s:12:"focal_length";s:2:"50";s:3:"iso";s:4:"1250";s:13:"shutter_speed";s:5:"0.004";s:5:"title";s:56:"Network servers in a data center. Swallow depth of Field";s:11:"orientation";s:1:"1";s:8:"keywords";a:0:{}}}'),
(12, 2, '_edit_lock', '1548165447:1'),
(13, 13, '_edit_lock', '1548168525:1'),
(14, 14, '_wp_attached_file', '2019/01/logo.png'),
(15, 14, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:132;s:6:"height";i:120;s:4:"file";s:16:"2019/01/logo.png";s:5:"sizes";a:0:{}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(16, 15, '_wp_trash_meta_status', 'publish'),
(17, 15, '_wp_trash_meta_time', '1548168748'),
(19, 16, '_customize_changeset_uuid', '47e3df30-cf15-4dba-a9bf-9744e23c1ca2'),
(20, 17, '_edit_lock', '1548169007:1'),
(22, 18, '_customize_changeset_uuid', '47e3df30-cf15-4dba-a9bf-9744e23c1ca2'),
(24, 19, '_customize_changeset_uuid', '47e3df30-cf15-4dba-a9bf-9744e23c1ca2'),
(26, 20, '_customize_changeset_uuid', '47e3df30-cf15-4dba-a9bf-9744e23c1ca2'),
(27, 25, '_menu_item_type', 'post_type'),
(28, 25, '_menu_item_menu_item_parent', '0'),
(29, 25, '_menu_item_object_id', '16'),
(30, 25, '_menu_item_object', 'page'),
(31, 25, '_menu_item_target', ''),
(32, 25, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(33, 25, '_menu_item_xfn', ''),
(34, 25, '_menu_item_url', ''),
(35, 26, '_menu_item_type', 'custom'),
(36, 26, '_menu_item_menu_item_parent', '0'),
(37, 26, '_menu_item_object_id', '26'),
(38, 26, '_menu_item_object', 'custom'),
(39, 26, '_menu_item_target', ''),
(40, 26, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(41, 26, '_menu_item_xfn', ''),
(42, 26, '_menu_item_url', 'http://localhost/wordpress'),
(43, 27, '_menu_item_type', 'post_type'),
(44, 27, '_menu_item_menu_item_parent', '0'),
(45, 27, '_menu_item_object_id', '18'),
(46, 27, '_menu_item_object', 'page'),
(47, 27, '_menu_item_target', ''),
(48, 27, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(49, 27, '_menu_item_xfn', ''),
(50, 27, '_menu_item_url', ''),
(51, 28, '_menu_item_type', 'post_type'),
(52, 28, '_menu_item_menu_item_parent', '0'),
(53, 28, '_menu_item_object_id', '19'),
(54, 28, '_menu_item_object', 'page'),
(55, 28, '_menu_item_target', ''),
(56, 28, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(57, 28, '_menu_item_xfn', ''),
(58, 28, '_menu_item_url', ''),
(59, 29, '_menu_item_type', 'post_type'),
(60, 29, '_menu_item_menu_item_parent', '0'),
(61, 29, '_menu_item_object_id', '20'),
(62, 29, '_menu_item_object', 'page'),
(63, 29, '_menu_item_target', ''),
(64, 29, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(65, 29, '_menu_item_xfn', ''),
(66, 29, '_menu_item_url', ''),
(67, 17, '_wp_trash_meta_status', 'publish'),
(68, 17, '_wp_trash_meta_time', '1548169033'),
(70, 30, '_customize_restore_dismissed', '1'),
(71, 31, '_wp_attached_file', '2019/01/cropped-logo.png'),
(72, 31, '_wp_attachment_context', 'custom-logo'),
(73, 31, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:210;s:6:"height";i:190;s:4:"file";s:24:"2019/01/cropped-logo.png";s:5:"sizes";a:1:{s:9:"thumbnail";a:4:{s:4:"file";s:24:"cropped-logo-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(74, 32, '_wp_trash_meta_status', 'publish'),
(75, 32, '_wp_trash_meta_time', '1548170948'),
(76, 33, '_wp_attached_file', '2019/01/cropped-logo-1.png'),
(77, 33, '_wp_attachment_context', 'site-icon'),
(78, 33, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:512;s:6:"height";i:512;s:4:"file";s:26:"2019/01/cropped-logo-1.png";s:5:"sizes";a:6:{s:9:"thumbnail";a:4:{s:4:"file";s:26:"cropped-logo-1-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:26:"cropped-logo-1-300x300.png";s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:9:"image/png";}s:13:"site_icon-270";a:4:{s:4:"file";s:26:"cropped-logo-1-270x270.png";s:5:"width";i:270;s:6:"height";i:270;s:9:"mime-type";s:9:"image/png";}s:13:"site_icon-192";a:4:{s:4:"file";s:26:"cropped-logo-1-192x192.png";s:5:"width";i:192;s:6:"height";i:192;s:9:"mime-type";s:9:"image/png";}s:13:"site_icon-180";a:4:{s:4:"file";s:26:"cropped-logo-1-180x180.png";s:5:"width";i:180;s:6:"height";i:180;s:9:"mime-type";s:9:"image/png";}s:12:"site_icon-32";a:4:{s:4:"file";s:24:"cropped-logo-1-32x32.png";s:5:"width";i:32;s:6:"height";i:32;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(79, 34, '_edit_lock', '1548170964:1'),
(80, 34, '_wp_trash_meta_status', 'publish'),
(81, 34, '_wp_trash_meta_time', '1548170965'),
(82, 20, '_edit_lock', '1548171187:1'),
(83, 10, '_wp_attachment_is_custom_background', 'multiple-business'),
(84, 36, '_wp_trash_meta_status', 'publish'),
(85, 36, '_wp_trash_meta_time', '1548171768'),
(86, 37, '_wp_trash_meta_status', 'publish'),
(87, 37, '_wp_trash_meta_time', '1548171788'),
(88, 38, '_wp_attached_file', '2019/01/cropped-background.jpg'),
(89, 38, '_wp_attachment_context', 'custom-header'),
(90, 38, '_wp_attachment_metadata', 'a:6:{s:5:"width";i:1920;s:6:"height";i:851;s:4:"file";s:30:"2019/01/cropped-background.jpg";s:5:"sizes";a:9:{s:9:"thumbnail";a:4:{s:4:"file";s:30:"cropped-background-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:30:"cropped-background-300x133.jpg";s:5:"width";i:300;s:6:"height";i:133;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:30:"cropped-background-768x340.jpg";s:5:"width";i:768;s:6:"height";i:340;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:31:"cropped-background-1024x454.jpg";s:5:"width";i:1024;s:6:"height";i:454;s:9:"mime-type";s:10:"image/jpeg";}s:27:"multiple-business-1920-1200";a:4:{s:4:"file";s:31:"cropped-background-1920x851.jpg";s:5:"width";i:1920;s:6:"height";i:851;s:9:"mime-type";s:10:"image/jpeg";}s:26:"multiple-business-1920-850";a:4:{s:4:"file";s:31:"cropped-background-1920x850.jpg";s:5:"width";i:1920;s:6:"height";i:850;s:9:"mime-type";s:10:"image/jpeg";}s:26:"multiple-business-1200-850";a:4:{s:4:"file";s:31:"cropped-background-1200x850.jpg";s:5:"width";i:1200;s:6:"height";i:850;s:9:"mime-type";s:10:"image/jpeg";}s:25:"multiple-business-600-675";a:4:{s:4:"file";s:30:"cropped-background-600x675.jpg";s:5:"width";i:600;s:6:"height";i:675;s:9:"mime-type";s:10:"image/jpeg";}s:26:"multiple-business-1170-710";a:4:{s:4:"file";s:31:"cropped-background-1170x710.jpg";s:5:"width";i:1170;s:6:"height";i:710;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}s:17:"attachment_parent";i:10;}'),
(91, 38, '_wp_attachment_custom_header_last_used_multiple-business', '1548171984'),
(92, 38, '_wp_attachment_is_custom_header', 'multiple-business'),
(93, 39, '_wp_trash_meta_status', 'publish'),
(94, 39, '_wp_trash_meta_time', '1548171984'),
(95, 40, '_wp_attached_file', '2019/01/cropped-logo-2.png'),
(96, 40, '_wp_attachment_context', 'custom-logo'),
(97, 40, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:132;s:6:"height";i:120;s:4:"file";s:26:"2019/01/cropped-logo-2.png";s:5:"sizes";a:0:{}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(98, 41, '_wp_trash_meta_status', 'publish'),
(99, 41, '_wp_trash_meta_time', '1548172045'),
(100, 42, '_wp_trash_meta_status', 'publish'),
(101, 42, '_wp_trash_meta_time', '1548172141'),
(106, 18, '_edit_lock', '1548255377:1'),
(107, 16, '_edit_lock', '1548255876:1');

-- --------------------------------------------------------

--
-- Structure de la table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2019-01-22 14:20:05', '2019-01-22 13:20:05', '<!-- wp:paragraph -->\n<p>Bienvenue sur WordPress. Ceci est votre premier article. Modifiez où supprimez-le, puis commencez à écrire !</p>\n<!-- /wp:paragraph -->', 'Bonjour tout le monde !', '', 'publish', 'open', 'open', '', 'bonjour-tout-le-monde', '', '', '2019-01-22 14:20:05', '2019-01-22 13:20:05', '', 0, 'http://localhost/wordpress/?p=1', 0, 'post', '', 1),
(2, 1, '2019-01-22 14:20:05', '2019-01-22 13:20:05', '<!-- wp:paragraph -->\n<p>Ceci est une page d’exemple. C’est différent d’un article de blog parce qu’elle restera au même endroit et apparaîtra dans la navigation de votre site (dans la plupart des thèmes). La plupart des gens commencent par une page « À propos » qui les présente aux visiteurs du site. Cela pourrait ressembler à quelque chose comme cela :</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class="wp-block-quote"><p>Bonjour ! Je suis un mécanicien qui aspire à devenir acteur, et voici mon site. J’habite à Bordeaux, j’ai un super chien baptisé Russell, et j’aime la vodka-ananas (ainsi qu’être surpris par la pluie soudaine lors de longues balades sur la plage au coucher du soleil).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>... ou quelque chose comme cela :</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class="wp-block-quote"><p>La société 123 Machin Truc a été créée en 1971, et n’a cessé de proposer au public des machins-trucs de qualité depuis lors. Située à Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson, 123 Machin Truc emploie 2 000 personnes, et fabrique toutes sortes de bidules super pour la communauté bouzemontoise.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>En tant que nouvel·le utilisateur ou utilisatrice de WordPress, vous devriez vous rendre sur <a href="http://localhost/wordpress/wp-admin/">votre tableau de bord</a> pour supprimer cette page et créer de nouvelles pages pour votre contenu. Amusez-vous bien !</p>\n<!-- /wp:paragraph -->', 'Page d’exemple', '', 'publish', 'closed', 'open', '', 'page-d-exemple', '', '', '2019-01-22 14:20:05', '2019-01-22 13:20:05', '', 0, 'http://localhost/wordpress/?page_id=2', 0, 'page', '', 0),
(3, 1, '2019-01-22 14:20:05', '2019-01-22 13:20:05', '<!-- wp:heading --><h2>Qui sommes-nous ?</h2><!-- /wp:heading --><!-- wp:paragraph --><p>L’adresse de notre site Web est : http://localhost/wordpress.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Utilisation des données personnelles collectées</h2><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>Commentaires</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Quand vous laissez un commentaire sur notre site web, les données inscrites dans le formulaire de commentaire, mais aussi votre adresse IP et l’agent utilisateur de votre navigateur sont collectés pour nous aider à la détection des commentaires indésirables.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Une chaîne anonymisée créée à partir de votre adresse de messagerie (également appelée hash) peut être envoyée au service Gravatar pour vérifier si vous utilisez ce dernier. Les clauses de confidentialité du service Gravatar sont disponibles ici : https://automattic.com/privacy/. Après validation de votre commentaire, votre photo de profil sera visible publiquement à coté de votre commentaire.</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Médias</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Si vous êtes un utilisateur ou une utilisatrice enregistré·e et que vous téléversez des images sur le site web, nous vous conseillons d’éviter de téléverser des images contenant des données EXIF de coordonnées GPS. Les visiteurs de votre site web peuvent télécharger et extraire des données de localisation depuis ces images.</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Formulaires de contact</h3><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Si vous déposez un commentaire sur notre site, il vous sera proposé d’enregistrer votre nom, adresse de messagerie et site web dans des cookies. C’est uniquement pour votre confort afin de ne pas avoir à saisir ces informations si vous déposez un autre commentaire plus tard. Ces cookies expirent au bout d’un an.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Si vous avez un compte et que vous vous connectez sur ce site, un cookie temporaire sera créé afin de déterminer si votre navigateur accepte les cookies. Il ne contient pas de données personnelles et sera supprimé automatiquement à la fermeture de votre navigateur.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Lorsque vous vous connecterez, nous mettrons en place un certain nombre de cookies pour enregistrer vos informations de connexion et vos préférences d’écran. La durée de vie d’un cookie de connexion est de deux jours, celle d’un cookie d’option d’écran est d’un an. Si vous cochez « Se souvenir de moi », votre cookie de connexion sera conservé pendant deux semaines. Si vous vous déconnectez de votre compte, le cookie de connexion sera effacé.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>En modifiant ou en publiant une publication, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne comprend aucune donnée personnelle. Il indique simplement l’ID de la publication que vous venez de modifier. Il expire au bout d’un jour.</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Contenu embarqué depuis d’autres sites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Statistiques et mesures d’audience</h3><!-- /wp:heading --><!-- wp:heading --><h2>Utilisation et transmission de vos données personnelles</h2><!-- /wp:heading --><!-- wp:heading --><h2>Durées de stockage de vos données</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Si vous laissez un commentaire, le commentaire et ses métadonnées sont conservés indéfiniment. Cela permet de reconnaître et approuver automatiquement les commentaires suivants au lieu de les laisser dans la file de modération.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Pour les utilisateurs et utilisatrices qui s’enregistrent sur notre site (si cela est possible), nous stockons également les données personnelles indiquées dans leur profil. Tous les utilisateurs et utilisatrices peuvent voir, modifier ou supprimer leurs informations personnelles à tout moment (à l’exception de leur nom d’utilisateur·ice). Les gestionnaires du site peuvent aussi voir et modifier ces informations.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Les droits que vous avez sur vos données</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Si vous avez un compte ou si vous avez laissé des commentaires sur le site, vous pouvez demander à recevoir un fichier contenant toutes les données personnelles que nous possédons à votre sujet, incluant celles que vous nous avez fournies. Vous pouvez également demander la suppression des données personnelles vous concernant. Cela ne prend pas en compte les données stockées à des fins administratives, légales ou pour des raisons de sécurité.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Transmission de vos données personnelles</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Les commentaires des visiteurs peuvent être vérifiés à l’aide d’un service automatisé de détection des commentaires indésirables.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Informations de contact</h2><!-- /wp:heading --><!-- wp:heading --><h2>Informations supplémentaires</h2><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>Comment nous protégeons vos données</h3><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>Procédures mises en œuvre en cas de fuite de données</h3><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>Les services tiers qui nous transmettent des données</h3><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>Opérations de marketing automatisé et/ou de profilage réalisées à l’aide des données personnelles</h3><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>Affichage des informations liées aux secteurs soumis à des régulations spécifiques</h3><!-- /wp:heading -->', 'Politique de confidentialité', '', 'draft', 'closed', 'open', '', 'politique-de-confidentialite', '', '', '2019-01-22 14:20:05', '2019-01-22 13:20:05', '', 0, 'http://localhost/wordpress/?page_id=3', 0, 'page', '', 0),
(4, 1, '2019-01-22 14:20:24', '0000-00-00 00:00:00', '', 'Brouillon auto', '', 'auto-draft', 'open', 'open', '', '', '', '', '2019-01-22 14:20:24', '0000-00-00 00:00:00', '', 0, 'http://localhost/wordpress/?p=4', 0, 'post', '', 0),
(5, 1, '2019-01-22 14:52:29', '2019-01-22 13:52:29', '<!-- wp:heading -->\n<h2>notre solution en 3 points</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>configuration</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>lorem ipsum sed do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>monitoring</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>hnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>sauvegarde</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>hnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:heading -->\n<h2>Choisisser votre style d\'hebergement</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur Mutualisé</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>19/mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>nzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur Dédié</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>39/ mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>fnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur cloud</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>49/mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>dnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->', 'l’hébergement à prix fixe', '', 'publish', 'open', 'open', '', 'mindgeek', '', '', '2019-01-23 15:36:25', '2019-01-23 14:36:25', '', 0, 'http://localhost/wordpress/?p=5', 0, 'post', '', 0),
(6, 1, '2019-01-22 14:52:29', '2019-01-22 13:52:29', '<!-- wp:paragraph -->\n<p>dans la ville de fois </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>une histoire ma foi </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image -->\n<figure class="wp-block-image"><img alt=""/></figure>\n<!-- /wp:image -->', 'Mindgeek', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2019-01-22 14:52:29', '2019-01-22 13:52:29', '', 5, 'http://localhost/wordpress/2019/01/22/5-revision-v1/', 0, 'revision', '', 0),
(7, 1, '2019-01-22 14:53:15', '2019-01-22 13:53:15', '', 'paper', '', 'inherit', 'open', 'closed', '', 'paper', '', '', '2019-01-22 14:53:15', '2019-01-22 13:53:15', '', 5, 'http://localhost/wordpress/wp-content/uploads/2019/01/paper.png', 0, 'attachment', 'image/png', 0),
(10, 1, '2019-01-22 14:54:25', '2019-01-22 13:54:25', '', 'background', 'Network servers in a data center. Swallow depth of Field', 'inherit', 'open', 'closed', '', 'background', '', '', '2019-01-22 14:54:25', '2019-01-22 13:54:25', '', 5, 'http://localhost/wordpress/wp-content/uploads/2019/01/background.jpg', 0, 'attachment', 'image/jpeg', 0),
(11, 1, '2019-01-22 14:54:36', '2019-01-22 13:54:36', '<!-- wp:paragraph -->\n<p>dans la ville de fois </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>une histoire ma foi </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {"id":10} -->\n<figure class="wp-block-image"><img src="http://localhost/wordpress/wp-content/uploads/2019/01/background-1024x498.jpg" alt="" class="wp-image-10"/><figcaption>Network servers in a data center. Swallow depth of Field</figcaption></figure>\n<!-- /wp:image -->', 'Mindgeek', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2019-01-22 14:54:36', '2019-01-22 13:54:36', '', 5, 'http://localhost/wordpress/2019/01/22/5-revision-v1/', 0, 'revision', '', 0),
(13, 1, '2019-01-22 15:50:12', '0000-00-00 00:00:00', '<!-- wp:image -->\n<figure class="wp-block-image"><img alt=""/></figure>\n<!-- /wp:image -->', 'que la nigth  fuck u all  i claim that forever .', '', 'draft', 'closed', 'closed', '', '', '', '', '2019-01-22 15:50:12', '2019-01-22 14:50:12', '', 0, 'http://localhost/wordpress/?page_id=13', 0, 'page', '', 0),
(14, 1, '2019-01-22 15:52:10', '2019-01-22 14:52:10', '', 'logo', '', 'inherit', 'open', 'closed', '', 'logo', '', '', '2019-01-22 15:52:10', '2019-01-22 14:52:10', '', 0, 'http://localhost/wordpress/wp-content/uploads/2019/01/logo.png', 0, 'attachment', 'image/png', 0),
(15, 1, '2019-01-22 15:52:28', '2019-01-22 14:52:28', '{\n    "quality_pro_options[upload_image_logo]": {\n        "value": "http://localhost/wordpress/wp-content/uploads/2019/01/logo.png",\n        "type": "option",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:52:28"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '9e723e01-52a6-41f5-8973-a1ea798d4f08', '', '', '2019-01-22 15:52:28', '2019-01-22 14:52:28', '', 0, 'http://localhost/wordpress/2019/01/22/9e723e01-52a6-41f5-8973-a1ea798d4f08/', 0, 'customize_changeset', '', 0),
(16, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non et officia vero, culpa aut, praesentium est iure at sed eos quisquam. Velit sequi deleniti commodi distinctio asperiores maxime vero soluta!</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>perso- 100 Go</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>un nom de dommaine offert pour votre site perso</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem</li><li>lore</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>5.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>perso-250 Go </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>un nom de dommaine offert pour votre site perso</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem</li><li>lore</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>5.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>perso-500 Go</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>un nom de dommaine offert pour votre site perso</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem</li><li>lore</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>5.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Serveur Mutualisé', '', 'publish', 'closed', 'closed', '', 'serveur-mutualise', '', '', '2019-01-23 16:06:55', '2019-01-23 15:06:55', '', 0, 'http://localhost/wordpress/?page_id=16', 0, 'page', '', 0),
(17, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', '{\n    "nav_menus_created_posts": {\n        "value": [\n            16,\n            18,\n            19,\n            20\n        ],\n        "type": "option",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:57:12"\n    },\n    "nav_menu[-8124312468560812000]": {\n        "value": {\n            "name": "menu",\n            "description": "",\n            "parent": 0,\n            "auto_add": false\n        },\n        "type": "nav_menu",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:56:15"\n    },\n    "nav_menu_item[-1655542499561341000]": {\n        "value": false,\n        "type": "nav_menu_item",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:56:15"\n    },\n    "nav_menu_item[-4408632864425197600]": {\n        "value": {\n            "object_id": 16,\n            "object": "page",\n            "menu_item_parent": 0,\n            "position": 1,\n            "type": "post_type",\n            "title": "Serveur Mutualis\\u00e9",\n            "url": "http://localhost/wordpress/?page_id=16",\n            "target": "",\n            "attr_title": "",\n            "description": "",\n            "classes": "",\n            "xfn": "",\n            "status": "publish",\n            "original_title": "Serveur Mutualis\\u00e9",\n            "nav_menu_term_id": -8124312468560812000,\n            "_invalid": false,\n            "type_label": "Page"\n        },\n        "type": "nav_menu_item",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:56:15"\n    },\n    "nav_menu_item[-1856956539575967700]": {\n        "value": {\n            "object_id": 0,\n            "object": "",\n            "menu_item_parent": 0,\n            "position": 2,\n            "type": "custom",\n            "title": "Accueil",\n            "url": "http://localhost/wordpress",\n            "target": "",\n            "attr_title": "",\n            "description": "",\n            "classes": "",\n            "xfn": "",\n            "status": "publish",\n            "original_title": "Accueil",\n            "nav_menu_term_id": -8124312468560812000,\n            "_invalid": false,\n            "type_label": "Lien personnalis\\u00e9"\n        },\n        "type": "nav_menu_item",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:56:15"\n    },\n    "nav_menu_item[-6114095187875760000]": {\n        "value": {\n            "object_id": 18,\n            "object": "page",\n            "menu_item_parent": 0,\n            "position": 3,\n            "type": "post_type",\n            "title": "serveur dedi\\u00e9",\n            "url": "http://localhost/wordpress/?page_id=18",\n            "target": "",\n            "attr_title": "",\n            "description": "",\n            "classes": "",\n            "xfn": "",\n            "status": "publish",\n            "original_title": "serveur dedi\\u00e9",\n            "nav_menu_term_id": -8124312468560812000,\n            "_invalid": false,\n            "type_label": "Page"\n        },\n        "type": "nav_menu_item",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:57:12"\n    },\n    "nav_menu_item[-171570743266041860]": {\n        "value": {\n            "object_id": 19,\n            "object": "page",\n            "menu_item_parent": 0,\n            "position": 4,\n            "type": "post_type",\n            "title": "Solution \\"CLOUD\\"",\n            "url": "http://localhost/wordpress/?page_id=19",\n            "target": "",\n            "attr_title": "",\n            "description": "",\n            "classes": "",\n            "xfn": "",\n            "status": "publish",\n            "original_title": "Solution \\"CLOUD\\"",\n            "nav_menu_term_id": -8124312468560812000,\n            "_invalid": false,\n            "type_label": "Page"\n        },\n        "type": "nav_menu_item",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:57:12"\n    },\n    "nav_menu_item[-5449449941505657000]": {\n        "value": {\n            "object_id": 20,\n            "object": "page",\n            "menu_item_parent": 0,\n            "position": 5,\n            "type": "post_type",\n            "title": "CONTACT",\n            "url": "http://localhost/wordpress/?page_id=20",\n            "target": "",\n            "attr_title": "",\n            "description": "",\n            "classes": "",\n            "xfn": "",\n            "status": "publish",\n            "original_title": "CONTACT",\n            "nav_menu_term_id": -8124312468560812000,\n            "_invalid": false,\n            "type_label": "Page"\n        },\n        "type": "nav_menu_item",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:57:12"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '47e3df30-cf15-4dba-a9bf-9744e23c1ca2', '', '', '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 0, 'http://localhost/wordpress/?p=17', 0, 'customize_changeset', '', 0),
(18, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non et officia vero, culpa aut, praesentium est iure at sed eos quisquam. Velit sequi deleniti commodi distinctio asperiores maxime vero soluta!</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>serveur dédié Game</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem </li><li>lorem</li><li>lorem</li><li></li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>19.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>serveur dédié Game</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem </li><li>lorem</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>19.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>serveur dédié Game</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem </li><li>lorem</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>19.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'serveur dedié', '', 'publish', 'closed', 'closed', '', 'serveur-dedie', '', '', '2019-01-23 15:57:07', '2019-01-23 14:57:07', '', 0, 'http://localhost/wordpress/?page_id=18', 0, 'page', '', 0),
(19, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 'Solution "CLOUD"', '', 'publish', 'closed', 'closed', '', 'solution-cloud', '', '', '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 0, 'http://localhost/wordpress/?page_id=19', 0, 'page', '', 0),
(20, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 'CONTACT', '', 'publish', 'closed', 'closed', '', 'contact', '', '', '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 0, 'http://localhost/wordpress/?page_id=20', 0, 'page', '', 0),
(21, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 'Serveur Mutualisé', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 16, 'http://localhost/wordpress/2019/01/22/16-revision-v1/', 0, 'revision', '', 0),
(22, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 'serveur dedié', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 18, 'http://localhost/wordpress/2019/01/22/18-revision-v1/', 0, 'revision', '', 0),
(23, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 'Solution "CLOUD"', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 19, 'http://localhost/wordpress/2019/01/22/19-revision-v1/', 0, 'revision', '', 0),
(24, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 'CONTACT', '', 'inherit', 'closed', 'closed', '', '20-revision-v1', '', '', '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 20, 'http://localhost/wordpress/2019/01/22/20-revision-v1/', 0, 'revision', '', 0),
(25, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', ' ', '', '', 'publish', 'closed', 'closed', '', '25', '', '', '2019-01-22 16:49:01', '2019-01-22 15:49:01', '', 0, 'http://localhost/wordpress/2019/01/22/25/', 2, 'nav_menu_item', '', 0),
(26, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 'Accueil', '', 'publish', 'closed', 'closed', '', 'accueil', '', '', '2019-01-22 16:49:01', '2019-01-22 15:49:01', '', 0, 'http://localhost/wordpress/2019/01/22/accueil/', 1, 'nav_menu_item', '', 0),
(27, 1, '2019-01-22 15:57:12', '2019-01-22 14:57:12', ' ', '', '', 'publish', 'closed', 'closed', '', '27', '', '', '2019-01-22 15:57:12', '2019-01-22 14:57:12', '', 0, 'http://localhost/wordpress/2019/01/22/27/', 3, 'nav_menu_item', '', 0),
(28, 1, '2019-01-22 15:57:13', '2019-01-22 14:57:13', '', 'Solution "CLOUD"', '', 'publish', 'closed', 'closed', '', 'solution-cloud', '', '', '2019-01-22 15:57:13', '2019-01-22 14:57:13', '', 0, 'http://localhost/wordpress/2019/01/22/solution-cloud/', 4, 'nav_menu_item', '', 0),
(29, 1, '2019-01-22 15:57:13', '2019-01-22 14:57:13', ' ', '', '', 'publish', 'closed', 'closed', '', '29', '', '', '2019-01-22 15:57:13', '2019-01-22 14:57:13', '', 0, 'http://localhost/wordpress/2019/01/22/29/', 5, 'nav_menu_item', '', 0),
(30, 1, '2019-01-22 15:58:15', '0000-00-00 00:00:00', '{\n    "nav_menu_item[25]": {\n        "value": {\n            "object_id": 16,\n            "object": "page",\n            "menu_item_parent": 0,\n            "position": 3,\n            "type": "post_type",\n            "title": "Serveur Mutualis\\u00e9",\n            "url": "http://localhost/wordpress/?page_id=16",\n            "target": "",\n            "attr_title": "",\n            "description": "",\n            "classes": "",\n            "xfn": "",\n            "status": "publish",\n            "original_title": "Serveur Mutualis\\u00e9",\n            "nav_menu_term_id": 3,\n            "_invalid": false,\n            "type_label": "Page"\n        },\n        "type": "nav_menu_item",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:58:15"\n    },\n    "nav_menu_item[26]": {\n        "value": {\n            "object_id": 0,\n            "object": "",\n            "menu_item_parent": 0,\n            "position": 2,\n            "type": "custom",\n            "title": "Accueil",\n            "url": "http://localhost/wordpress",\n            "target": "",\n            "attr_title": "",\n            "description": "",\n            "classes": "",\n            "xfn": "",\n            "status": "publish",\n            "original_title": "Accueil",\n            "nav_menu_term_id": 3,\n            "_invalid": false,\n            "type_label": "Lien personnalis\\u00e9"\n        },\n        "type": "nav_menu_item",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:58:15"\n    },\n    "nav_menu_item[27]": {\n        "value": {\n            "object_id": 18,\n            "object": "page",\n            "menu_item_parent": 0,\n            "position": 1,\n            "type": "post_type",\n            "title": "serveur dedi\\u00e9",\n            "url": "http://localhost/wordpress/?page_id=18",\n            "target": "",\n            "attr_title": "",\n            "description": "",\n            "classes": "",\n            "xfn": "",\n            "status": "publish",\n            "original_title": "serveur dedi\\u00e9",\n            "nav_menu_term_id": 3,\n            "_invalid": false,\n            "type_label": "Page"\n        },\n        "type": "nav_menu_item",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 14:58:15"\n    }\n}', '', '', 'auto-draft', 'closed', 'closed', '', '6a41df70-823d-46e8-ae7d-d712496c59f1', '', '', '2019-01-22 15:58:15', '0000-00-00 00:00:00', '', 0, 'http://localhost/wordpress/?p=30', 0, 'customize_changeset', '', 0),
(31, 1, '2019-01-22 16:28:23', '2019-01-22 15:28:23', 'http://localhost/wordpress/wp-content/uploads/2019/01/cropped-logo.png', 'cropped-logo.png', '', 'inherit', 'open', 'closed', '', 'cropped-logo-png', '', '', '2019-01-22 16:28:23', '2019-01-22 15:28:23', '', 0, 'http://localhost/wordpress/wp-content/uploads/2019/01/cropped-logo.png', 0, 'attachment', 'image/png', 0),
(32, 1, '2019-01-22 16:29:08', '2019-01-22 15:29:08', '{\n    "blogname": {\n        "value": "",\n        "type": "option",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:29:08"\n    },\n    "blogdescription": {\n        "value": "",\n        "type": "option",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:29:08"\n    },\n    "stacy::custom_logo": {\n        "value": 31,\n        "type": "theme_mod",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:29:08"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'cfd7df85-8a45-4eff-9998-1f1511743b3a', '', '', '2019-01-22 16:29:08', '2019-01-22 15:29:08', '', 0, 'http://localhost/wordpress/2019/01/22/cfd7df85-8a45-4eff-9998-1f1511743b3a/', 0, 'customize_changeset', '', 0),
(33, 1, '2019-01-22 16:29:17', '2019-01-22 15:29:17', 'http://localhost/wordpress/wp-content/uploads/2019/01/cropped-logo-1.png', 'cropped-logo-1.png', '', 'inherit', 'open', 'closed', '', 'cropped-logo-1-png', '', '', '2019-01-22 16:29:17', '2019-01-22 15:29:17', '', 0, 'http://localhost/wordpress/wp-content/uploads/2019/01/cropped-logo-1.png', 0, 'attachment', 'image/png', 0),
(34, 1, '2019-01-22 16:29:25', '2019-01-22 15:29:25', '{\n    "site_icon": {\n        "value": 33,\n        "type": "option",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:29:24"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'ca66d132-7002-4e7f-ac2a-c6a073d95106', '', '', '2019-01-22 16:29:25', '2019-01-22 15:29:25', '', 0, 'http://localhost/wordpress/?p=34', 0, 'customize_changeset', '', 0),
(35, 1, '2019-01-22 16:35:24', '2019-01-22 15:35:24', '<!-- wp:categories /-->', 'CONTACT', '', 'inherit', 'closed', 'closed', '', '20-autosave-v1', '', '', '2019-01-22 16:35:24', '2019-01-22 15:35:24', '', 20, 'http://localhost/wordpress/2019/01/22/20-autosave-v1/', 0, 'revision', '', 0),
(36, 1, '2019-01-22 16:42:48', '2019-01-22 15:42:48', '{\n    "multiple-business::background_image": {\n        "value": "http://localhost/wordpress/wp-content/uploads/2019/01/background.jpg",\n        "type": "theme_mod",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:42:48"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '82f50cf9-b056-4b6b-b1fe-45d143219881', '', '', '2019-01-22 16:42:48', '2019-01-22 15:42:48', '', 0, 'http://localhost/wordpress/2019/01/22/82f50cf9-b056-4b6b-b1fe-45d143219881/', 0, 'customize_changeset', '', 0),
(37, 1, '2019-01-22 16:43:08', '2019-01-22 15:43:08', '{\n    "multiple-business::background_position_x": {\n        "value": "center",\n        "type": "theme_mod",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:43:08"\n    },\n    "multiple-business::background_position_y": {\n        "value": "center",\n        "type": "theme_mod",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:43:08"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'beefb43d-4755-4d5c-9007-ec833997e2e7', '', '', '2019-01-22 16:43:08', '2019-01-22 15:43:08', '', 0, 'http://localhost/wordpress/2019/01/22/beefb43d-4755-4d5c-9007-ec833997e2e7/', 0, 'customize_changeset', '', 0),
(38, 1, '2019-01-22 16:46:07', '2019-01-22 15:46:07', '', 'cropped-background.jpg', '', 'inherit', 'open', 'closed', '', 'cropped-background-jpg', '', '', '2019-01-22 16:46:07', '2019-01-22 15:46:07', '', 0, 'http://localhost/wordpress/wp-content/uploads/2019/01/cropped-background.jpg', 0, 'attachment', 'image/jpeg', 0),
(39, 1, '2019-01-22 16:46:24', '2019-01-22 15:46:24', '{\n    "multiple-business::header_image": {\n        "value": "http://localhost/wordpress/wp-content/uploads/2019/01/cropped-background.jpg",\n        "type": "theme_mod",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:46:24"\n    },\n    "multiple-business::header_image_data": {\n        "value": {\n            "url": "http://localhost/wordpress/wp-content/uploads/2019/01/cropped-background.jpg",\n            "thumbnail_url": "http://localhost/wordpress/wp-content/uploads/2019/01/cropped-background.jpg",\n            "timestamp": 1548171969465,\n            "attachment_id": 38,\n            "width": 1920,\n            "height": 851\n        },\n        "type": "theme_mod",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:46:24"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '8bc08e36-8a1f-40a3-8fef-b6005bc83ba2', '', '', '2019-01-22 16:46:24', '2019-01-22 15:46:24', '', 0, 'http://localhost/wordpress/2019/01/22/8bc08e36-8a1f-40a3-8fef-b6005bc83ba2/', 0, 'customize_changeset', '', 0),
(40, 1, '2019-01-22 16:47:19', '2019-01-22 15:47:19', 'http://localhost/wordpress/wp-content/uploads/2019/01/cropped-logo-2.png', 'cropped-logo-2.png', '', 'inherit', 'open', 'closed', '', 'cropped-logo-2-png', '', '', '2019-01-22 16:47:19', '2019-01-22 15:47:19', '', 0, 'http://localhost/wordpress/wp-content/uploads/2019/01/cropped-logo-2.png', 0, 'attachment', 'image/png', 0),
(41, 1, '2019-01-22 16:47:25', '2019-01-22 15:47:25', '{\n    "multiple-business::custom_logo": {\n        "value": 40,\n        "type": "theme_mod",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:47:25"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'a86bcd41-db71-4d29-9bb8-22aca91b6140', '', '', '2019-01-22 16:47:25', '2019-01-22 15:47:25', '', 0, 'http://localhost/wordpress/2019/01/22/a86bcd41-db71-4d29-9bb8-22aca91b6140/', 0, 'customize_changeset', '', 0),
(42, 1, '2019-01-22 16:49:01', '2019-01-22 15:49:01', '{\n    "multiple-business::nav_menu_locations[primary]": {\n        "value": 3,\n        "type": "theme_mod",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:49:01"\n    },\n    "nav_menu[3]": {\n        "value": {\n            "name": "menu (2)",\n            "description": "",\n            "parent": 0,\n            "auto_add": true\n        },\n        "type": "nav_menu",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:49:01"\n    },\n    "nav_menu_item[25]": {\n        "value": {\n            "menu_item_parent": 0,\n            "object_id": 16,\n            "object": "page",\n            "type": "post_type",\n            "type_label": "Page",\n            "url": "http://localhost/wordpress/serveur-mutualise/",\n            "title": "",\n            "target": "",\n            "attr_title": "",\n            "description": "",\n            "classes": "",\n            "xfn": "",\n            "nav_menu_term_id": 3,\n            "position": 2,\n            "status": "publish",\n            "original_title": "Serveur Mutualis\\u00e9",\n            "_invalid": false\n        },\n        "type": "nav_menu_item",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:49:01"\n    },\n    "nav_menu_item[26]": {\n        "value": {\n            "menu_item_parent": 0,\n            "object_id": 26,\n            "object": "custom",\n            "type": "custom",\n            "type_label": "Lien personnalis\\u00e9",\n            "title": "Accueil",\n            "url": "http://localhost/wordpress",\n            "target": "",\n            "attr_title": "",\n            "description": "",\n            "classes": "",\n            "xfn": "",\n            "nav_menu_term_id": 3,\n            "position": 1,\n            "status": "publish",\n            "original_title": "",\n            "_invalid": false\n        },\n        "type": "nav_menu_item",\n        "user_id": 1,\n        "date_modified_gmt": "2019-01-22 15:49:01"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '1a5f9df4-3edc-4c09-8498-77437aa28fc8', '', '', '2019-01-22 16:49:01', '2019-01-22 15:49:01', '', 0, 'http://localhost/wordpress/2019/01/22/1a5f9df4-3edc-4c09-8498-77437aa28fc8/', 0, 'customize_changeset', '', 0),
(43, 1, '2019-01-22 17:01:58', '2019-01-22 16:01:58', '<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>configuration</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>lorem ipsum sed do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>monitoring</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>hnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>sauvegarde</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2></h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>hnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:heading -->\n<h2>Choisisser votre style d\'hebergement</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>Serveur Mutualisé</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>19/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>nzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>Serveur Dédié</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>39/ mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>fnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>Serveur cloud</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>49/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>dnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->', 'l’hébergement à prix fixe', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2019-01-22 17:01:58', '2019-01-22 16:01:58', '', 5, 'http://localhost/wordpress/2019/01/22/5-revision-v1/', 0, 'revision', '', 0),
(44, 1, '2019-01-23 15:36:19', '2019-01-23 14:36:19', '<!-- wp:heading -->\n<h2>notre solution en 3 points</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>configuration</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>lorem ipsum sed do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>monitoring</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>hnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>sauvegarde</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>hnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:heading -->\n<h2>Choisisser votre style d\'hebergement</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur Mutualisé</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>19/mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>nzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur Dédié</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>39/ mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>fnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur cloud</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>49/mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>dnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->', 'l’hébergement à prix fixe', '', 'inherit', 'closed', 'closed', '', '5-autosave-v1', '', '', '2019-01-23 15:36:19', '2019-01-23 14:36:19', '', 5, 'http://localhost/wordpress/2019/01/23/5-autosave-v1/', 0, 'revision', '', 0),
(45, 1, '2019-01-23 15:31:00', '2019-01-23 14:31:00', '<!-- wp:heading -->\n<h2>notre solution en 3 points</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>configuration</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>lorem ipsum sed do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>monitoring</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>hnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>sauvegarde</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading -->\n<h2></h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>hnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:heading -->\n<h2>Choisisser votre style d\'hebergement</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur Mutualisé</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>19/mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>nzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur Dédié</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>39/ mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>fnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur cloud</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>49/mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>dnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->', 'l’hébergement à prix fixe', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2019-01-23 15:31:00', '2019-01-23 14:31:00', '', 5, 'http://localhost/wordpress/2019/01/23/5-revision-v1/', 0, 'revision', '', 0),
(46, 1, '2019-01-23 15:36:25', '2019-01-23 14:36:25', '<!-- wp:heading -->\n<h2>notre solution en 3 points</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>configuration</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>lorem ipsum sed do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>monitoring</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>hnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>sauvegarde</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>hnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:heading -->\n<h2>Choisisser votre style d\'hebergement</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur Mutualisé</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>19/mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>nzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur Dédié</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>39/ mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>fnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:heading {"level":3} -->\n<h3>Serveur cloud</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {"level":4} -->\n<h4>49/mois</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>dnzdz zdozd kozd do elir eiusuimmeidzdjzijd defraio mouillee quel la night</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->', 'l’hébergement à prix fixe', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2019-01-23 15:36:25', '2019-01-23 14:36:25', '', 5, 'http://localhost/wordpress/2019/01/23/5-revision-v1/', 0, 'revision', '', 0),
(47, 1, '2019-01-23 15:55:23', '2019-01-23 14:55:23', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non et officia vero, culpa aut, praesentium est iure at sed eos quisquam. Velit sequi deleniti commodi distinctio asperiores maxime vero soluta!</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>serveur dédié Game</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem </li><li>lorem</li><li>lorem</li></ul>\n<!-- /wp:list --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>serveur dédié Gam</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->', 'serveur dedié', '', 'inherit', 'closed', 'closed', '', '18-autosave-v1', '', '', '2019-01-23 15:55:23', '2019-01-23 14:55:23', '', 18, 'http://localhost/wordpress/2019/01/23/18-autosave-v1/', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(48, 1, '2019-01-23 15:55:50', '2019-01-23 14:55:50', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non et officia vero, culpa aut, praesentium est iure at sed eos quisquam. Velit sequi deleniti commodi distinctio asperiores maxime vero soluta!</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>serveur dédié Game</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem </li><li>lorem</li><li>lorem</li></ul>\n<!-- /wp:list --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>serveur dédié Game</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem </li><li>lorem</li><li>lorem</li></ul>\n<!-- /wp:list --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>serveur dédié Game</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem </li><li>lorem</li><li>lorem</li></ul>\n<!-- /wp:list --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->', 'serveur dedié', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2019-01-23 15:55:50', '2019-01-23 14:55:50', '', 18, 'http://localhost/wordpress/2019/01/23/18-revision-v1/', 0, 'revision', '', 0),
(49, 1, '2019-01-23 15:57:07', '2019-01-23 14:57:07', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non et officia vero, culpa aut, praesentium est iure at sed eos quisquam. Velit sequi deleniti commodi distinctio asperiores maxime vero soluta!</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>serveur dédié Game</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem </li><li>lorem</li><li>lorem</li><li></li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>19.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>serveur dédié Game</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem </li><li>lorem</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>19.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>serveur dédié Game</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem </li><li>lorem</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>19.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'serveur dedié', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2019-01-23 15:57:07', '2019-01-23 14:57:07', '', 18, 'http://localhost/wordpress/2019/01/23/18-revision-v1/', 0, 'revision', '', 0),
(50, 1, '2019-01-23 16:06:41', '2019-01-23 15:06:41', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non et officia vero, culpa aut, praesentium est iure at sed eos quisquam. Velit sequi deleniti commodi distinctio asperiores maxime vero soluta!</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>perso- 100 Go</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>un nom de dommaine offert pour votre site perso</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem</li><li>lore</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>5.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>perso-250 Go </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>un nom de dommaine offert pour votre site perso</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem</li><li>lore</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>5.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>perso-500 Go</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>un nom de dommaine offert pour votre site perso</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem</li><li>lore</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>5.99/mois</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Serveur Mutualisé', '', 'inherit', 'closed', 'closed', '', '16-autosave-v1', '', '', '2019-01-23 16:06:41', '2019-01-23 15:06:41', '', 16, 'http://localhost/wordpress/2019/01/23/16-autosave-v1/', 0, 'revision', '', 0),
(51, 1, '2019-01-23 16:06:55', '2019-01-23 15:06:55', '<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non et officia vero, culpa aut, praesentium est iure at sed eos quisquam. Velit sequi deleniti commodi distinctio asperiores maxime vero soluta!</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {"columns":3} -->\n<div class="wp-block-columns has-3-columns"><!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>perso- 100 Go</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>un nom de dommaine offert pour votre site perso</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem</li><li>lore</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>5.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>perso-250 Go </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>un nom de dommaine offert pour votre site perso</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem</li><li>lore</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>5.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class="wp-block-column"><!-- wp:paragraph -->\n<p>perso-500 Go</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>un nom de dommaine offert pour votre site perso</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><li>lorem</li><li>lorem</li><li>lorem</li><li>lore</li><li>lorem</li></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>5.99/mois</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>commander</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Serveur Mutualisé', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-01-23 16:06:55', '2019-01-23 15:06:55', '', 16, 'http://localhost/wordpress/2019/01/23/16-revision-v1/', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Non classé', 'non-classe', 0),
(2, 'menu', 'menu', 0),
(3, 'menu (2)', 'menu-2', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(5, 1, 0),
(25, 3, 0),
(26, 3, 0),
(27, 3, 0),
(28, 3, 0),
(29, 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 2),
(2, 2, 'nav_menu', '', 0, 0),
(3, 3, 'nav_menu', '', 0, 5);

-- --------------------------------------------------------

--
-- Structure de la table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'jacob'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'wp496_privacy'),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:2:{s:64:"119dcd309e820d2cd724119e26b50accc4b42f2860d2d10f4651886bbd45a4d5";a:4:{s:10:"expiration";i:1548336023;s:2:"ip";s:3:"::1";s:2:"ua";s:105:"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36";s:5:"login";i:1548163223;}s:64:"05f9582384c66a6d4dfec6ea9d51d32f0410bf483604dd5109175958338d2c44";a:4:{s:10:"expiration";i:1548409347;s:2:"ip";s:3:"::1";s:2:"ua";s:105:"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36";s:5:"login";i:1548236547;}}'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '4'),
(18, 2, 'nickname', 'client'),
(19, 2, 'first_name', 'client'),
(20, 2, 'last_name', 'Le'),
(21, 2, 'description', ''),
(22, 2, 'rich_editing', 'true'),
(23, 2, 'syntax_highlighting', 'true'),
(24, 2, 'comment_shortcuts', 'false'),
(25, 2, 'admin_color', 'fresh'),
(26, 2, 'use_ssl', '0'),
(27, 2, 'show_admin_bar_front', 'true'),
(28, 2, 'locale', ''),
(29, 2, 'wp_capabilities', 'a:1:{s:6:"editor";b:1;}'),
(30, 2, 'wp_user_level', '7'),
(31, 2, 'dismissed_wp_pointers', 'wp496_privacy'),
(32, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";i:4;s:15:"title-attribute";}'),
(33, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:"add-post_tag";}'),
(34, 1, 'wp_user-settings', 'libraryContent=browse'),
(35, 1, 'wp_user-settings-time', '1548168826'),
(36, 1, 'nav_menu_recently_edited', '2');

-- --------------------------------------------------------

--
-- Structure de la table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Contenu de la table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'jacob', '$P$BVdwTta9vjoF/0WcY7..nvFY0L5mwV/', 'jacob', 'admin@mindgeek.com', '', '2019-01-22 13:20:05', '', 0, 'jacob'),
(2, 'client', '$P$Bzh6BhzMgpXE2m2bl1U9WOOyaMUTbA0', 'client', 'client@mail.fr', 'http://mindgeek', '2019-01-22 13:41:48', '1548164509:$P$B8XxUmCJPBDV56qRMLEazmFbPzKsa60', 0, 'client Le');

-- --------------------------------------------------------

--
-- Structure de la table `wp_wpgmza`
--

CREATE TABLE `wp_wpgmza` (
  `id` int(11) NOT NULL,
  `map_id` int(11) NOT NULL,
  `address` varchar(700) NOT NULL,
  `description` mediumtext NOT NULL,
  `pic` varchar(700) NOT NULL,
  `link` varchar(700) NOT NULL,
  `icon` varchar(700) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `anim` varchar(3) NOT NULL,
  `title` varchar(700) NOT NULL,
  `infoopen` varchar(3) NOT NULL,
  `category` varchar(500) NOT NULL,
  `approved` tinyint(1) DEFAULT '1',
  `retina` tinyint(1) DEFAULT '0',
  `type` tinyint(1) DEFAULT '0',
  `did` varchar(500) NOT NULL,
  `other_data` longtext NOT NULL,
  `latlng` point DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `wp_wpgmza`
--

INSERT INTO `wp_wpgmza` (`id`, `map_id`, `address`, `description`, `pic`, `link`, `icon`, `lat`, `lng`, `anim`, `title`, `infoopen`, `category`, `approved`, `retina`, `type`, `did`, `other_data`, `latlng`) VALUES
(1, 1, 'California', '', '', '', '', '36.778261', '-119.4179323999', '0', '', '', '', 1, 0, 0, '', '', '\0\0\0\0\0\0\0J`s�cB@�`�g��]�'),
(2, 1, 'Abidjan, Côte d\\\'Ivoire', '', '', '', '', '5.359952', '-4.008256', '0', '', '0', '', 1, 0, 0, '', '', '\0\0\0\0\0\0\0�-�p@���Vt�');

-- --------------------------------------------------------

--
-- Structure de la table `wp_wpgmza_categories`
--

CREATE TABLE `wp_wpgmza_categories` (
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_icon` varchar(700) NOT NULL,
  `retina` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wpgmza_category_maps`
--

CREATE TABLE `wp_wpgmza_category_maps` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `map_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wpgmza_circles`
--

CREATE TABLE `wp_wpgmza_circles` (
  `id` int(11) NOT NULL,
  `map_id` int(11) NOT NULL,
  `name` text,
  `center` point DEFAULT NULL,
  `radius` float DEFAULT NULL,
  `color` varchar(16) DEFAULT NULL,
  `opacity` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wpgmza_maps`
--

CREATE TABLE `wp_wpgmza_maps` (
  `id` int(11) NOT NULL,
  `map_title` varchar(55) NOT NULL,
  `map_width` varchar(6) NOT NULL,
  `map_height` varchar(6) NOT NULL,
  `map_start_lat` varchar(700) NOT NULL,
  `map_start_lng` varchar(700) NOT NULL,
  `map_start_location` varchar(700) NOT NULL,
  `map_start_zoom` int(10) NOT NULL,
  `default_marker` varchar(700) NOT NULL,
  `type` int(10) NOT NULL,
  `alignment` int(10) NOT NULL,
  `directions_enabled` int(10) NOT NULL,
  `styling_enabled` int(10) NOT NULL,
  `styling_json` mediumtext NOT NULL,
  `active` int(1) NOT NULL,
  `kml` varchar(700) NOT NULL,
  `bicycle` int(10) NOT NULL,
  `traffic` int(10) NOT NULL,
  `dbox` int(10) NOT NULL,
  `dbox_width` varchar(10) NOT NULL,
  `listmarkers` int(10) NOT NULL,
  `listmarkers_advanced` int(10) NOT NULL,
  `filterbycat` tinyint(1) NOT NULL,
  `ugm_enabled` int(10) NOT NULL,
  `ugm_category_enabled` tinyint(1) NOT NULL,
  `fusion` varchar(100) NOT NULL,
  `map_width_type` varchar(3) NOT NULL,
  `map_height_type` varchar(3) NOT NULL,
  `mass_marker_support` int(10) NOT NULL,
  `ugm_access` int(10) NOT NULL,
  `order_markers_by` int(10) NOT NULL,
  `order_markers_choice` int(10) NOT NULL,
  `show_user_location` int(3) NOT NULL,
  `default_to` varchar(700) NOT NULL,
  `other_settings` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `wp_wpgmza_maps`
--

INSERT INTO `wp_wpgmza_maps` (`id`, `map_title`, `map_width`, `map_height`, `map_start_lat`, `map_start_lng`, `map_start_location`, `map_start_zoom`, `default_marker`, `type`, `alignment`, `directions_enabled`, `styling_enabled`, `styling_json`, `active`, `kml`, `bicycle`, `traffic`, `dbox`, `dbox_width`, `listmarkers`, `listmarkers_advanced`, `filterbycat`, `ugm_enabled`, `ugm_category_enabled`, `fusion`, `map_width_type`, `map_height_type`, `mass_marker_support`, `ugm_access`, `order_markers_by`, `order_markers_choice`, `show_user_location`, `default_to`, `other_settings`) VALUES
(1, 'My first map', '100', '400', '5.359952', '-4.008256', '5.3599517,-4.008256299999971', 2, '0', 1, 1, 1, 0, '', 0, '', 2, 2, 1, '100', 0, 0, 0, 0, 0, '', '\\%', 'px', 1, 0, 1, 2, 0, '', 'a:14:{s:21:"store_locator_enabled";i:2;s:22:"store_locator_distance";i:2;s:28:"store_locator_default_radius";s:2:"10";s:31:"store_locator_not_found_message";s:52:"No results found in this location. Please try again.";s:20:"store_locator_bounce";i:1;s:26:"store_locator_query_string";s:21:"Code Postal / Adresse";s:29:"store_locator_default_address";s:0:"";s:29:"wpgmza_store_locator_restrict";s:0:"";s:19:"store_locator_style";s:6:"modern";s:33:"wpgmza_store_locator_radius_style";s:6:"modern";s:12:"map_max_zoom";s:1:"1";s:15:"transport_layer";i:2;s:17:"wpgmza_theme_data";s:0:"";s:30:"wpgmza_show_points_of_interest";i:1;}');

-- --------------------------------------------------------

--
-- Structure de la table `wp_wpgmza_polygon`
--

CREATE TABLE `wp_wpgmza_polygon` (
  `id` int(11) NOT NULL,
  `map_id` int(11) NOT NULL,
  `polydata` longtext NOT NULL,
  `innerpolydata` longtext NOT NULL,
  `linecolor` varchar(7) NOT NULL,
  `lineopacity` varchar(7) NOT NULL,
  `fillcolor` varchar(7) NOT NULL,
  `opacity` varchar(3) NOT NULL,
  `title` varchar(250) NOT NULL,
  `link` varchar(700) NOT NULL,
  `ohfillcolor` varchar(7) NOT NULL,
  `ohlinecolor` varchar(7) NOT NULL,
  `ohopacity` varchar(3) NOT NULL,
  `polyname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wpgmza_polylines`
--

CREATE TABLE `wp_wpgmza_polylines` (
  `id` int(11) NOT NULL,
  `map_id` int(11) NOT NULL,
  `polydata` longtext NOT NULL,
  `linecolor` varchar(7) NOT NULL,
  `linethickness` varchar(3) NOT NULL,
  `opacity` varchar(3) NOT NULL,
  `polyname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `wp_wpgmza_rectangles`
--

CREATE TABLE `wp_wpgmza_rectangles` (
  `id` int(11) NOT NULL,
  `map_id` int(11) NOT NULL,
  `name` text,
  `cornerA` point DEFAULT NULL,
  `cornerB` point DEFAULT NULL,
  `color` varchar(16) DEFAULT NULL,
  `opacity` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Index pour la table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Index pour la table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Index pour la table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Index pour la table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Index pour la table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Index pour la table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Index pour la table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Index pour la table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- Index pour la table `wp_wpgmza`
--
ALTER TABLE `wp_wpgmza`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp_wpgmza_categories`
--
ALTER TABLE `wp_wpgmza_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp_wpgmza_category_maps`
--
ALTER TABLE `wp_wpgmza_category_maps`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp_wpgmza_circles`
--
ALTER TABLE `wp_wpgmza_circles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp_wpgmza_maps`
--
ALTER TABLE `wp_wpgmza_maps`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp_wpgmza_polygon`
--
ALTER TABLE `wp_wpgmza_polygon`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp_wpgmza_polylines`
--
ALTER TABLE `wp_wpgmza_polylines`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp_wpgmza_rectangles`
--
ALTER TABLE `wp_wpgmza_rectangles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
--
-- AUTO_INCREMENT pour la table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT pour la table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT pour la table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `wp_wpgmza`
--
ALTER TABLE `wp_wpgmza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `wp_wpgmza_categories`
--
ALTER TABLE `wp_wpgmza_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `wp_wpgmza_category_maps`
--
ALTER TABLE `wp_wpgmza_category_maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `wp_wpgmza_circles`
--
ALTER TABLE `wp_wpgmza_circles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `wp_wpgmza_maps`
--
ALTER TABLE `wp_wpgmza_maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `wp_wpgmza_polygon`
--
ALTER TABLE `wp_wpgmza_polygon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `wp_wpgmza_polylines`
--
ALTER TABLE `wp_wpgmza_polylines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `wp_wpgmza_rectangles`
--
ALTER TABLE `wp_wpgmza_rectangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
