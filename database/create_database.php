<?php

require 'bootstrap.php';

$statement = <<<EOS
    -- phpMyAdmin SQL Dump
    -- version 5.1.1
    -- https://www.phpmyadmin.net/
    --
    -- Hôte : 127.0.0.1
    -- Généré le : jeu. 24 mars 2022 à 18:57
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
    DROP DATABASE IF EXISTS `zeroquest_test`;
    CREATE DATABASE IF NOT EXISTS `zeroquest_test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
    USE `zeroquest_test`;

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
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

    --
    -- AUTO_INCREMENT pour la table `items`
    --
    ALTER TABLE `items`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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

EOS;

try {
    $createTable = $dbConnection->exec($statement);
    echo "Test database was created !\n";
} catch (\PDOException $e) {
    exit($e->getMessage());
}

$faker = Faker\Factory::create();

for ($i = 0; $i < 30; ++$i) {
    /* faq_items faker data */
    $fakerFaqRequest = <<<EOS
        INSERT INTO faq_items (question, answer)
        VALUES ('$faker->paragraph', '$faker->paragraph');
    EOS;

    /* news faker data */
    $fakerNewsRequest = <<<EOS
        INSERT INTO news (version, top_news, bodytext, type, media_path)
        VALUES (
            1.$i,
            strtoupper($faker->boolean),
            '$faker->randomHtml',
            '$faker->word',
            '$faker->url'
        );
    EOS;    
        /* items faker data */
        $fakerItemsRequest = <<<EOS
        INSERT INTO items (label, description, media_path)
        VALUES (
            '$faker->paragraph',
            '$faker->paragraph',
            '$faker->url'
        );
    EOS;  

    $dbConnection->query($fakerFaqRequest);
    $dbConnection->query($fakerNewsRequest);
    $dbConnection->query($fakerItemsRequest);
}