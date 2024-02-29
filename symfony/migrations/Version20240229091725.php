<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240229091725 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gizmondo DROP FOREIGN KEY FK_97A931B3A421F7B0');
        $this->addSql('DROP TABLE gizmondo');
        $this->addSql('ALTER TABLE publisher ADD name VARCHAR(75) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gizmondo (id INT AUTO_INCREMENT NOT NULL, dev_id INT NOT NULL, publisher_id SMALLINT NOT NULL, game VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, year INT NOT NULL, INDEX IDX_97A931B3A421F7B0 (dev_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE gizmondo ADD CONSTRAINT FK_97A931B3A421F7B0 FOREIGN KEY (dev_id) REFERENCES publisher (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE publisher DROP name');
    }
}
