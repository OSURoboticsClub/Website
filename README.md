OSU Robotics Club Webite
=========
The purpose of the OSU Robotics Club is to empower ambitious students with resources to build robots for fun and competition, remove barriers from entry into robotics, create a path to success, and form a pipeline of engineering leaders.

We welcome students of all majors and engineering disciplines. Our members participate in international competitions against university and professional teams.

We host both internal projects geared toward the beginner, as well as external projects which encompass all levels of knowledge and skill. 

# What is this?
The OSU Robotics website in a Wordpress app! 

# Dependencies
* [Wordpress](https://wordpress.org)
In order to install all of these dependancies run this:

```bash
wget http://wordpress.org/latest.zip
tar xvf latest.zip && mv wordpress osurc
```

# How to install the OSURC theme
Type in the following commands to install the OSURC theme:

```bash
cd osurc/wp-content/themes
git clone https://github.com/OSURoboticsClub/Website osurc
```

# How to run
If you have installed the Wordpress site locally, then you'll need a way to link up mysql and apache. Download [MAMP](http://www.mamp.info/en/)
Once you have MAMP setup and running, you can visit http://localhost to go through the wordpress setup instructions. Once you finish those instructions and login, then go to Appearance > Themes from the admin page and select the OSURC theme and click Activate.
