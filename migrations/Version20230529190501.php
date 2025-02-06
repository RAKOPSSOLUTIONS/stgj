<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230529190501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE compaign (id INT AUTO_INCREMENT NOT NULL, subject VARCHAR(255) NOT NULL, begin_on DATE DEFAULT NULL, end_on DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE countries CHANGE countryCode countryCode CHAR(2) NOT NULL, CHANGE countryName countryName VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE link CHANGE user_id user_id INT NOT NULL, CHANGE file_name file_name VARCHAR(255) DEFAULT NULL, CHANGE orientation orientation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE link ADD CONSTRAINT FK_36AC99F1EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE link ADD CONSTRAINT FK_36AC99F112469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE link ADD CONSTRAINT FK_36AC99F1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_36AC99F1EA9FDD75 ON link (media_id)');
        $this->addSql('CREATE INDEX IDX_36AC99F112469DE2 ON link (category_id)');
        $this->addSql('CREATE INDEX IDX_36AC99F1A76ED395 ON link (user_id)');
        $this->addSql('ALTER TABLE media CHANGE country_id country_id INT NOT NULL, CHANGE category category VARCHAR(150) NOT NULL, CHANGE visitors_count visitors_count INT NOT NULL, CHANGE contact contact VARCHAR(150) DEFAULT NULL, CHANGE email email VARCHAR(150) NOT NULL, CHANGE telephone telephone VARCHAR(12) DEFAULT NULL');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CF92F3E70 FOREIGN KEY (country_id) REFERENCES countries (id)');
        $this->addSql('CREATE INDEX IDX_6A2CA10CF92F3E70 ON media (country_id)');
        $this->addSql('ALTER TABLE media_geographical_system ADD CONSTRAINT FK_16BA6E57EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE media_geographical_system ADD CONSTRAINT FK_16BA6E577F241DB7 FOREIGN KEY (geographical_system_id) REFERENCES geographical_system (id)');
        $this->addSql('CREATE INDEX IDX_16BA6E57EA9FDD75 ON media_geographical_system (media_id)');
        $this->addSql('CREATE INDEX IDX_16BA6E577F241DB7 ON media_geographical_system (geographical_system_id)');
        $this->addSql('ALTER TABLE media_interest ADD CONSTRAINT FK_635F34D5EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE media_interest ADD CONSTRAINT FK_635F34D55A95FF89 FOREIGN KEY (interest_id) REFERENCES interest (id)');
        $this->addSql('CREATE INDEX IDX_635F34D5EA9FDD75 ON media_interest (media_id)');
        $this->addSql('CREATE INDEX IDX_635F34D55A95FF89 ON media_interest (interest_id)');
        $this->addSql('ALTER TABLE media_languages ADD CONSTRAINT FK_85B1E0F7EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('CREATE INDEX IDX_85B1E0F7EA9FDD75 ON media_languages (media_id)');
        $this->addSql('ALTER TABLE media_social_network ADD CONSTRAINT FK_4ECAA661EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('CREATE INDEX IDX_4ECAA661EA9FDD75 ON media_social_network (media_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE compaign');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE countries CHANGE countryCode countryCode CHAR(2) DEFAULT \'\' NOT NULL, CHANGE countryName countryName VARCHAR(100) DEFAULT \'\' NOT NULL');
        $this->addSql('ALTER TABLE link DROP FOREIGN KEY FK_36AC99F1EA9FDD75');
        $this->addSql('ALTER TABLE link DROP FOREIGN KEY FK_36AC99F112469DE2');
        $this->addSql('ALTER TABLE link DROP FOREIGN KEY FK_36AC99F1A76ED395');
        $this->addSql('DROP INDEX IDX_36AC99F1EA9FDD75 ON link');
        $this->addSql('DROP INDEX IDX_36AC99F112469DE2 ON link');
        $this->addSql('DROP INDEX IDX_36AC99F1A76ED395 ON link');
        $this->addSql('ALTER TABLE link CHANGE user_id user_id INT DEFAULT NULL, CHANGE file_name file_name VARCHAR(100) NOT NULL, CHANGE orientation orientation VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CF92F3E70');
        $this->addSql('DROP INDEX IDX_6A2CA10CF92F3E70 ON media');
        $this->addSql('ALTER TABLE media CHANGE country_id country_id INT DEFAULT NULL, CHANGE category category VARCHAR(150) DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE visitors_count visitors_count INT DEFAULT NULL, CHANGE contact contact VARCHAR(150) DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE email email VARCHAR(150) DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE telephone telephone VARCHAR(12) DEFAULT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE media_geographical_system DROP FOREIGN KEY FK_16BA6E57EA9FDD75');
        $this->addSql('ALTER TABLE media_geographical_system DROP FOREIGN KEY FK_16BA6E577F241DB7');
        $this->addSql('DROP INDEX IDX_16BA6E57EA9FDD75 ON media_geographical_system');
        $this->addSql('DROP INDEX IDX_16BA6E577F241DB7 ON media_geographical_system');
        $this->addSql('ALTER TABLE media_interest DROP FOREIGN KEY FK_635F34D5EA9FDD75');
        $this->addSql('ALTER TABLE media_interest DROP FOREIGN KEY FK_635F34D55A95FF89');
        $this->addSql('DROP INDEX IDX_635F34D5EA9FDD75 ON media_interest');
        $this->addSql('DROP INDEX IDX_635F34D55A95FF89 ON media_interest');
        $this->addSql('ALTER TABLE media_languages DROP FOREIGN KEY FK_85B1E0F7EA9FDD75');
        $this->addSql('DROP INDEX IDX_85B1E0F7EA9FDD75 ON media_languages');
        $this->addSql('ALTER TABLE media_social_network DROP FOREIGN KEY FK_4ECAA661EA9FDD75');
        $this->addSql('DROP INDEX IDX_4ECAA661EA9FDD75 ON media_social_network');
    }
}
