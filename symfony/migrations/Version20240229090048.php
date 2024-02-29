<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240229090048 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gizmondo (id INT AUTO_INCREMENT NOT NULL, dev_id INT NOT NULL, publisher_id SMALLINT NOT NULL, game VARCHAR(50) NOT NULL, year INT NOT NULL, INDEX IDX_97A931B3A421F7B0 (dev_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publisher (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE gizmondo ADD CONSTRAINT FK_97A931B3A421F7B0 FOREIGN KEY (dev_id) REFERENCES publisher (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gizmondo DROP FOREIGN KEY FK_97A931B3A421F7B0');
        $this->addSql('DROP TABLE gizmondo');
        $this->addSql('DROP TABLE publisher');
    }
}
