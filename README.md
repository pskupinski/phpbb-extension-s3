# phpBB 3.2 AWS S3 Extension

## Description

An extension for [phpBB 3.2](https://www.phpbb.com) that utilizes AWS S3 as the filesystem for uploaded files.

This repo is an updated fork of the [AusinMaddox/s3](https://github.com/AustinMaddox/phpbb-extension-s3) phpbb extension.

This fork adds:
* phpbb 3.2 and php 7.2+ support
* CDN domain support

## Installation

Clone into phpBB/ext/AustinMaddox/s3:

    git clone https://github.com/pskupinski/phpbb-extension-s3.git phpBB/ext/AustinMaddox/s3

Set up the dependencies:

    composer install --dev

Go to "ACP" > "Customise" > "Extensions" and enable the "AWS S3" extension.

## Collaborate

* Create a issue in the [tracker](https://github.com/pskupinski/phpbb-extension-s3/issues).
* Submit a [pull-request](https://github.com/pskupinski/phpbb-extension-s3/pulls).

## License

[GPLv2](license.txt)
