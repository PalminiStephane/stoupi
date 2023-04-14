<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230414192723 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, start_adress VARCHAR(255) NOT NULL, destination_adress VARCHAR(255) NOT NULL, status INT NOT NULL, reviews LONGTEXT DEFAULT NULL, rating_driver INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE car');
        $this->addSql('ALTER TABLE driver ADD car VARCHAR(255) DEFAULT NULL, ADD licence_number VARCHAR(64) DEFAULT NULL, ADD rating DOUBLE PRECISION DEFAULT NULL, DROP adress, CHANGE payment immatriculation VARCHAR(64) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD lastname VARCHAR(64) DEFAULT NULL, ADD firstname VARCHAR(64) DEFAULT NULL, ADD phone_number VARCHAR(64) DEFAULT NULL, ADD billing_adress VARCHAR(255) DEFAULT NULL, ADD shipping_adress VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE car (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(64) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, model VARCHAR(128) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, immatriculation VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, assurance LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('ALTER TABLE user DROP lastname, DROP firstname, DROP phone_number, DROP billing_adress, DROP shipping_adress');
        $this->addSql('ALTER TABLE driver ADD adress LONGTEXT DEFAULT NULL, ADD payment VARCHAR(64) DEFAULT NULL, DROP car, DROP immatriculation, DROP licence_number, DROP rating');
    }
}
