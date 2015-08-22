# Azure App Service Composer Example

## Deploy! 

[![Deploy to Azure](http://azuredeploy.net/deploybutton.png)](https://azuredeploy.net/)

## Prerequisites

This sample assumes that you have an Azure Storage account with a `container` and some files within that container. This sample will list the files which are contained in said container.

## Configuration

Some assembly required.

### App Settings

| Name     | Value     | Notes    |
|----------|-----------|----------|
| container| &lt;azure-storage-container-name&gt; | The container name to display

### Connection Strings

| Name     | Value     | Type     | Notes     |
|----------|-----------|----------|-----------|
| BlobConnectionString | [&lt;storage-connection-string&gt;](http://www.connectionstrings.com/windows-azure/)  | Custom   | Connection string for your Azure Storage account
