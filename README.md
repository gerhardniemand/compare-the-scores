# Compare the Scores

_Please read the "Getting Started" section if you are unfamiliar with getting the project going._

## What it's about:

**Problem**: It's the end of the year, and you have two students who are in a close run for DUX student! We need to choose who is going to win the trophy by counting the "wins" on each assignment.
 
Example: (of students A and B's marks for each of the projects/assignments we are considering)

Student A: 96 48 54 84
Student B: 94 51 54 81

Comparisons:

- Student A had 96 for the first assignment, and Student B had 94. 96 > 96, so Student A is assigned a point of "1"
- Student A had 48 for the second assignment, and student B had 51. 48 < 51, so Student B is assigned a point of "1" (Student A gets "0")
- Student A has 54 for the third assignment, and student B also has 54. 54 == 54, so neither student gets a mark, both gets "0"
- Student A has 84 for the fourth assignment, and student B has 81. 84 > 81, so Student A gets "1" and student B gets "0"

Thus, Student A has a total of 1+0+0+1 = 2, and Student B has a total of 0+1+0+0 = 1. Therefore Student A is the winner.

**Input**:

You will receive two lines of input. The first line will be assigned to student A. The second line to Student B. For example:

    96 48 54 84
    94 51 54 81

**Output**:

You will output the scores for each pair, per student. So the first line will be the scores for Student A, the second line the scores for Student B. For example:

    1 0 0 1 = 2
    0 1 0 0 = 1

### Where the code sits:

You can look at two files:
- play.php: This is the file you'll run using `php play.php` to see the code in action.
- src\CompareTheScotes.php: This is the clas you'd use to do the comparison code.

### Testing:

To test, just run: `php play.php` as you did before, and see the results.

---
## Getting Started / Installing

Before you start, please have a quick read about the following technologies:

- Git: 
    + [Setting up Git - according to Github.com](https://help.github.com/articles/set-up-git/) - *this is a quick guide to set up a Git repository on your localhost (you won't need to do this, but it helps understanding it when you start playing with these repositories)*
    + [Git Tutorial for Beginners 1 What is Git Introduction](https://www.youtube.com/watch?v=_vEPmy31XDE&index=1&list=PLEIPSRdn5KEoLbRZJuS4bLlldQ4wiA5Nf) - *This video series is for those of you who are like I am - I'd rather watch the video than read :)*
        * The cool thing about that video list is, it's a list - so there's much more down the line than just introduction. Have a bit of a browse around.
- Composer
    + Composer, in a few words, is a "package manager". Most of you are familiar with linux, so you do things like "yum" or "apt-get" to install software. Think of composer as being yum or apt-get, but for PHP. 
    + It's as easy telling it that your project will be using something specific, and runnnig an installation for it. You can then start to use those classes and libraries in your code.
    + Read more about it here: [Introduction to Composer](https://getcomposer.org/doc/01-basic-usage.md)

## Right, let's start coding:

You'll have to **Fork** this project (because you won't have access to submit your code to my repository). Then you'll have to **Clone** it to your local machine. Then you'll have to install all the **dependencies with composer**, so that you can actually start work on it.

- Forking:
    + My repository is read-only to you, so you'll have to "copy" it. In github terms it's called **forking**.
    + Read up about forking [here](https://help.github.com/articles/fork-a-repo/)
- Cloning:
    + You can't work directly on github (well, you can, but you can't run your code there) - so you'll have to copy it down to your local machine. In github / git terms that's called **cloning**.
    + Read up about cloning [here](https://help.github.com/articles/cloning-a-repository/)
- Installing your dependencies:
    + Just run `php bin/composer install` inside your directory on localhost where you cloned it, and you should see a ton of stuff being installed.

## Is it working?
If you run this:

    php play.php

And you get the output:

    It worked! Try giving your own value! :)

It means it's working perfectly :)

Please chat to me or one of the devs if you need more help, and we'll give you a nudge in the right direction.



