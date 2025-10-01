# wsp-note - README.md

A notebook with autosaves every second, making it ideal for use on multiple devices. It also includes a "toggle list" button with other writing pads.

---

## 📂 Project Structure

```
root/
 ├─ create_note.php          
 ├─ db.php         
 ├─ index.php         
 ├─ list_notes.php
 ├─ login.php
 ├─ load_note.php
 ├─ save_note.php
 └─ assets/
       ├─ script.js
       └─ style.css
```

---

## 🚀 Quick Start

Installation

1. Import `wspolny_pulpit_notes` table into your MySQL database (see below).
2. Copy files to your web server.
3. Update `db.php` and `login.php` with your database credentials.
4. Log in to access your notes dashboard.

## Database Schema

```sql
CREATE TABLE `wspolny_pulpit_notes` (
  `id` int(20) NOT NULL,
  `content` text NOT NULL,
  `title` text NOT NULL,
  `last_update` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

```

---

example:


```sql
INSERT INTO `wspolny_pulpit_notes` (`id`, `content`, `title`, `last_update`) VALUES
(1, 'Title1', '1111', NULL),
(2, 'Title2', '2222', NULL),
(3, 'Title3', '3333', NULL);
COMMIT;

```
---


## 📜 License

MIT — feel free to use and modify.
