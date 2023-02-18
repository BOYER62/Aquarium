<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230217110433 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE identite (id INT AUTO_INCREMENT NOT NULL, scientifique VARCHAR(255) NOT NULL, commun VARCHAR(255) NOT NULL, famille VARCHAR(255) NOT NULL, origine VARCHAR(255) NOT NULL, biotope_naturel VARCHAR(255) NOT NULL, taille VARCHAR(255) NOT NULL, difference_sexuelles VARCHAR(255) NOT NULL, comportement VARCHAR(255) NOT NULL, prix VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, maintenance VARCHAR(255) NOT NULL, soins VARCHAR(255) NOT NULL, reproduction VARCHAR(255) NOT NULL, create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', image1 VARCHAR(50) NOT NULL, image2 VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveaux (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vie_aquarium (id INT AUTO_INCREMENT NOT NULL, identite_id INT DEFAULT NULL, maintenance VARCHAR(255) NOT NULL, ph VARCHAR(255) NOT NULL, th VARCHAR(255) NOT NULL, observations VARCHAR(255) NOT NULL, temperature VARCHAR(255) NOT NULL, eau VARCHAR(255) NOT NULL, nourriture VARCHAR(255) NOT NULL, reproduction VARCHAR(255) NOT NULL, compatibilite VARCHAR(255) NOT NULL, experence_de_vie VARCHAR(255) NOT NULL, create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_4F86BA8EE5F13C8F (identite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vie_aquarium ADD CONSTRAINT FK_4F86BA8EE5F13C8F FOREIGN KEY (identite_id) REFERENCES identite (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vie_aquarium DROP FOREIGN KEY FK_4F86BA8EE5F13C8F');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE identite');
        $this->addSql('DROP TABLE niveaux');
        $this->addSql('DROP TABLE vie_aquarium');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
