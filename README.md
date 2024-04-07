# iks

## IKS FILE STRUCTURE
```
iks
├── php
│   └── get.php
├── tailwind.config.js
├── README.md
├── index.php
├── connection.php
├── sql-schema
│   └── indian-knowledge-system.sql
├── js
│   ├── jquery.js
│   └── scripts.js
├── assets
│   ├── images-art-forms-jpg
│   │   ├── kathakali.jpg
│   │   └── Mohiniattam.jpg
│   ├── jpgs
│   │   ├── plants-bg.jpg
│   │   ├── ayurveda.jpg
│   │   └── search-bg.jpg
│   └── pngs
│       ├── plants-bg.png
│       ├── ayurveda.png
│       └── main-bg.png
├── api
│   ├── getPlantDescriptionApi.php
│   ├── diseaseSuggestionsApi.php
│   └── plantSuggestionsApi.php
├── pages
│   ├── art-forms.php
│   ├── first-aids.php
│   ├── ayurmedics.php
│   ├── yoga.php
│   ├── header.php
│   ├── ayurmedics
│   │   ├── getDiseases.php
│   │   └── getPlants.php
│   └── artforms.php
└── css
    ├── base.css
    └── styles.css

```
---

### index.php

    the index page for ayurmedics

--- 

### connection.php

    the connection information for sql object

--- 

### sql-schema 

    DB structure

---

### js

- js script files
    - scripts.js - scripts for the navbar
    - jquery.js 

--- 

### assests

images and other assets for use

---

### api
 
   - apis for each section
       - getPlantDescriptionApi.php - for fetching plant description 
       - diseaseSuggestionsApi.php - for suggestions for diseases in remedy search section in ayurmedics
       - plantSuggestionsApi.php  - for suggestions in plants in plant search section in ayurmedics

---

### pages

pages for each section
   - Ayurmedics
   - Art forms
   - First Aids
   - Yoga

---

#### pages/ayurmedics

sub pages for ayurmedics section
 - getPlants.php
 - getDiseases.php

---

### Css

   - base.css - base tailwind css file
   - styles.css - tailwind output css file

