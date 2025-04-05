# TourchSupport

Winning Hackathon Project 🏆

## Technologies
- Laravel
- Livewire
- Filament
- Tailwind
- Flask
- Pandas
- Picle
- Sklearn
- Sail (Docker)

## Description
TourchSupport is a web application designed to help operators improve the handling of support tickets.

## Installation Instructions
To set up the project, you will need to install [Composer](https://getcomposer.org/) as well as [Docker](https://docs.docker.com/engine/install/) and [Docker Compose](https://docs.docker.com/compose/install/linux/).

### Preparation for Launch

#### Setting Up the Environment and Project

1. Place the file [train_data.csv](https://disk.yandex.ru/d/8bBpiHxJHW-UQg) into the `./python` folder.
2. Run the following commands:

   ```bash
   composer install

   cp env.example .env

   ./vendor/bin/sail up -d

   ./vendor/bin/sail artisan key:generate

   ./vendor/bin/sail artisan migrate

   ./vendor/bin/sail artisan db:seed

   ./vendor/bin/sail npm run dev
   ```

### Local Access

- **Frontend (Submit a Ticket):** [http://localhost](http://localhost)
- **Admin Panel (Ticket Management):** [http://localhost/admin](http://localhost/admin)

To create an admin user for the panel, run:

```bash
./vendor/bin/sail artisan make:filament-user
```

### Server Access

- **Production Site:** [http://79.174.95.30/](http://79.174.95.30/)

## Backend Requirements
| Requirements                                                                                             | Completed? |
|----------------------------------------------------------------------------------------------------------|:----------:|
| 1. Use a database (any type); access must be provided for evaluating the database structure               |     ✅     |
| 2. Create an administrative panel for viewing and managing support tickets                              |     ✅     |
| 3. Display analytical statistics in a user-friendly format                                              |     ✅     |
| 4. Ensure the service runs stably without unexpected crashes                                             |     ✅     |

## Frontend Requirements
| Requirements                                                   | Completed? |
|---------------------------------------------------------------|:----------:|
| 1. Develop a website interface for submitting support tickets  |     ✅     |
| 2. Implement proper project architecture                        |     ✅     |
| 3. Ensure responsiveness across different devices               |     ✅     |
| 4. Guarantee stable operation of the service                      |     ✅     |

## Post-MVP Product Requirements
| Requirements                                                            | Completed? |
|-------------------------------------------------------------------------|:----------:|
| 1. Provide user registration and authentication functionality            |     ✅     |
| 2. Train a model to enhance text accuracy                                |     ✅     |
| 3. Implement computer vision to process attachments with support tickets  |     ✅     |
| 4. Introduce enhanced monitoring for analytics in the admin panel         |     ✅     |
| 5. Integrate a chat feature for direct communication with staff           |     ✅     |
