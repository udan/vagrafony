[![SensioLabsInsight](https://insight.sensiolabs.com/projects/f28f8934-740c-4205-9d29-6a69ebde2602/mini.png)](https://insight.sensiolabs.com/projects/f28f8934-740c-4205-9d29-6a69ebde2602)
[![Build Status](https://travis-ci.org/udan/vagrafony.svg?branch=master)](https://travis-ci.org/udan/vagrafony)

Vagrant for Symfony 2
=====================

1. Configuring the bundle
-------------------------

```yaml
vagrafony:
    # which services should be set up and started on the vagrant box
    install_services:
        nginx:                false
        apache:               false
```
