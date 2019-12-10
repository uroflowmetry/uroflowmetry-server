# Uroflometry - Revolutionizing Urological Screening App

## Overview

The fundamental, non-invasive analysis for urological health issue is “uroflowmetry” . 

Uroflometer  was implemented with a Software using video-sensors of Mobile Phones to measure “ml/s” with advanced Computer Vision and AI algorithmic. Urine flows into a bottle, that’s recorded by a phone.  And you can check the measured result on web page as well as mobile app.

This repository is for web app of Uroflowmeter solution.

### Features


- Uroflowmetry measure milliliters of urine over time ml/s 

- Uroflowmetry data collection is standardized internationally 

- Uroflowmetry augment the ml/s data with a graph set


## Installation

The requirements to Uroflowmetry web application is:

- **PHP - Supported Versions**: >= 7.1
- **Webserver**: Nginx or Apache
- **Database**: MySQL, or Maria DB


### Composer Package

```
$ composer create-project uroflowmetry --stability=stable --keep-vcs
$ cd uroflowmetry 
```
**Important**: If you have not yet installed composer: [Installation - Linux / Unix / OSX](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)


### Git Clone

```
$ git clone git@github.com:uroflowmetry/uroflowmetry-server.git
$ cd uroflowmetry
$ composer update
$ composer run-script post-root-package-install
```


## Setup

**Important**: If you have not the .env file in root folder, you must copy or rename the .env.example to .env

#### Application URL

.env file

```
APP_URL=http://yourdomain.tld (you must use protocol http or https)
```

#### Language

Options: en | zh | zh_cn | ru | de | es | pt | it | id | fr | hu

.env file

```
APP_LANG=en
```


#### Database

.env file

```

DB_CONNECTION=mysql
DB_HOST=XXXXXX
DB_PORT=3306
DB_DATABASE=XXXXX
DB_USERNAME=XXXX
DB_PASSWORD=XXXXX
```

**Remember**: First, you must create a database for Uroflowmetry and then must import tables from sql file.



## Main Screens

![Screenshot 0](http://i.imgur.com/LSiRfpT.png)
![Screenshot 0](http://i.imgur.com/76rtMuG.png)


## Test Account

ID : test

Password : test


**Remember**: You can create a new account from android app.

## Thanks

