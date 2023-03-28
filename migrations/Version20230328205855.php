<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230328205855 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE config (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, logo LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:object)\', ico LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:object)\', email VARCHAR(255) DEFAULT NULL, phone VARCHAR(20) DEFAULT NULL, whatsapp VARCHAR(20) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE return_mp CHANGE dados_mp dados_mp VARCHAR(10000) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(140) NOT NULL, CHANGE cpf cpf VARCHAR(11) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE config');
        $this->addSql('ALTER TABLE return_mp CHANGE dados_mp dados_mp JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(255) NOT NULL, CHANGE cpf cpf VARCHAR(255) NOT NULL');
    }
}
