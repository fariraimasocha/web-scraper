<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221205094929 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, author VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE source (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, wrapper_selector VARCHAR(255) NOT NULL, title_selector VARCHAR(255) NOT NULL, desc_selector VARCHAR(255) NOT NULL, link_selector VARCHAR(255) NOT NULL, date_selector VARCHAR(255) NOT NULL, image_selector VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE source');
    }
}
