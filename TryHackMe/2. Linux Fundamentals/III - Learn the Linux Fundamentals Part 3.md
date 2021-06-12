# Learn the Linux Fundamentals Part 3

# Task 1 - Intro 

This room is the third part in the Linux Fundamental rooms designed to teach you about various Linux concepts, and in-built tools. This room covers the following topics:

-    Advanced File Operators (Continued From Linux Fundamentals Part 2)
-    Users & Groups
-    Introduction To Shell Scripting

> No answer needed

# Task 2 - [Section 5: Advanced File Operations] - cp

> No answer needed

# Task 3 - [Section 5: Advanced file Operations] - cd && mkdir 

***Question:*** *Using relative paths, how would you cd to your home directory.*

> cd ~

***Question:*** *Using absolute paths how would you make a directory called test in /tmp*

> mkdir /tmp/test

# Task 4 - [Section 5: Advanced File Operations] ln 

***Question:*** *How would I link /home/test/testfile to /tmp/test*

> ln /home/test/testfile /tmp/test

# Task 5 - [Section 5 - Advanced File Operations]: find 

***Question:*** *How do you find files that have specific permissions?*

> -perm

***Question:*** *How would you find all the files in /home*

> find /home

***Question:*** *How would you find all the files owned by paradox on the whole system*

> find / -user paradox

# Task 6 - [Section 5: Advanced File Operations] - grep

***Question:*** *What flag lists line numbers for every string found?*

> -n

***Question:*** *How would I search for the string boop in the file aaaa in the directory /tmp*

> grep boop /tmp/aaaa

# Task 7 - Binary - Shiba3 

***Question:*** *What is shiba4's password*

> test1234

# Task 8 - [Section 6: Miscellaneous]: Intro

> No answer needed

# Task 9 - [Section 6: Miscellaneous]: sudo 

***Question:*** *How do you specify which user you want to run a command as.*

> -u

***Question:*** *How would I run whoami as user jen?*


> sudo -u jen whoami

***Question:*** *How do you list your current sudo privileges(what commands you can run, who you can run them as etc.)*

> -l

# Task 10 - [Section 6: Miscellaneous]: Adding users and groups 

***Question:*** *How would I add the user test to the group test*

> sudo usermod -a -G test test

# Task 11 - [Section 6: Miscellaneous]: nano 

> No answer needed

# Task 12 - [Section 6: Miscellaneous]: Basic shell scripting 

> No answer needed

# Task 13 - [Section 6: Miscellaneous]: Important Files and Directories 

> No answer needed

# Task 14 - [Section 6 - Miscellaneous]: Installing packages(apt) 

> No answer needed

# Task 15 - [Section 6: Miscellaneous]: Processes 

> No answer needed
