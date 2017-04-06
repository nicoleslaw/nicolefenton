Vagrant.configure("2") do |config|

  # Box
  config.vm.box = "hashicorp/precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  # Forwarded Ports
  config.vm.network :private_network, ip: "192.168.101.23"
  config.vm.hostname = "nicolefenton.local"
  config.hostsupdater.aliases = ["nicolefenton.dev", "nf.dev"]

  # Shared Folders
  config.vm.synced_folder "./", "/vagrant",
    owner: "vagrant",
    group: "www-data",
    mount_options: ["dmode=775,fmode=664"]

  # Provisioning
  config.vm.provision :shell, :inline => "apt-get update --fix-missing"
  config.vm.provision :shell, :inline => "apt-get install -q -y python-software-properties python"
  config.vm.provision :shell, :inline => "add-apt-repository ppa:ondrej/php5 && apt-get update"
  config.vm.provision :shell, :inline => "apt-get install -q -y figlet g++ make git curl apache2 libapache2-mod-php5 php5-curl php5-cli php5-gd"
  config.vm.provision :shell, :inline => "sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf"
  config.vm.provision :shell, :inline => "sudo a2enmod rewrite"
  config.vm.provision :shell, :inline => "sudo a2enmod expires"
  config.vm.provision :shell, :inline => "service apache2 restart"

  # Change Apache Working Directory
  config.vm.provision :shell, :inline => "rm -rf /var/www/html"
  config.vm.provision :shell, :inline => "ln -fs /vagrant /var/www/html"

  # Announce Success
  config.vm.provision :shell, :inline => "figlet SUCCESS"

end
