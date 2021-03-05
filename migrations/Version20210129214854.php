<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210129214854 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD title VARCHAR(255) NOT NULL, ADD slug VARCHAR(255) NOT NULL, ADD content LONGTEXT DEFAULT NULL, ADD picture VARCHAR(255) DEFAULT NULL, ADD is_published TINYINT(1) NOT NULL, ADD published_at DATETIME DEFAULT NULL, DROP created_at, CHANGE updated_at updated_at DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD created_at DATETIME NOT NULL, DROP title, DROP slug, DROP content, DROP picture, DROP is_published, DROP published_at, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
    }
}
