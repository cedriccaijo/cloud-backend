<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220324153335 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE publications DROP FOREIGN KEY FK_32783AF4F675F31B');
        $this->addSql('DROP INDEX IDX_32783AF4F675F31B ON publications');
        $this->addSql('ALTER TABLE publications DROP author_id, DROP created_at');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE publications ADD author_id INT NOT NULL, ADD created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE publications ADD CONSTRAINT FK_32783AF4F675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_32783AF4F675F31B ON publications (author_id)');
    }
}
