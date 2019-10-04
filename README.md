# Ciptasin-Web
> Website CV. Cipta Sinergi Manufacturing

[![NPM Version][npm-image]][npm-url]
[![Build Status][travis-image]][travis-url]
[![Downloads Stats][npm-downloads]][npm-url]

![](public/uploads/logo.png)

## Table of Contents
* [Ciptasin-Web](https://github.com/encepsuryana/csm-web#ciptasin-web)
* [Table of Contents](https://github.com/encepsuryana/csm-web#table-of-contents)
* [Welcome](https://github.com/encepsuryana/csm-web#welcome)
* [Future](https://github.com/encepsuryana/csm-web#future)
* [Server Requirement](https://github.com/encepsuryana/csm-web#server-requirement)
* [Installation](https://github.com/encepsuryana/csm-web#installation)
* [Credit](https://github.com/encepsuryana/csm-web#credit)
* [Support](https://github.com/encepsuryana/csm-web#support)

## Welcome
> Welcome to Ciptasin website, website of CV. Cipta Sinergi Manufacturing
* Created      : Agust 23, 2019
* Author       : Encep Suryana
* Email : encep.suryanajr@gmail.com
* Linkedin: [Encep Suryana](https://www.linkedin.com/in/encep-suryana-b60080113/)
* Instagram: [@encepsuryana_](https://www.instagram.com/encepsuryana_/)
* Link web     : [Ciptasin website](https://www.ciptasinergi.com)

## Introduction
Ciptasin website is a responsive Manufacturing Company profile related Website **Content Management System (CMS)**. This CMS is built completely with **PHP** and **MySQL**. It has a nice and attractive front end and back end interface that are really awesome and eyecatching. The back end has a lot of nice and maintainable features that are needed for a modern and professional website to handle the contents easily by client. Almost all kinds of changes are possible to do using the admin panel without having any kind or programming language knowledge.

This CMS is built using the **Codeigniter PHP Framework**. For this reason, it can be customized easily by other developers and they can understand the code flow easily. This CMS is strong against **SQL injection**, **XSS & CSRF attack**. Also in all pages, admin level **security is implemented**. 

## Future
This theme has the following features:
* Easy and simple interface to use
* Fully responsive for any kind of device
* Powerful admin backend like WordPress
* Clean coding with proper commenting
* Secured coding against SQL injection
* Direct access or invalid URL press stopped for each pages
* Email Server setting for contact
* Statistics of important data in dashboard
* Log Activity data in dashboard
* Product gallery and description management
* Photo gallery management
* Company Profile upload, file pdf (Secure download link)
* Flat Button management only on home page
* Unlimited news category and post creation and management
* Unlimited service creation and management
* Unlimited Facility creation and management
* Unlimited Electronic Division creation and management
* Unlimited portfolio creation and management
* Unlimited testimonial creation and management
* Unlimited partner or sponsor creation and management
* Facebook comment section for each post
* SEO meta data setup for each post, page and category
* Unlimited file uploading system
* Customizable in own language
* All major social media URL setup for top bar and sidebar
* Background and Theme color changing option
* Secure with Google Captcha authorize

## Server Requirement
> Before starting to install our item, make sure you fulfill the following requirements:
1. Required PHP version in server >= **7.0**
2. mod_rewrite must be enabled in the server.
3. For Local Server installation, you need to have **XAMPP**, **WAMP** or any **apache server with PHP and MySQL**.
4. **mod_rewrite** must be enabled in the server. 

## Installation
1. Create mysql database using cpanel or your hosting provider's system. Then import the **ciptasin-web.sql** file (that you got into the script's folder) into your created database.

2. upload all file using **FTP** or **Cpanel**, You can use our cms into root domain or subdomain. Become sure that you have uploaded the .htaccess file correctly. When you will extract the zip file staying on server via cpanel, the **.htaccess** file may not be extracted properly in the server and then the script will show error. So after extracting, you may have to manually upload the **.htaccess** file into the server that comes with the script file. 

3. Now you will have to setup the config and database file. If you are familier with **codeigniter**, you should know about it. But don't worry! We will tell step by step. 
4. Change on **application** > **config** > **config.php**
```sh
date_default_timezone_set('Asia/Jakarta') 
--> You have to setup this timezone to your desired timezone for the script

$config['base_url'] = 'yourwebsite.com';
--> This is the main URL where you will setup the script. It can be domain or sub-domain
```
5. Change on application > config > database.php
```sh
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'csm_web',
'dbdriver' => 'mysqli',

note: change these values
```
6. Make sure that you have enabled mod_rewrite on your server. Otherwise, our script will not work properly. 

## Credit
* [jQuery](https://jquery.com/)
* [Bootstrap](https://getbootstrap.com/)
* [Font Awesome](http://fontawesome.io/)
* [Francois One](https://fonts.google.com/specimen/Francois+One)
* [Lato](https://fonts.google.com/specimen/Lato)
* [OwlCarousel](https://owlcarousel2.github.io/OwlCarousel2/)
* [Magnefic Popup](http://dimsemenov.com/plugins/magnific-popup/)

## Support
Thank you for using our script. We are always here to give you necessary support for our items. If you have any query, contact us through the support section of envato or drop us an email here: encep.suryanajr@gmail.com

<!-- Markdown link & img dfn's -->
[npm-image]: https://img.shields.io/npm/v/datadog-metrics.svg?style=flat-square
[npm-url]: https://npmjs.org/package/datadog-metrics
[npm-downloads]: https://img.shields.io/npm/dm/datadog-metrics.svg?style=flat-square
[travis-image]: https://img.shields.io/travis/dbader/node-datadog-metrics/master.svg?style=flat-square
[travis-url]: https://travis-ci.org/dbader/node-datadog-metrics
