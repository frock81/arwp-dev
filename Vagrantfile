# -*- mode: ruby -*-
# vi: set ft=ruby :

# Sets guest environment variables.
# @see https://github.com/hashicorp/vagrant/issues/7015
$set_environment_variables = <<SCRIPT
tee "/etc/profile.d/myvars.sh" > "/dev/null" <<EOF
# Ansible environment variables.
export ANSIBLE_RETRY_FILES_ENABLED=0
EOF
SCRIPT

Vagrant.configure("2") do |config|
  config.ssh.insert_key = false
  config.ssh.private_key_path = "./insecure_private_key"
  config.vm.box = "ubuntu/xenial64"
  # config.vm.synced_folder "wordpress", "/opt/wordpress"
  config.vm.network "private_network", ip: "192.168.4.17"

  config.vm.provision "shell", inline: $set_environment_variables, run: "always"
  config.vm.provision "ansible_local" do |ansible|
      ansible.install = true
      ansible.install_mode = "pip"
      ansible.version = "2.7.10"
      ansible.provisioning_path = "/vagrant/provision"
      ansible.playbook = "playbook.yml"
      ansible.inventory_path = "hosts"
      ansible.become = true
      ansible.limit = "all"
      #ansible.vault_password_file = ".vault_pass-local"
      ansible.tags = ENV['ANSIBLE_TAGS']
      ansible.verbose = ENV['ANSIBLE_VERBOSE']
  end
end
