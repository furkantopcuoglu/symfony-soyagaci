<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200715103515 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE aile (id INT AUTO_INCREMENT NOT NULL, birinci_id INT DEFAULT NULL, ikinci_id INT DEFAULT NULL, iliskidurumu INT DEFAULT NULL, cocukdurumu INT DEFAULT NULL, INDEX IDX_11480EA9541D303 (birinci_id), INDEX IDX_11480EA9B6245196 (ikinci_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kisi (id INT AUTO_INCREMENT NOT NULL, isim VARCHAR(255) DEFAULT NULL, soyisim VARCHAR(255) DEFAULT NULL, cinsiyet VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE aile ADD CONSTRAINT FK_11480EA9541D303 FOREIGN KEY (birinci_id) REFERENCES kisi (id)');
        $this->addSql('ALTER TABLE aile ADD CONSTRAINT FK_11480EA9B6245196 FOREIGN KEY (ikinci_id) REFERENCES kisi (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE aile DROP FOREIGN KEY FK_11480EA9541D303');
        $this->addSql('ALTER TABLE aile DROP FOREIGN KEY FK_11480EA9B6245196');
        $this->addSql('DROP TABLE aile');
        $this->addSql('DROP TABLE kisi');
    }
}
