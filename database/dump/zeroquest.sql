-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 30 mars 2022 à 19:01
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zeroquest`
--
CREATE DATABASE IF NOT EXISTS `zeroquest` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `zeroquest`;

-- --------------------------------------------------------

--
-- Structure de la table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `body` int(11) NOT NULL,
  `spirit` int(11) NOT NULL,
  `missions_accomplished` int(11) NOT NULL,
  `gold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `character_types`
--

CREATE TABLE `character_types` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `media_path` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `character__items`
--

CREATE TABLE `character__items` (
  `id` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `character__spells`
--

CREATE TABLE `character__spells` (
  `id` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  `spell_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `creations`
--

CREATE TABLE `creations` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `private` tinyint(1) NOT NULL DEFAULT 1,
  `description` text NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `enemies` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`enemies`)),
  `traps` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`traps`)),
  `doors` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`doors`)),
  `spawns` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`spawns`)),
  `furnitures` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`furnitures`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `faq_items`
--

CREATE TABLE `faq_items` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `faq_items`
--

INSERT INTO `faq_items` (`id`, `question`, `answer`) VALUES
(1, 'Officiis praesentium nostrum excepturi accusantium. Est dolores non et tenetur sint maxime enim distinctio. Dolorem ratione eos velit soluta.', 'Illo ea autem excepturi nobis autem voluptatem. Dolor non praesentium eligendi voluptatem quis repellat. Architecto soluta consequuntur architecto provident optio porro. Sit dolores odit quo rerum esse.'),
(2, 'Fuga quis et et rerum omnis animi. Consequatur tempore similique possimus sed excepturi aut accusamus. Voluptates maxime quia asperiores commodi ut.', 'Velit est assumenda corporis. Cupiditate quod pariatur enim praesentium dolorem quia voluptas omnis. Voluptatem rerum impedit numquam autem.'),
(3, 'Neque earum esse voluptas ea quia eveniet quidem. Aspernatur perferendis qui animi aperiam magni earum sed modi. Quisquam aut nam laborum nemo ex blanditiis.', 'Qui ipsam magnam cum. Ex omnis dignissimos accusamus adipisci culpa voluptas.'),
(4, 'In perspiciatis mollitia fugit suscipit amet est consequatur labore. Eveniet ducimus voluptate voluptatem dolor. Exercitationem illo quidem praesentium eos explicabo et.', 'Reiciendis velit nihil dolor sunt at est qui. Dolor harum ipsum veritatis magni aliquam sit. Quibusdam aliquid quas est aut et recusandae. Omnis doloremque quisquam occaecati laboriosam repellendus iusto necessitatibus.'),
(5, 'Suscipit rerum et itaque ut eos dolor accusamus. Rem quidem quisquam beatae sunt. Fugit voluptatem nostrum reiciendis accusantium suscipit sunt.', 'Omnis at qui et quam perferendis reiciendis in et. Nemo excepturi ipsum nobis ab ut architecto deserunt. Est magni omnis quis officiis qui omnis. Praesentium quo quae odio qui natus rerum velit.'),
(6, 'Voluptatem laboriosam qui doloribus distinctio. Expedita est ut et inventore est eum magnam. Et aut dicta officia natus eius aspernatur. Voluptas facilis et fugiat quisquam eligendi incidunt.', 'Et dolorem illo temporibus repellat. Ratione veniam distinctio rerum voluptates exercitationem.'),
(7, 'Cupiditate mollitia officia voluptas laudantium ratione. Et sint ut illum. Consequatur mollitia odio consequatur eaque. Quia iusto ab iusto aut sequi voluptates voluptatem.', 'Fugit cumque ea est illum. In molestias dolores omnis ipsum recusandae ut est. Officia veritatis quia impedit atque est reiciendis. Facere inventore fuga suscipit nihil.'),
(8, 'Velit et error est rerum et eum. Maxime incidunt omnis accusantium ut qui dignissimos error ut. Quasi corrupti et molestiae quisquam labore.', 'Earum cupiditate expedita et quasi. Vitae cum blanditiis et facilis. Sed voluptas illum tempore eligendi doloremque consequatur pariatur. Vero enim quod minus error.'),
(9, 'Deserunt est quidem atque nobis cumque omnis dicta. Rerum voluptatem ut et ex. Aut incidunt aut vero.', 'Ut perspiciatis dolorem sed cum. Deleniti nulla est ut quas incidunt.'),
(10, 'Voluptatem quia ipsum odio optio illum et magnam. Autem repudiandae qui quisquam non. Doloribus deleniti excepturi vel voluptas. Id velit qui consequatur laboriosam quae earum asperiores.', 'Numquam velit soluta est. Delectus ipsam minima magnam eum. Enim aliquam officia aut doloremque illo ratione. Quo consectetur et dolor atque omnis ea qui.'),
(11, 'Dolores perferendis sunt praesentium non sed et vel. Et optio itaque suscipit quae ad consequuntur suscipit enim. Placeat excepturi expedita qui iste deserunt. Vel id architecto molestiae animi assumenda doloribus nesciunt.', 'Sed quibusdam ipsum culpa tempore et non corrupti. Accusantium incidunt veniam sit repellat repudiandae dolores. Assumenda nostrum beatae voluptates. Velit doloribus velit et sapiente.'),
(12, 'Quae laudantium corporis nam quod repellendus. Eveniet veniam sapiente velit quaerat et ex.', 'Ut commodi vel dolor unde. Dolor numquam et sint commodi. Maiores tenetur ea qui voluptas nostrum. Eveniet nisi est dolores aut nemo sed hic.'),
(13, 'Velit ut saepe nostrum et. Quisquam qui officia sequi qui sit. Modi eligendi eligendi iusto iste sit.', 'Cumque vero labore iste qui quia. Voluptas consectetur maiores sequi incidunt voluptatem.'),
(14, 'Voluptatem quibusdam velit libero quo cum laudantium ad. Non et corporis non voluptas aut. Sed numquam est quo dolorem esse voluptas fugiat.', 'Sit et rerum esse aut et quae quia. Repudiandae harum numquam expedita illum quos ut quibusdam et. Aliquam magni error nulla corporis consequatur qui at. Consequatur voluptas tenetur enim est.'),
(15, 'Consequatur aliquam sit enim provident consequatur qui. Aut dolores aut ullam nostrum modi blanditiis quam. Quibusdam ratione impedit itaque quasi qui. Voluptatem reprehenderit voluptas repellendus perferendis enim.', 'Quos corporis aut necessitatibus eius. Tenetur perferendis voluptas dolores commodi mollitia qui eum. Ut quae ex voluptas aut. Impedit dolorem sit et harum iusto totam totam.'),
(16, 'Ducimus placeat exercitationem sapiente id odio provident dicta vel. Non ratione possimus perspiciatis facere voluptatibus nihil ex accusamus. Qui rerum reiciendis aut quo provident temporibus sapiente. Ut fugit ad id numquam consequuntur aperiam.', 'Quos ut et dolor accusantium rerum quae fuga eum. Magnam error possimus est molestias facere quis. Ea qui soluta quia itaque dolor labore sunt. Officiis omnis vitae suscipit porro maxime.'),
(17, 'Non inventore aut quibusdam qui molestias et et. Consequatur dolorem sapiente soluta modi in quae.', 'Sit rerum est voluptas libero. Quis doloribus exercitationem et reiciendis eius magni sit. Blanditiis quo ut sit velit praesentium.'),
(18, 'Consequatur nam explicabo deserunt perspiciatis. Distinctio qui accusamus nesciunt. Veritatis itaque ut asperiores voluptatem enim. Praesentium ducimus doloribus in voluptatem.', 'Reiciendis qui temporibus maxime iste esse quisquam. Quidem alias quis sed blanditiis placeat. Eum et ad et debitis accusamus vero.'),
(19, 'Error a repellat quasi soluta. Cupiditate vel ut dolore unde nostrum vero unde qui. Delectus exercitationem consequatur dolor qui earum ipsam. Vitae soluta labore aspernatur.', 'Saepe omnis doloremque sed sunt. Omnis atque ex aut et adipisci incidunt rerum. Corrupti aperiam illo enim laboriosam amet. Dicta iste nihil iure autem voluptas.'),
(20, 'Architecto ducimus et dicta saepe odio eveniet voluptatem. Omnis debitis deleniti et rerum. Sunt ipsam odit quis earum suscipit magnam totam magnam. Omnis ut placeat esse.', 'Ad rem ipsam quibusdam in quasi magnam. Assumenda impedit omnis quaerat magni quis. Id sit minus minima saepe dolor incidunt voluptatum. Blanditiis non exercitationem voluptas et.'),
(21, 'Tempore molestiae distinctio necessitatibus nulla et. At omnis aut dicta modi molestias veritatis. Perspiciatis illo est atque et. Molestiae et et omnis harum.', 'Dolorem maxime quia molestiae aut ipsam. Dolor et quis velit reiciendis sed consectetur et distinctio. Quo veniam voluptatem eum. Magni voluptate aut et saepe.'),
(22, 'Ex a voluptatem ut quia. Et eos eligendi incidunt sequi odio. Voluptatem itaque a assumenda quidem ut qui libero. Ipsam reprehenderit modi rerum enim repudiandae. Quia id et incidunt eius voluptate minus eveniet.', 'Praesentium aut voluptatem quis ut omnis. Nihil quam totam earum error atque.'),
(23, 'Ea et quia odio quas nostrum deleniti. Sit sit quia modi dignissimos. Est qui impedit omnis ea. Deserunt omnis quas qui enim architecto deserunt.', 'Incidunt ipsum cupiditate fugit accusantium ut. Omnis amet eveniet eveniet qui alias voluptates.'),
(24, 'Enim voluptatibus itaque quam recusandae aliquam rerum. Beatae fugit fugit dolores incidunt sequi omnis.', 'Incidunt at laborum tempora ea deleniti neque. Sit iure fugit veritatis. Eligendi asperiores et ullam ab voluptatem. Eos eum aut cum ut consequuntur voluptatum et. Necessitatibus nisi suscipit aperiam sed quidem ex.'),
(25, 'Voluptas voluptas quibusdam commodi consequatur est. Laboriosam non natus delectus dolor. Assumenda harum nihil ut quam.', 'Quas pariatur est dolore et. Blanditiis dolore quisquam tempore tempora est nostrum officiis necessitatibus. Quia ducimus inventore culpa dolores distinctio quisquam quia. Pariatur modi qui labore.'),
(26, 'Pariatur reprehenderit aliquam nihil consequuntur et ex reiciendis. Sed voluptatem rerum laudantium et exercitationem minima velit. Animi qui consequuntur et non vero possimus est ipsa.', 'Nesciunt odit aut autem dicta. Possimus est dolorem omnis consectetur. Magni at doloremque occaecati. Quia quis eos assumenda eum nostrum.'),
(27, 'Ut aut autem fuga ut voluptatem. Commodi et iusto voluptates totam dolorem quia voluptas. Id nesciunt eveniet rerum quis excepturi. Ut id eos eum quia sint aliquam rerum. Molestias velit voluptate corporis et est.', 'Sed velit sunt nostrum dolorum impedit est sint. Voluptatum dolore harum rerum molestiae dicta quo. Non et assumenda est in quibusdam. Doloribus consequatur dolor ut harum sapiente nostrum nisi rerum. Et maxime libero et culpa.'),
(28, 'Architecto ratione dolor sequi aliquam. Consectetur perspiciatis vel itaque totam sit non molestias. Quo odit quia sit laboriosam. Est consequuntur id voluptas ipsa cum quas.', 'Sed non dolorum nam eveniet. Voluptas vel amet eius saepe illo rem. Enim minima iste est voluptas.'),
(29, 'Quis vero est quos nostrum eaque atque. Aliquid deserunt est non. Est vitae est ullam qui. Deleniti omnis ipsum minima est unde quae at.', 'Repellat laboriosam dicta est eaque impedit occaecati saepe. Molestiae beatae corrupti labore quo aut. Dicta quaerat alias accusamus maxime.'),
(30, 'Vel sed voluptate tempore harum quia. Ducimus magnam quia et perspiciatis eaque repellendus ab. Eum sint nobis aut accusamus omnis amet dignissimos. Et quia officia tempore quos dolore.', 'Vero repellendus modi illum autem dolores distinctio tempore. Deleniti et repudiandae tenetur eum. Enim voluptatem labore vero veniam et est.');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `media_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `label`, `description`, `media_path`) VALUES
(1, 'Repellendus molestiae animi et et quisquam. Laborum praesentium fugiat fuga a quam et reiciendis nemo. Dolorem in aut sapiente non voluptatem rem omnis nihil.', 'Aut ullam ducimus iusto. Et repudiandae et velit ullam. Porro numquam molestias dolor molestiae alias aliquam.', 'http://hansen.com/hic-distinctio-enim-numquam-placeat-est'),
(2, 'Ut explicabo voluptatibus harum ullam. Placeat est eos nobis.', 'Cupiditate et rerum nesciunt explicabo sit totam at. Inventore eum laudantium aut odit a. Nulla ut ut quos nemo.', 'https://www.grady.com/laborum-et-totam-ex-enim-et'),
(3, 'Porro sint aut nisi ut aliquam in. Et suscipit modi minima aut nesciunt delectus sit. Neque quis voluptas iste consequatur id incidunt ea.', 'Doloribus quidem omnis sint laudantium voluptas nostrum eligendi. Qui unde natus repellat non eum distinctio ipsa. Deserunt assumenda voluptas vitae ut nobis.', 'http://doyle.com/sed-in-facilis-sed-doloribus-necessitatibus.html'),
(4, 'Aspernatur officiis saepe recusandae occaecati aperiam iste. Eos reiciendis necessitatibus numquam excepturi quam aut voluptatem rerum. Debitis eveniet eaque deserunt repellat aut libero sunt.', 'Ipsa vitae provident nulla voluptatem nihil. Qui cupiditate minus aut vel ut soluta alias suscipit. Error laborum qui qui quia placeat provident minus quasi. Explicabo praesentium dolorum praesentium consequatur.', 'http://www.boyle.info/sapiente-sed-omnis-expedita-molestiae'),
(5, 'Ut qui qui asperiores. Ut autem nobis est voluptas provident deleniti maiores a.', 'Rerum ipsa recusandae iste doloremque molestiae velit. Exercitationem eum quis rerum aut veniam. Impedit iusto velit ea aspernatur. Maiores velit iure architecto harum.', 'http://www.hartmann.com/et-quis-earum-hic-tempora-dolorum.html'),
(6, 'Quia eligendi quae quia beatae. Consequatur ea eum molestiae odit maxime dolorem. Aut aut quasi iste quo odit.', 'Perspiciatis accusamus labore aliquam officiis. Quis pariatur incidunt aut. Quis sequi eum dolorum debitis quis aut.', 'http://kulas.org/'),
(7, 'Qui tempora illo rem sint. Sapiente provident aut harum sed sint. Aperiam magni consectetur dolore dicta repudiandae vel. Hic odit aut eaque quo eius.', 'Id officia assumenda ea enim. Repellendus expedita possimus distinctio doloremque enim assumenda nihil facere. Et minima consequuntur recusandae repellendus sed velit eligendi perferendis. Est blanditiis impedit esse error porro quae voluptatem.', 'http://morar.net/aut-consequatur-magni-minima-odio-adipisci'),
(8, 'Maxime repellendus id enim et ut ducimus libero architecto. Beatae est sit debitis quibusdam ratione nobis sint. Eos voluptatem in iure quod magni maiores temporibus.', 'Qui consequatur explicabo minima saepe eligendi dolorem. Fugit et nemo a sed veritatis corporis. Ut ut molestiae nostrum dolores. Sequi inventore a sit rerum temporibus.', 'http://johnson.com/qui-dolorem-consequatur-molestiae-itaque-et'),
(9, 'Quia numquam voluptas blanditiis autem repellat. Odit id quos quam. Voluptatem incidunt et nemo sit.', 'Velit voluptates nemo consequuntur nisi ea. Consequuntur omnis iste repudiandae molestiae nihil necessitatibus. Necessitatibus possimus vero quo quod nulla nisi dolores.', 'https://lind.org/occaecati-ratione-commodi-neque-sit-neque-est-accusantium.html'),
(10, 'Nihil suscipit est quia nam. Sapiente quis et voluptates adipisci eos maxime.', 'Ut impedit rerum id magnam. Unde non qui eaque dignissimos et porro. Autem sit impedit consequatur et voluptatem ullam. Officia sed placeat repellendus ipsam consequuntur consequuntur ad.', 'https://lynch.net/est-ab-est-fugit-natus-exercitationem-laborum-architecto.html'),
(11, 'Aut quia reprehenderit labore iusto. Eum molestiae quia sunt modi maxime nostrum et repudiandae. Distinctio molestias omnis quibusdam omnis quis. Ab optio inventore iusto.', 'Expedita deleniti nisi ad et sint. Vel facilis consequatur cum architecto sit est eum ut. Rerum iusto cum voluptatum itaque.', 'http://www.wolff.info/ut-eligendi-occaecati-sit-et-libero'),
(12, 'Est et aut autem ipsum. Occaecati et facilis quo. Dolor consequatur quod inventore aliquam. Optio autem qui qui accusantium quia.', 'Explicabo possimus dolores in dicta sit ipsam ut illo. Molestiae soluta quam consequuntur pariatur.', 'http://www.feil.com/ipsum-cumque-ut-est-accusamus-laboriosam-non-voluptatibus.html'),
(13, 'Possimus veniam saepe odio repudiandae ut. Aliquid pariatur sit aut odio atque mollitia ratione rem. Error aut ut rerum magnam quia amet fugiat quisquam.', 'Asperiores nihil quo impedit doloribus a tempore. Tempore veritatis nam blanditiis dolorem qui qui ullam. Sed eum recusandae commodi itaque quia. Sint et sed eligendi quas eos veritatis assumenda.', 'https://kertzmann.net/perferendis-quisquam-quasi-tempore-recusandae.html'),
(14, 'Mollitia sed dolores velit soluta blanditiis officia. Sequi necessitatibus tenetur et aut excepturi nisi. Aliquid corrupti incidunt eos nisi reiciendis quae ut. Sed et nesciunt in debitis sint rerum illum.', 'Dolor est ipsum officia natus velit eum velit minima. Earum vel recusandae ex ipsa dignissimos hic laudantium. Sed est nostrum voluptas perspiciatis dolore. Qui et totam magnam harum doloribus optio animi.', 'http://www.murazik.com/aut-aut-quaerat-suscipit-rerum-ut-ratione.html'),
(15, 'Odio et molestiae nesciunt quis consequatur. Ea hic ex animi rem dicta. Ducimus quas ullam aut nisi et harum.', 'Quis dolores et iste totam dolores. Consequuntur maiores id exercitationem optio maiores. Sed quis eum placeat voluptas. Maiores sit voluptatem nihil quas accusantium aut.', 'http://cronin.com/sunt-est-quas-dolor-est-corporis-delectus'),
(16, 'Quo similique praesentium veniam. Magni nihil blanditiis nam laudantium necessitatibus rem. Corrupti ut quo quisquam assumenda et aut. Rem tenetur velit qui vero incidunt at ut. Consectetur quia odit doloribus.', 'Ex ab voluptatem autem est voluptatibus voluptas. Animi itaque nobis non ut ipsa quos aliquid. Cum harum explicabo doloribus repellendus aut. Dicta minima impedit qui aspernatur voluptatum autem sint.', 'http://schuppe.com/tenetur-ut-odit-eos-ex-nemo-pariatur'),
(17, 'Voluptate eius unde odio aut architecto molestias. Vitae nihil aut ut minima voluptatem velit reprehenderit. Explicabo excepturi explicabo et incidunt earum eaque est.', 'Ut magni iste quia qui id non ad. Ullam tempore ex et. Asperiores reiciendis itaque velit et ex. Quidem voluptatem enim consequatur sunt soluta odit.', 'http://pacocha.com/fugit-reprehenderit-veniam-rerum-ea-consequatur-id-facere.html'),
(18, 'Nesciunt sed rerum possimus architecto praesentium ab explicabo. Facilis sed deserunt aut accusamus tenetur. Nam laudantium magni eum aliquam. Incidunt eius minus impedit id qui.', 'Molestiae facilis dignissimos excepturi ex. Placeat praesentium molestiae sequi aliquam. Nostrum minus ut et error perferendis aliquid.', 'http://crona.com/asperiores-aspernatur-animi-fugiat-iste'),
(19, 'Provident dolorem vitae quo amet veniam qui ut nemo. Atque voluptatem aut dolorem qui est. Recusandae nam voluptatum est nostrum sint. Velit dolores molestiae ducimus illum.', 'Voluptatem cupiditate alias quaerat quibusdam nostrum sed qui. Eligendi vero eos earum est at. Et qui quaerat animi natus voluptatibus ad eligendi qui. Expedita iste cupiditate qui explicabo sed veritatis.', 'http://www.zboncak.com/'),
(20, 'Omnis commodi amet culpa rerum velit aspernatur ut. Enim veniam cumque quod aut sapiente. Amet ut aspernatur iure tenetur est necessitatibus consequatur. Consequuntur eveniet dolores autem minus voluptas.', 'Magnam vel voluptates quam. Sint suscipit nemo quia. Sint praesentium culpa veritatis voluptas. Accusamus sit dolor mollitia deleniti eaque earum.', 'http://www.erdman.com/architecto-voluptatem-reprehenderit-aut-eaque-qui-tempora-autem'),
(21, 'Numquam et doloremque aut dicta ipsa totam aliquid magnam. Ex sunt molestiae necessitatibus tenetur dolore. Alias non neque dolor fuga quos.', 'Quia sunt qui mollitia temporibus qui. Repudiandae dolor ipsum laborum iste. Eos asperiores rerum quas vel tempora reprehenderit provident vel. Culpa est minima aut repellat fugit ipsum.', 'https://nikolaus.com/quod-eveniet-cupiditate-illum-ipsam-fuga-deleniti-numquam.html'),
(22, 'Enim aut deserunt et aspernatur. Quam maiores ex aut commodi. Laboriosam fugit nemo quia laboriosam.', 'Voluptatibus voluptate voluptatum laborum incidunt mollitia harum ex. Aliquid eaque nulla est nihil corrupti quod enim. Tenetur pariatur non impedit. Praesentium qui temporibus beatae aut.', 'http://borer.com/et-vel-quo-in-qui-aliquam-eveniet-quisquam.html'),
(23, 'Aut velit ut voluptatem blanditiis quisquam nihil illum. Reiciendis voluptatem earum omnis. Nobis facere incidunt labore provident consequuntur perferendis. Non est pariatur magnam atque excepturi.', 'Quasi veritatis et minima eaque ab voluptas delectus vitae. Sed sed unde quis reiciendis sint fugiat laudantium. Ex voluptatem sit sunt. Velit eligendi nostrum cupiditate eaque.', 'http://www.kuphal.com/repellat-eveniet-totam-harum-rerum-quidem-illum'),
(24, 'Corrupti sapiente reiciendis asperiores quae ex culpa eos laborum. Incidunt ut ea voluptatem voluptas magnam. Ut nihil suscipit sed dolores. Molestiae officia beatae porro.', 'Fugit corrupti aut qui voluptatem. Corporis iure quas neque ut. Quo optio aut deserunt qui dicta nostrum. Ut numquam aut eveniet laborum.', 'https://www.kohler.com/eligendi-et-dolorem-expedita-ut'),
(25, 'Eum non delectus est. Explicabo aspernatur ut est quos modi doloremque. Quia maiores non soluta deleniti tempora aut possimus qui.', 'Aliquid hic ipsam ut. Velit reprehenderit saepe est facilis iusto assumenda similique et. Et voluptatem at nemo dignissimos aspernatur perspiciatis nostrum.', 'http://quitzon.org/optio-voluptas-libero-optio-aut-quia-laborum-qui.html'),
(26, 'Ea nostrum dicta commodi quibusdam soluta dolor. Repellendus quod harum consectetur voluptatum eligendi. Sint dolorem consequuntur amet deleniti sed pariatur omnis. Sunt possimus id ut temporibus nihil. Possimus fugiat repellendus facilis atque.', 'Sed dicta mollitia possimus est quia neque voluptas non. Alias veritatis cum ducimus tempore optio consequuntur provident. Voluptatibus velit ut saepe aut. Laudantium cupiditate autem eum. Perspiciatis est aut temporibus sequi quas.', 'http://emard.com/sed-consequatur-qui-voluptatem-voluptas'),
(27, 'Porro dolorem nesciunt officiis dolorem voluptas modi animi. Animi in ex voluptatem et molestias et sunt. Eum aliquam ratione nostrum sint non.', 'Necessitatibus ut pariatur magnam harum et. Culpa aspernatur optio error facilis dolore autem provident ut. Officiis ipsam voluptatem qui odio exercitationem laboriosam.', 'http://connelly.info/voluptatem-beatae-sapiente-sint-labore.html'),
(28, 'Maiores provident ut inventore eaque rerum quia et. Quas rem exercitationem voluptatibus dicta incidunt esse. Suscipit asperiores magni velit aperiam dolor. Optio inventore tempora sunt ea id.', 'Voluptas repudiandae id accusamus est culpa eligendi. Eos exercitationem illo consectetur quia asperiores. Qui eius minima possimus. Dignissimos explicabo ab dolorem est et accusamus.', 'https://www.turner.com/ut-rem-autem-sed-ab-voluptate-explicabo'),
(29, 'Expedita quibusdam quis et ipsa nihil aperiam odio quo. Nihil tenetur et est neque quia dolores vel. Ut porro aliquam quibusdam quidem. Et enim eligendi natus consequatur qui.', 'Aut totam quas sed expedita. Debitis iste qui ullam quibusdam. Est numquam sint maxime.', 'http://www.murray.info/ipsa-sint-quia-odit-debitis'),
(30, 'Impedit at nihil quae. Molestias ut magnam eaque. Aliquid hic praesentium qui delectus quisquam et velit.', 'Omnis asperiores velit sint cumque. Harum doloremque incidunt non quis excepturi suscipit autem. Vel dolor sequi tempora cumque.', 'http://www.zemlak.org/voluptatem-quaerat-maxime-totam-rerum-est-molestias-vel.html');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `version` float NOT NULL,
  `publication_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bodytext` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `media_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `creation_id` int(11) NOT NULL,
  `publication_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bodytext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `spells`
--

CREATE TABLE `spells` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `media_path` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time_played` int(11) NOT NULL,
  `gold_earned` int(11) NOT NULL,
  `completed_chapters` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Index pour la table `character_types`
--
ALTER TABLE `character_types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `character__items`
--
ALTER TABLE `character__items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `character_id` (`character_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Index pour la table `character__spells`
--
ALTER TABLE `character__spells`
  ADD PRIMARY KEY (`id`),
  ADD KEY `character_id` (`character_id`),
  ADD KEY `item_id` (`spell_id`);

--
-- Index pour la table `creations`
--
ALTER TABLE `creations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `author_id` (`author_id`);

--
-- Index pour la table `faq_items`
--
ALTER TABLE `faq_items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `version` (`version`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `creation_id` (`creation_id`);

--
-- Index pour la table `spells`
--
ALTER TABLE `spells`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `character_types`
--
ALTER TABLE `character_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `character__items`
--
ALTER TABLE `character__items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `character__spells`
--
ALTER TABLE `character__spells`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `creations`
--
ALTER TABLE `creations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `faq_items`
--
ALTER TABLE `faq_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `spells`
--
ALTER TABLE `spells`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `character_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `characters_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `character__items`
--
ALTER TABLE `character__items`
  ADD CONSTRAINT `character__items_ibfk_1` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `character__items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `character__spells`
--
ALTER TABLE `character__spells`
  ADD CONSTRAINT `character__spells_ibfk_1` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `character__spells_ibfk_2` FOREIGN KEY (`spell_id`) REFERENCES `characters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `creations`
--
ALTER TABLE `creations`
  ADD CONSTRAINT `creations_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`creation_id`) REFERENCES `creations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
