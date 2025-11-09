# Tyractyl

Tyractyl® is a free, open-source game server management panel built with PHP, React, and Go. Designed with security in mind, Tyractyl runs all game servers in isolated Docker containers while exposing a beautiful and intuitive UI to end users.

This is a modern game server management panel with custom branding and enhanced UI.

## Project Structure

```
Tyractyl/
├── daemon/         # The server control plane (Go) - to be renamed to talon/
└── panel/          # The web interface (PHP/Laravel/React) - needs to be recreated
```

## Components

### Panel
The web interface built with:
- PHP 8.2+ with Laravel framework
- React with TypeScript for the frontend
- Tailwind CSS for styling
- Modern UI/UX design

### Daemon  
The server control plane built with:
- Go for high performance and security
- Docker integration for container isolation
- Built-in SFTP server
- HTTP API for server management

## Features

- **Modern UI**: Completely redesigned interface inspired by Claude and Vercel with clean monochrome aesthetic
  - Black, grey, white color scheme for professional appearance
  - Red, yellow, green alerts and toasts for clear status indication
  - Smooth transitions and micro-interactions
  - Responsive design with modern typography (Inter font)
- **Secure**: All game servers run in isolated Docker containers
- **Multi-game Support**: Minecraft, Rust, Terraria, Teamspeak, and more
- **High Performance**: Built with modern technologies for optimal performance
- **API-First**: Comprehensive REST API for automation
- **Real-time**: WebSocket connections for live server logs and console

## Design System

The modern UI features:
- **Color Palette**: Clean monochrome base (black, grey, white) with semantic colors
- **Typography**: Inter font family for excellent readability
- **Components**: Modern card layouts, subtle shadows, and rounded corners
- **Interactions**: Smooth hover states, focus indicators, and transitions
- **Accessibility**: Proper contrast ratios and keyboard navigation support

## Supported Games

- Minecraft (Paper, Sponge, Bungeecord, Waterfall, and more)
- Rust
- Terraria
- Teamspeak
- Mumble
- Team Fortress 2
- Counter Strike: Global Offensive
- Garry's Mod
- ARK: Survival Evolved
- And many more...

## Installation

### Prerequisites

- **PHP 8.2+** with required extensions:
  - `php-cli`, `php-fpm`, `php-common`, `php-mysql`, `php-mbstring`, `php-xml`, `php-curl`, `php-zip`, `php-bcmath`, `php-gd`, `php-intl`
- **MySQL 8.0+** or **MariaDB 10.3+**
- **Redis 6.0+**
- **Web Server**: Nginx or Apache
- **Composer** 2.0+
- **Node.js** 18+ and **npm** or **yarn**
- **Git**

### Quick Install (Docker)

```bash
# Clone the repository
git clone https://github.com/Tyractyl/Panel.git
cd Panel

# Copy environment file
cp .env.example .env

# Build and start with Docker Compose
docker-compose up -d

# Install dependencies and setup
docker-compose exec panel composer install --no-dev --optimize-autoloader
docker-compose exec panel php artisan key:generate --force
docker-compose exec panel php artisan migrate --force
docker-compose exec panel php artisan p:user:make

# Build frontend assets
docker-compose exec panel npm install
docker-compose exec panel npm run build
```

### Manual Installation

#### 1. Clone Repository
```bash
git clone https://github.com/Tyractyl/Panel.git
cd Panel
```

#### 2. Install Dependencies
```bash
# PHP dependencies
composer install --no-dev --optimize-autoloader

# Node.js dependencies
npm install
npm run build
```

#### 3. Configure Environment
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate --force

# Edit environment file with your database and other settings
nano .env
```

#### 4. Setup Database
```bash
# Run migrations
php artisan migrate --force

# Create admin user
php artisan p:user:make
```

#### 5. Configure Web Server

**Nginx Configuration:**
```nginx
server {
    listen 80;
    server_name your-domain.com;
    root /var/www/tyractyl/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

#### 6. Setup Queue Worker
```bash
# Create systemd service for queue worker
sudo nano /etc/systemd/system/tyractyl-queue.service
```

```ini
[Unit]
Description=Tyractyl Queue Worker
After=network.target

[Service]
Type=simple
User=www-data
WorkingDirectory=/var/www/tyractyl
ExecStart=/usr/bin/php artisan queue:work --sleep=3 --tries=3
Restart=always

[Install]
WantedBy=multi-user.target
```

```bash
# Enable and start the service
sudo systemctl enable tyractyl-queue
sudo systemctl start tyractyl-queue
```

#### 7. Setup Cron Job
```bash
# Edit crontab
crontab -e

# Add this line (run every minute)
* * * * * php /var/www/tyractyl/artisan schedule:run >> /dev/null 2>&1
```

### Post-Installation

1. **Configure File Permissions:**
```bash
chown -R www-data:www-data /var/www/tyractyl
chmod -R 755 /var/www/tyractyl/storage
chmod -R 755 /var/www/tyractyl/bootstrap/cache
```

2. **Verify Installation:**
   - Access your panel at `http://your-domain.com`
   - Login with the admin user created during setup
   - Configure your first node and server

### Daemon Installation

After installing the panel, install the daemon (Talon) on your game server nodes:

```bash
# Clone the daemon repository
git clone https://github.com/Tyractyl/Daemon.git
cd Daemon

# Build the daemon
go build -o talon

# Configure the daemon
cp config.example.yml config.yml
# Edit config.yml with your panel details

# Start the daemon
./talon
```

For detailed daemon installation instructions, see the [Daemon Repository](https://github.com/Tyractyl/Daemon).

## License

Tyractyl® Copyright © 2025 Mattias Micu.

Code released under the MIT License.

## Acknowledgments


