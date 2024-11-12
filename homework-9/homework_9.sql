-- 6.
--    a. 
   CREATE DATABASE homework_9;
--    b. 
   CREATE TABLE library 
   (id INT(11) NOT NULL AUTO_INCREMENT, name VARCHAR(80) NOT NULL, PRIMARY KEY(id));
--    c. 
   CREATE TABLE books 
   (id INT(11) NOT NULL AUTO_INCREMENT, name VARCHAR(80) NOT NULL, PRIMARY KEY(id));
--    d. 
   CREATE TABLE libraryBook 
   (id INT(11) NOT NULL AUTO_INCREMENT, libraryID INT(11) NOT NULL, bookID INT(11) NOT NULL,
    PRIMARY KEY (id));

-- 7.
--    a. 
   INSERT INTO library(name) VALUES ('Quinn Library');
   INSERT INTO library(name) VALUES ('Walsh Library');
   INSERT INTO books(name) VALUES ('Out On a Limb');
   INSERT INTO books(name) VALUES ('Everything I Never Told You');
   INSERT INTO books(name) VALUES ('The 7 Year Slip');
--    b. 
   INSERT INTO libraryBook(libraryID, bookID) VALUES (1, 1);
   INSERT INTO libraryBook(libraryID, bookID) VALUES (2, 2);
   INSERT INTO libraryBook(libraryID, bookID) VALUES (1, 3);
--    c. 
   SELECT * 
   FROM library 
   WHERE id = 1;
--    d. 
   SELECT * 
   FROM books 
   WHERE name LIKE '%Told%';
--    e. 
   SELECT * 
   FROM books
   ORDER BY name ASC;

-- 8. 
   SELECT books.name AS book_name, library.name AS library_name
   FROM books
   JOIN libraryBook ON books.id = libraryBook.bookID
   JOIN library ON libraryBook.libraryID = library.id;

-- 9. 
   UPDATE books
   SET name = 'The Seven Year Slip'
   WHERE id = 3;
   
-- 10. 
   DELETE FROM books
   WHERE id = 2;
