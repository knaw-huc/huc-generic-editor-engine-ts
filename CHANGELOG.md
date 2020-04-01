## 1-4-2020

* completed first version of Translatin example
* bugfix with height (heigth)

## 25-3-2020

* added Translatin.json file as an example

### 29-1-2020

* fixed duplicate bug

### 24-1-2020

* tried to fix, duplicate bug, no succes yet...

### 17-1-2020

* made a seperate repository for the TypeScript version
* restored the other repository in it's original state
* cleanup, removed react version

### 16-1-2020

* bugfix instructions

### 15-1-2020

* added instructions for TypeScript development

### 10-12-2019

* solved problem with cmdi-forms https://github.com/knaw-huc/clariah-cmdi-forms
* clariah-cmdi-forms is dependent of the old structure and old code of the huc-generic-editor
* restored structure and code from the last commit of RZ

### 4-12-2019

* handler in principle
* test content

### 3-12-2019

* solved propagating properties
* experiments with different async/promises methods

### 27-11-2019

* return null statement in component
* restored css for TypeScript
* refactor names
* removed content parsing, rethink it


### 22-11-2019

* started with content parsing
* launch script failed, changed test-instructions on README.md

### 21-11-2019

* css; menu placement

### 20-11-2019

* fix upload form
* fix hierarchy bug
* show component fix
* bug fixing after refactoring
* refactor JSX elements to functions
    * error message
    * toggle component
    * multilangual popup
    * textelement
    * attributelist


### 18-11-2019

* submit click to upstate
* add scaffolding send form
* add prepared attributes list
* add free to fill attributes on certain fields
* add languages multilingual

### 15-11-2019

* add TODO list
* add Uploadcomponent
* add Multilingual select list (not finished)
* add Duplicate button 
* defaults for text size, textarea cols and rows
* optional show component button
* div for error-messages
* size, rows, cols respected
* differentiate between text en textarea
* add required indicator in JSX
* restored standalone original for comparison 
* adapted README
* add launchscript

### 14-11-2019

* primary version, all fields generated
* recursive components in REACT
* started REACT version
* no TypeScript/React yet

### 13-11-2019

* setup development environment for a REACT version
* branch reactversion 
* finished class based version (stopped because of change to react)

### 8-11-2019

* bug attributename solved
* split the call to FormBuilder to html
* working 
* JQuery this vs TypeScript class this problemsolving
* 10 new problems solved. related to casting  htmlelements in the context of this
* starting to make a class from the formbuilder
* branch classversion 

### 7-11-2019
 
 * no var left
 * added small php script to show the submitted values
 * interface for the json file
 * 0 problems left
 * improved interface validation profile

### 6-11-2019
* some interfaces
* 21 problems left

### 1-11-2019
* 99 problems 
* working through tha code
* 139 problems
* config variables included in scope
* 178 problems
* cannot find name problems declaration of variables (but not the one from the include file)
* 434 problems
* installed type definition file for JQuery ```npm install --save-dev @types/jquery```
* 520 problems
* first added "use strict" => stopped working
* 550 problems

### 25-10-2019

* added TypeScript (naive)
* added attributelist validation

### 18-10-2019

MvdP
* more attributes
* extended parser, type list in json is now possible, in development
* added multilingual attribute and free text attributes to dev-file
* added timbuctoo_edit_metatdata_dev.json as dev-file for implementing/testing new features
* changed PHP Version Dockerfile to 7.3
* changed Maintainer Dockerfile

### 17-10-2019

* added a php/apache server, with docker-compose for serving out the json (MvdP)
* split and adapted the clientcode in two versions index.html and standalone.html (MvdP)
* annotated the html files (MvdP)
* adapted the README (MvdP)
* removed unused directories (MvdP)
* tested the docker-compose file SUCCES (RZ)
* fixed defaultvalues bug (RZ & MvdP)
* added attributes.json development (RZ)

### 16-10-2019

* added example file index.html for demonstration and development (MvdP)
* changed directory structure for possible docker embeded webserver (MvdP)
* added docker-compose file for lightweight php/apache server. Is not necessary for testing. If you want to try it ```docker-compose up``` (MvdP)

