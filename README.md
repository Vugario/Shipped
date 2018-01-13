# Shipped
A simple release management tool with notes, test results, and release planning.

## Why
- Keep track of what is being released and when
- Provide instructions on how to deploy (migrations, config changes, etc.)
- Keep track of how it has been tested
- Provide clear release notes

## How
- Every Github PR is imported into Shipped
- Shipped will centralise all information (Test Results, Notes, etc.)
- When you're ready Shipped can create a Github Release
- Shipped will inform stakeholders before, and after a release
- Shipped can help with potential problems (rollback, hotfixes, etc.)

## Installation
- `git clone git@github.com:Vugario/Shipped.git && cd Shipped`
- `make provision`
- `make up`
- Visit http://0.0.0.0:9000/
