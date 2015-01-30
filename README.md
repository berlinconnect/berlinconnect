# Berlin Connect

Berlin Connect &#8211; Young local church in the heart of Berlin // English speaking bilingual church service worship Gemeinde Kirche Hillsong

# Get started with development

_It would be great if you document the following points as well_

* What does this repository contain, and how is it hosted?
* How can I host it locally, and deploy to the server?
* What does Node.js do?
* How do edit stuff (styles, blog, content)?
* What is make start vs. make build – and why does our marketing team have to care?

### Install dependencies

    $ make npm

### Run stylus compiler and watch filetree

    $ make start

### Make build of CSS and Javascript

    $ npm install requirejs -g
    $ make build

## Deploying changes

#### Automagically (production/development)
  * Push to production or development branch for staging, OR
  * Create a pull request against production/development branch

 Once the code is merged, the automatic deployment would pick up the changes & deploy everywhere in 10 minutes time.