##
# Library App

##### _An app for a librarian to organize books, patrons, and the checkout process._

#### AUTHORS:
_Mike Chastain & Casey Heitz_


## Setup

Add your setup information instructions here.

```
$ composer install
```
To build database from scratch (in terminal):
```
>mysql.server start
>mysql -uroot -proot
```

In MySQL:

```
CREATE DATABASE library;

USE library;

CREATE TABLE books (title VARCHAR(255), id serial PRIMARY KEY);

CREATE TABLE authors (name VARCHAR(255), id serial PRIMARY KEY);

CREATE TABLE authors_books (author_id int, book_id int, id serial PRIMARY KEY);
```
_then start up a local PHP server from within the "web" directory within the project's folder and point your browser to whatever local host server you have created._  

## Technologies Used

_This project makes use of PHP, the testing framework [PHPUnit](https://phpunit.de/), the micro-framework [Silex](http://silex.sensiolabs.org/), and uses [Twig](http://twig.sensiolabs.org/) templates. and mysql_

## To Do



### Legal



Copyright (c) 2015 Mike Chastain and Casey Heitz

This software is licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
