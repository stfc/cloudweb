cloudweb
========

Simple portal based on libcloud for private corporate clouds

Current features
----------------
* Landing Page
* Registration Page (email wrapper)
* Authentication against Kerberos/Active Directory
* Creating Virtual Machines with user specified:
    * Name/Label
    * System Specification (from a list)
    * Operating System Image (from a list)
    * Quantity (1-10)
* Displaying Virtual Machines owned by a user:
    * Displaying logs from underlying cloud infrastructure
* Destroying Virtual Machines
* Support page (email wrapper)

As shipped, the code directly targets the StratusLab cloud platform, but porting should be trivial.

Requirements
------------
* Apache httpd with both `mod_ssl` and `mod_auth_kerb` configured
    * `/federal/` and `/cgi-bin/` both require `SSLRequireSSL` and `AuthType Kerberos`.
    * `/logs/` pointing to a directory of log files, one per VM of the form `<VM-ID>.log`.
* libcloud
* stratuslab-libcloud-drivers
* Python 2.x
