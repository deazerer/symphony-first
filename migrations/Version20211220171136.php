<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211220171136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE meter CHANGE id id INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE status status TINYINT(1) DEFAULT NULL COMMENT \'для удаления = 3\', CHANGE ts_include ts_include INT DEFAULT NULL COMMENT \'время добавления\', CHANGE category category TINYINT(1) NOT NULL, CHANGE sub_type sub_type TINYINT(1) DEFAULT NULL, CHANGE tariffs_num tariffs_num TINYINT(1) DEFAULT \'NULL\', CHANGE access_type access_type TINYINT(1) DEFAULT NULL, CHANGE request_type request_type TINYINT(1) DEFAULT NULL, CHANGE owner_type owner_type TINYINT(1) NOT NULL, CHANGE `virtual` `virtual` TINYINT(1) NOT NULL, CHANGE k_in_meter k_in_meter TINYINT(1) NOT NULL, CHANGE external external TINYINT(1) NOT NULL, CHANGE low_data_freq low_data_freq TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE meters_data_tech CHANGE meter_id meter_id INT UNSIGNED NOT NULL, CHANGE time_server time_server INT UNSIGNED NOT NULL, CHANGE time_meter time_meter INT UNSIGNED DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE meter CHANGE id id INT UNSIGNED NOT NULL, CHANGE status status TINYINT(1) DEFAULT \'0\' COMMENT \'для удаления = 3\', CHANGE ts_include ts_include INT DEFAULT 0 COMMENT \'время добавления\', CHANGE category category TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE sub_type sub_type TINYINT(1) DEFAULT \'0\', CHANGE tariffs_num tariffs_num TINYINT(1) DEFAULT \'NULL\', CHANGE access_type access_type TINYINT(1) DEFAULT \'0\', CHANGE request_type request_type TINYINT(1) DEFAULT \'0\', CHANGE owner_type owner_type TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE `virtual` `virtual` TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE k_in_meter k_in_meter TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE external external TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE low_data_freq low_data_freq TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE meters_data_tech CHANGE meter_id meter_id INT UNSIGNED DEFAULT 0 NOT NULL, CHANGE time_server time_server INT UNSIGNED DEFAULT 0 NOT NULL, CHANGE time_meter time_meter INT UNSIGNED DEFAULT 0');
    }
}
