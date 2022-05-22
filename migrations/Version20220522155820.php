<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220522155820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA37294869C');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3A76ED395');
        $this->addSql('DROP INDEX IDX_97A0ADA37294869C ON ticket');
        $this->addSql('DROP INDEX IDX_97A0ADA3A76ED395 ON ticket');
        $this->addSql('ALTER TABLE ticket ADD user_id_id INT NOT NULL, ADD article_id_id INT NOT NULL, DROP user_id, DROP article_id');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA39D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA38F3EC46 FOREIGN KEY (article_id_id) REFERENCES article (id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA39D86650F ON ticket (user_id_id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA38F3EC46 ON ticket (article_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA39D86650F');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA38F3EC46');
        $this->addSql('DROP INDEX IDX_97A0ADA39D86650F ON ticket');
        $this->addSql('DROP INDEX IDX_97A0ADA38F3EC46 ON ticket');
        $this->addSql('ALTER TABLE ticket ADD user_id INT NOT NULL, ADD article_id INT NOT NULL, DROP user_id_id, DROP article_id_id');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA37294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA37294869C ON ticket (article_id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA3A76ED395 ON ticket (user_id)');
    }
}
