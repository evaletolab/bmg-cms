# bmc-cms tools

a set of helper tools for the bmg-cms project

## library installation

```
$ npm i
```

## push tool

this tool syncs the local cockpit schema to a remote copy via ftp.

### 1. setup

copy file .env.example and fill relevant login information (host, user, password). 

### 2. usage

```
$ npm run push
```

### description
push tool uploads the following directories:  
- cockpit/addons
- cockpit/config
- cockpit/storage/collections
- cockpit/storage/singleton