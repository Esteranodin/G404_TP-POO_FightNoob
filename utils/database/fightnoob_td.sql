CREATE TABLE `Class_skill`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_class` BIGINT NULL,
    `id_skill` BIGINT NULL
);
CREATE TABLE `Skill`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NULL,
    `description` VARCHAR(255) NULL,
    `cost` BIGINT NULL
);
CREATE TABLE `Class`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NULL,
    `description` VARCHAR(255) NULL
);
CREATE TABLE `Hero`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(191) NOT NULL,
    `PV` BIGINT NOT NULL,
    `MP` BIGINT NULL,
    `stamina` BIGINT NULL,
    `level` BIGINT NULL,
    `id_class` BIGINT NULL,
    `img_path` VARCHAR(255) NULL
);
ALTER TABLE
    `Hero` ADD UNIQUE `hero_name_unique`(`name`);
ALTER TABLE
    `Hero` ADD CONSTRAINT `hero_id_class_foreign` FOREIGN KEY(`id_class`) REFERENCES `Class`(`id`);
ALTER TABLE
    `Class_skill` ADD CONSTRAINT `class_skill_id_classe_foreign` FOREIGN KEY(`id_class`) REFERENCES `Class`(`id`);
ALTER TABLE
    `Class_skill` ADD CONSTRAINT `class_skill_id_skill_foreign` FOREIGN KEY(`id_skill`) REFERENCES `Skill`(`id`);