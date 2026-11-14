# Forex General Web Trading Platform

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![JavaScript](https://img.shields.io/badge/javascript-browser-yellow.svg)
![OANDA](https://img.shields.io/badge/OANDA-API-red.svg)
![GitHub Pages](https://img.shields.io/badge/deployment-GitHub%20Pages-green.svg)

## Overview

Forex General is an open-source browser-based foreign exchange trading platform built entirely with JavaScript and designed to run directly from GitHub Pages.

The platform connects directly to the OANDA REST API and allows traders to:

- Monitor accounts
- View real-time pricing
- Place market and pending orders
- Manage positions and trades
- Execute custom algorithmic trading strategies
- Develop and test JavaScript trading bots directly in the browser

Unlike traditional desktop trading platforms, Forex General requires no software installation and can be accessed from any modern browser.

---

## Key Features

### Browser-Based Trading

- No installation required
- Works from GitHub Pages
- Cross-platform support
- Desktop, laptop, tablet, and mobile browser compatible

### Direct OANDA API Integration

- Account information
- Pricing data
- Transaction history
- Trade management
- Position management
- Order management

### Client-Side Security

All OANDA credentials are stored locally within the user's browser.

The application:

- Does not operate a backend server
- Does not transmit credentials through third-party systems
- Does not store account credentials remotely
- Uses browser Local Storage for credential persistence

This architecture significantly reduces the risk of centralized credential breaches because credentials remain under the trader's control.

> **Security Note:** Users are responsible for protecting their local devices. Anyone with access to the browser profile may be able to access stored credentials.

---

## Algorithmic Trading

Forex General provides a browser-based algorithmic trading environment using JavaScript.

Users can create:

- Trading bots
- Signal generators
- Risk management systems
- Position sizing models
- Portfolio management tools
- Automated execution systems

### Example

```javascript
if (price.bid > ema50) {
    oanda.buy("EUR_USD", 1000);
}
```

Strategies execute within the browser session.

### Important

Automated trading only remains active while:

- The browser is open
- The device remains powered
- Internet connectivity is available
- The OANDA API remains reachable

For 24/7 operation, users should consider:

- VPS hosting
- Dedicated trading workstations
- Cloud browser environments
- Containerized deployments

---

## Open Source Version

The original Forex General desktop application included several proprietary trading systems.

These proprietary components are **NOT included** in this open-source release.

### Not Included

- Forex Raptor™ Freeware
- 4-Rex™
- Triangular Arbitrage Engine
- FX News Hunter™

These systems remain proprietary and are excluded from the public repository.

---

## Browser-Based Alternative to MetaTrader

Forex General aims to provide a modern web-based alternative to traditional desktop trading platforms such as MetaTrader.

### Comparison

| Feature | Forex General | MetaTrader |
|-----------|-----------|-----------|
| Browser Based | ✅ | ❌ |
| Open Source | ✅ | ❌ |
| JavaScript Algorithms | ✅ | ❌ |
| GitHub Pages Hosting | ✅ | ❌ |
| Installation Required | ❌ | ✅ |
| Cloud Deployable | ✅ | Limited |
| OANDA Integration | ✅ | Via Plugins |

---

## Technology Stack

- HTML5
- CSS3
- JavaScript (ES6+)
- OANDA REST API
- OANDA Streaming API
- Local Storage
- GitHub Pages

---

## Architecture

```text
+----------------------+
|    Trader Browser    |
+----------+-----------+
           |
           |
           v
+----------------------+
| Forex General Client |
| HTML/CSS/JavaScript  |
+----------+-----------+
           |
           |
           v
+----------------------+
|      OANDA APIs      |
|  Pricing & Trading   |
+----------------------+
```

No application servers are required.

---

## Disclaimer

Forex trading involves substantial risk and may not be suitable for all investors.

This software is provided for educational, research, and trading purposes only.

Users are solely responsible for:

- All trading decisions
- Regulatory compliance
- Tax reporting
- Management of API credentials
- Financial losses resulting from use of the software

Past performance does not guarantee future results.

---

## Getting Started

1. Open the GitHub Pages website.
2. Enter your OANDA Account ID.
3. Enter your OANDA API Token.
4. Save credentials locally.
5. Connect to OANDA.
6. Begin manual or automated trading.

---

## Contributing

Contributions are welcome.

Possible contribution areas:

- Technical indicators
- Charting enhancements
- Strategy frameworks
- Risk management modules
- UI/UX improvements
- Backtesting engines
- Paper trading simulation

Fork the repository and submit a pull request.

---

## License

This project is released under the MIT License.

See the LICENSE file for additional information.

---

## Official Website

**Forex General**

- Website: https://forexgeneral.us
- Platform: Browser-Based Forex Trading
- API Provider: OANDA
- Source Code: GitHub

---

### Trade Anywhere. Install Nothing
