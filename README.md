Tree-Trail
==========

## Development setup

1. Install [XAMPP](https://www.apachefriends.org/download.html).

2. Install Node.js

    NodeJS will primarily be used for tooling purposes.

    - For Windows users, just [download the msi installer](http://nodejs.org/download/) appropriate for your system.
    - For Linux users, [install via your respective package managers.](https://github.com/joyent/node/wiki/installing-node.js-via-package-manager).

3. Install Git

    Git will be used as our Version Control System. This is to keep track of changes to our code.

    - For Windows users, [install msysGit](https://msysgit.github.io/)
    - For Linux users, install via your respective package managers.
        - For Ubuntu, do:
        
            ```
            sudo apt-get install -y git
            ````

4. Install Grunt and Bower

    Grunt is a JS task automation tool and Bower manages libraries and front-end dependencies.

    On both Windows and Linux, do the following in the terminal/cmd:
    
    ```
    sudo npm install -g bower grunt-cli
    ```

5. Clone the repository

   Using the terminal/cmd, do:
   
    ```
    cd /path/to/your/XAMPP/htdocs
    git clone https://github.com/fskreuz/Tree-Trail.git
    ```

   It will ask for your Github username and password.


6. TODO: Include initial DB dump to repo and add import/export instructions.

## Running

Run XAMPP 

- On Windows, start Apache and MySQL using the XAMPP Control Panel
- On Linux, you can do:

    ```
    sudo /path/to/lampp start
    ```

Once running, visit this url:

```
http://localhost/Tree-Trail
```

## Contributing code

### Creating your local copy of the project

```
git checkout -b mybranch origin/development
```

- **mybranch** - Your "branch" of the project where you can play around. Name it after what you are working on.
- **origin/development** - The branch where you want to base off your branch

Copying to your local machine is done only once. Getting changes and putting them to your local, we use `git fetch`

### Fetching changes

```
git fetch origin
git rebase origin/development mybranch
```

- **fetch** - The command to download changes from the repository
- **origin** - The repository where we get the changes (in this case, *this* GitHub repo)
- **rebase** - The command to put in changes from the repository to your local copy
- **origin/development** - The branch of the repository where to get changes from
- **mybranch** - The branch you want to put in the changes.

Rebase works by taking the repository changes and putting your changes on top of it, hence "rebase" (put remote changes as base of your changes).

### Committing changes

Once you have made your changes in the code, your code will need to be put to the "staging area". In order to do that, for each file do:
```
git add path/to/that/file
```

You can select whatever file you need to stage. you may even leave out some files. Now, in order for those staged files to be committed to history, do:
```
git commit -m "MESSAGE HERE"
```

Replace `MESSAGE HERE` with a meaningful message describing your changes.

### Sharing your changes

```
git push origin mybranch
```

Should be self-explanatory.

### Inform others

When pushing your branch changes to the repository, inform others about your changes so that they can review your code before putting it into the release branch.
