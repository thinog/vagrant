# Installing...
apt-get update
apt-get install -y software-properties-common
apt-add-repository --yes --update ppa:ansible/ansible
apt-get install -y ansible

# Configuring SSH key...
cp /vagrant/configs/bionic_key /home/vagrant/
chmod 600 /home/vagrant/bionic_key
chown vagrant:vagrant /home/vagrant/bionic_key