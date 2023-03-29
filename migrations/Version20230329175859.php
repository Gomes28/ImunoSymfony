<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230329175859 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE buy_vacin ADD school_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buy_vacin ADD CONSTRAINT FK_55A86163A1BE284D FOREIGN KEY (school_id_id) REFERENCES school_vacin (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_55A86163A1BE284D ON buy_vacin (school_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE buy_vacin DROP FOREIGN KEY FK_55A86163A1BE284D');
        $this->addSql('DROP INDEX UNIQ_55A86163A1BE284D ON buy_vacin');
        $this->addSql('ALTER TABLE buy_vacin DROP school_id_id');
    }
}
