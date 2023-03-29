<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230329175721 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE school_vacin DROP FOREIGN KEY FK_B9742DC6A1BE284D');
        $this->addSql('DROP INDEX IDX_B9742DC6A1BE284D ON school_vacin');
        $this->addSql('ALTER TABLE school_vacin DROP school_id_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE school_vacin ADD school_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE school_vacin ADD CONSTRAINT FK_B9742DC6A1BE284D FOREIGN KEY (school_id_id) REFERENCES buy_vacin (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_B9742DC6A1BE284D ON school_vacin (school_id_id)');
    }
}
