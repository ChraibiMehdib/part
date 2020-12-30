<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201230001730 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, nom_competence VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cv (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(40) NOT NULL, pays VARCHAR(30) NOT NULL, ville VARCHAR(30) NOT NULL, addresse VARCHAR(50) NOT NULL, ls_experience_pro INT NOT NULL, ls_formation INT NOT NULL, ls_competences INT NOT NULL, ls_langues VARCHAR(100) NOT NULL, description VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experience_pro (id INT AUTO_INCREMENT NOT NULL, poste VARCHAR(30) NOT NULL, nom_entreprise VARCHAR(40) NOT NULL, lieu VARCHAR(40) NOT NULL, type_emploi VARCHAR(30) NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE filiere (id INT AUTO_INCREMENT NOT NULL, nom_filiere VARCHAR(255) NOT NULL, ls_promotion INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(30) NOT NULL, annee_debut INT NOT NULL, annee_fin INT NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, annee_de_debut INT NOT NULL, annee_promotion INT NOT NULL, ls_etudiants VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE cv');
        $this->addSql('DROP TABLE experience_pro');
        $this->addSql('DROP TABLE filiere');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE promotion');
    }
}
