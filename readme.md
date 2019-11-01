# Sandbox Laravel

This is sandbox for Laravel.

## Installation

Installing The Homestead Vagrant Box.

```
$ vagrant box add laravel/homestead
```

Installing Homestead.

```
$ git clone https://github.com/laravel/homestead.git ~/Homestead
```

Create the `Homestead.yaml` configuration file.

```
$ cd ~/Homestead
$ bash init.sh
```

The `Homestead.yaml` will be created.

```
ip: "192.168.10.10"
memory: 2048
cpus: 2
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: ~/code
      to: /home/vagrant/code

sites:
    - map: homestead.test
      to: /home/vagrant/code/public

databases:
    - homestead

features:
    - mariadb: false
    - ohmyzsh: false
    - webdriver: false

# ports:
#     - send: 50000
#       to: 5000
#     - send: 7777
#       to: 777
#       protocol: udp
```

Setting the `Homestead.yaml`.

The `folders` property is as follows.

```
folders:
    - map: ~/code
      to: /home/vagrant/code
```

Create a directory with the `folders` property.

```
$ mkdir ~/code
```

The `sites` property is as follows.

```
sites:
    - map: homestead.test
      to: /home/vagrant/code/public
```

This time, change the Laravel project directory to `myproject`.


```
sites:
    - map: homestead.test
      to: /home/vagrant/code/myproject/public
```

Add the host name to the `hosts` file.

```
$ sudo /etc/hosts
192.168.10.10 homestead.test
```

If there is no `id_rsa` (private key) or `id_rsa.pub` (public key) in `~/.ssh`, create a key files.

```
$ ssh-keygen -t rsa
```

Launch Vagrant box.

```
$ cd ~/Homestead
$ vagrant up
```

Check if it is running.

```
$ vagrant global-status
id       name      provider   state    directory
---------------------------------------------------------------------------
a2fe9f3  homestead virtualbox running  /Users/ko/Homestead
```

Create a Laravel project with the name `myproject`.

```
$ vagrant ssh
$ cd ~/code
$ composer create-project --prefer-dist laravel/laravel myproject
```

Visit http://homestead.test in your web browser.
