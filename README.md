AulaLibre Website
================

Symphony project for the Fundación Aula Libre Website.


## Installation

_Assuming a default Ubuntu 12.04 LTS installation_

While this script takes care of most of the installation procedure, you still need to type some commands
manually to get it started.

Install git and prepare the installation directory:

	sudo apt-get install -y git
	sudo mkdir /var/www
	sudo chmod 777 -R /var/www
	cd /var/www

Now pull the most recent version of the installation script:

	git clone https://github.com/AulaLibre/AulaLibreWebsite .

And set it as executable

	chmod +x install.sh

Finally, to run the script enter:

	./install.sh

The installation should only ask for your root password once to download packages (via `apt-get`)
and perform some slight changes to your system configuration.
