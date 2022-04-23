<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220423112240 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cannabis (id INT AUTO_INCREMENT NOT NULL, variete VARCHAR(50) NOT NULL, type VARCHAR(8) NOT NULL, effets VARCHAR(60) NOT NULL, saveur VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cigarette (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, sous_marque VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(180) NOT NULL, author VARCHAR(180) NOT NULL, message LONGTEXT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medicament (id INT AUTO_INCREMENT NOT NULL, cis INT NOT NULL, medicament VARCHAR(255) NOT NULL, forme_pharmaceutique VARCHAR(155) NOT NULL, voies_administration VARCHAR(135) NOT NULL, amm VARCHAR(10) NOT NULL, titulaires VARCHAR(65) NOT NULL, surveillance VARCHAR(3) NOT NULL, prix VARCHAR(255) NOT NULL, has LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, content LONGTEXT NOT NULL, author VARCHAR(100) NOT NULL, language VARCHAR(2) NOT NULL, slug VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_140AB620989D9B62 (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE substance (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, quantity DOUBLE PRECISION DEFAULT NULL, price VARCHAR(130) NOT NULL, created_at DATETIME NOT NULL, type VARCHAR(255) NOT NULL, nocivity TINYINT(1) DEFAULT NULL, quantity_type VARCHAR(80) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, comment_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, pseudonyme VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, last_connection DATETIME NOT NULL, is_verified TINYINT(1) NOT NULL, subscribtion_date DATETIME NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D6491FE3BDAF (pseudonyme), INDEX IDX_8D93D649F8697D13 (comment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_substance (user_id INT NOT NULL, substance_id INT NOT NULL, INDEX IDX_E46146FDA76ED395 (user_id), INDEX IDX_E46146FDC707E018 (substance_id), PRIMARY KEY(user_id, substance_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)');
        $this->addSql('ALTER TABLE user_substance ADD CONSTRAINT FK_E46146FDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_substance ADD CONSTRAINT FK_E46146FDC707E018 FOREIGN KEY (substance_id) REFERENCES substance (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F8697D13');
        $this->addSql('ALTER TABLE user_substance DROP FOREIGN KEY FK_E46146FDC707E018');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE user_substance DROP FOREIGN KEY FK_E46146FDA76ED395');
        $this->addSql('DROP TABLE cannabis');
        $this->addSql('DROP TABLE cigarette');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE substance');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_substance');
    }
}
