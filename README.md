# Tyractyl

Tyractyl® is a free, open-source game server management panel built with PHP, React, and Go. Designed with security in mind, Tyractyl runs all game servers in isolated Docker containers while exposing a beautiful and intuitive UI to end users.

This is a fork of Pterodactyl with modernized UI and custom branding.

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

See the individual component documentation for installation instructions:

- [Daemon Installation](./daemon/README.md) (will become talon/)

Note: The panel component needs to be recreated with the modern UI design.

## License

Tyractyl® Copyright © 2015 - 2022 Dane Everitt and contributors.

Code released under the MIT License.

## Acknowledgments

This project is based on the excellent work done by the [Pterodactyl](https://github.com/pterodactyl) team.
