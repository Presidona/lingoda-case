<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240317203849 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creates the symfony_demo_user table.';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        
        // Check if the table already exists to prevent errors
        if (!$schema->hasTable('symfony_demo_user')) {
            $this->addSql('CREATE TABLE symfony_demo_user (
                id SERIAL PRIMARY KEY, 
                full_name VARCHAR(255) NOT NULL, 
                username VARCHAR(255) NOT NULL UNIQUE, 
                email VARCHAR(255) NOT NULL UNIQUE, 
                password VARCHAR(255) NOT NULL, 
                roles JSON NOT NULL
            )');
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE IF EXISTS symfony_demo_user');
    }
}
