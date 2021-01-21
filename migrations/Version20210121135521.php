<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210121135521 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE page (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, text LONGTEXT NOT NULL, resume VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page_page_category (page_id INT NOT NULL, page_category_id INT NOT NULL, INDEX IDX_17096EDAC4663E4 (page_id), INDEX IDX_17096EDA5FAC390 (page_category_id), PRIMARY KEY(page_id, page_category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page_category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE page_page_category ADD CONSTRAINT FK_17096EDAC4663E4 FOREIGN KEY (page_id) REFERENCES page (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE page_page_category ADD CONSTRAINT FK_17096EDA5FAC390 FOREIGN KEY (page_category_id) REFERENCES page_category (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page_page_category DROP FOREIGN KEY FK_17096EDAC4663E4');
        $this->addSql('ALTER TABLE page_page_category DROP FOREIGN KEY FK_17096EDA5FAC390');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE page_page_category');
        $this->addSql('DROP TABLE page_category');
    }
}
